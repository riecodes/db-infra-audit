<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('buildings', function (Blueprint $table) {
            // RVS Audit Data
            $table->decimal('rvs_score', 3, 1)->nullable();
            $table->string('rvs_assessment')->nullable();
            
            // Vulnerability Assessment
            $table->boolean('vulnerable_earthquake')->default(false);
            $table->boolean('vulnerable_landslide')->default(false);
            $table->boolean('vulnerable_liquefaction')->default(false);
            $table->boolean('vulnerable_tsunami')->default(false);
            $table->boolean('vulnerable_storm_surge')->default(false);
            
            // Physical Condition Evaluation
            $table->string('structural_condition')->nullable();
            $table->string('nonstructural_condition')->nullable();
            
            // Additional metadata
            $table->string('slug')->nullable();
            $table->text('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('buildings', function (Blueprint $table) {
            $table->dropColumn([
                'rvs_score',
                'rvs_assessment',
                'vulnerable_earthquake',
                'vulnerable_landslide',
                'vulnerable_liquefaction',
                'vulnerable_tsunami',
                'vulnerable_storm_surge',
                'structural_condition',
                'nonstructural_condition',
                'slug',
                'description'
            ]);
        });
    }
};
