<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Config;

class DatabaseExportController extends Controller
{
    public function download()
    {
        $db = Config::get('database.connections.mysql.database');
        $user = Config::get('database.connections.mysql.username');
        $pass = Config::get('database.connections.mysql.password');
        $host = Config::get('database.connections.mysql.host');
        $filename = 'backup_' . date('Ymd_His') . '.sql';
        $tmpPath = storage_path($filename);

        // Try both default and XAMPP mysqldump paths
        $mysqldumpPaths = [
            'mysqldump',
            'C:\xampp\mysql\bin\mysqldump.exe',
        ];
        $lastResult = null;
        $lastOutput = null;
        $lastCommand = null;
        foreach ($mysqldumpPaths as $mysqldump) {
            $command = sprintf(
                '%s -u%s -p%s -h%s %s > %s',
                escapeshellarg($mysqldump),
                escapeshellarg($user),
                escapeshellarg($pass),
                escapeshellarg($host),
                escapeshellarg($db),
                escapeshellarg($tmpPath)
            );
            $lastCommand = $command;
            $output = null;
            $result = null;
            exec($command . ' 2>&1', $output, $result);
            if ($result === 0 && file_exists($tmpPath)) {
                break;
            }
            $lastResult = $result;
            $lastOutput = $output;
        }

        // Debug info
        if (($lastResult !== null && $lastResult !== 0) || !file_exists($tmpPath)) {
            $debug = "\nCommand: $lastCommand\nResult: $lastResult\nOutput: " . print_r($lastOutput, true);
            return response('Database export failed. Please check your server configuration and mysqldump availability.' . $debug, 500);
        }

        // Stream the file as a download
        return response()->download($tmpPath)->deleteFileAfterSend(true);
    }
} 