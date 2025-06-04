<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('buildings', function (Blueprint $table) {
            $table->string('no_of_storey')->nullable();
            $table->string('type_of_building')->nullable();
            $table->string('type_of_structure')->nullable();
            $table->string('design_occupancy')->nullable();
            $table->string('year_edition_of_nscp')->nullable();
        });
    }

    public function down()
    {
        Schema::table('buildings', function (Blueprint $table) {
            $table->dropColumn([
                'no_of_storey',
                'type_of_building',
                'type_of_structure',
                'design_occupancy',
                'year_edition_of_nscp'
            ]);
        });
    }
}; 