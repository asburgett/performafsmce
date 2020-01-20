<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $guarded = [];

    public function clientSites()
    {
    	// a client can have many client sites
    	return $this->hasMany(ClientSite::class);
    }
}
