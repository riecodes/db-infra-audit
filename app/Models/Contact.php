<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'first_name',
        'middle_name', 
        'last_name',
        'full_name',
        'email',
        'facebook_name',
        'facebook_url',
        'avatar_path',
        'display_order',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'display_order' => 'integer'
    ];

    // Scope for active contacts
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // Scope for ordered contacts
    public function scopeOrdered($query)
    {
        return $query->orderBy('display_order')->orderBy('last_name');
    }

    // Get full avatar URL
    public function getAvatarUrlAttribute()
    {
        if ($this->avatar_path) {
            return asset('assets/contact/' . $this->avatar_path);
        }
        return 'https://www.svgrepo.com/show/382106/avatar-landscape-placeholder.svg';
    }

    // Get Facebook URL
    public function getFacebookLinkAttribute()
    {
        if ($this->facebook_url && !str_starts_with($this->facebook_url, 'http')) {
            return 'https://facebook.com/' . $this->facebook_url;
        }
        return $this->facebook_url;
    }
}
