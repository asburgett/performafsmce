<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientSite extends Model
{
    protected $guarded = [];
    
	public function client()
	{
		// a client site belongs to a client
		return $this->belongsTo(Client::class);
	}
	
	public function locations()
	{
		// a client site can have many locations
		return $this->belongsToMany(Location::class);
	}

	public function equipment()
	{
		// a client site can have many pieces of equipment
		return $this->hasMany(Equipment::class);
	}
}
