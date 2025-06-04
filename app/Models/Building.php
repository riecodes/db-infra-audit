<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Building extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'name', 
        'lat', 
        'lng', 
        'main_img',
        'no_of_storey',
        'type_of_building',
        'type_of_structure',
        'design_occupancy',
        'year_edition_of_nscp',
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
    ];

    protected $casts = [
        'lat' => 'decimal:7',
        'lng' => 'decimal:7',
        'rvs_score' => 'decimal:1',
        'vulnerable_earthquake' => 'boolean',
        'vulnerable_landslide' => 'boolean',
        'vulnerable_liquefaction' => 'boolean',
        'vulnerable_tsunami' => 'boolean',
        'vulnerable_storm_surge' => 'boolean',
    ];

    protected $appends = ['generated_slug'];

    public function getGeneratedSlugAttribute()
    {
        return Str::slug($this->name);
    }

    public function getRiskLevelAttribute()
    {
        if ($this->rvs_score >= 2.0) {
            return 'Low Risk';
        } elseif ($this->rvs_score >= 1.0) {
            return 'Medium Risk';
        } else {
            return 'High Risk';
        }
    }

    public function getAuditStatusAttribute()
    {
        return $this->rvs_score ? 'Completed' : 'Pending';
    }
}
