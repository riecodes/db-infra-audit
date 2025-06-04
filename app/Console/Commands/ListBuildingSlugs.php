<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Building;

class ListBuildingSlugs extends Command
{
    protected $signature = 'buildings:list-slugs';
    protected $description = 'List all buildings with their slugs';

    public function handle()
    {
        $buildings = Building::select('id', 'name', 'slug')->get();
        
        $this->info('Buildings and their slugs:');
        $this->line('');
        
        foreach ($buildings as $building) {
            $this->line("ID: {$building->id} | Name: {$building->name} | Slug: {$building->slug}");
        }
        
        return 0;
    }
}
