<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $guarded = [];

    public function path()
    {
    	return route('organizations.show', $this);
    }

    public function divisions()
    {
    	// an organization can have many divisions
    	return $this->hasMany(Division::class);
    }
}
