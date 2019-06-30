<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        $imgPath = ($this->image) ? $this->image : '/profile/9vTBVF1bAz8Gzb9elBgFM82hWm6XQCHM24vsKj1b.png';
        return '/storage/' . $imgPath;
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
}
