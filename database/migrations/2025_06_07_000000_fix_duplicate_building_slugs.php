<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Get all buildings and update their slugs to be unique
        $buildings = DB::table('buildings')->get();
        $usedSlugs = [];
        
        foreach ($buildings as $building) {
            $baseSlug = Str::slug($building->name);
            $slug = $baseSlug;
            $counter = 1;
            
            // If slug already used, append a number
            while (in_array($slug, $usedSlugs)) {
                $slug = $baseSlug . '-' . $counter;
                $counter++;
            }
            
            $usedSlugs[] = $slug;
            
            // Update the building with the unique slug
            DB::table('buildings')
                ->where('id', $building->id)
                ->update(['slug' => $slug]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Reset all slugs to null
        DB::table('buildings')->update(['slug' => null]);
    }
};
