<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    protected $fillable = [
    	'code',
		'datetime',
		'id_proveedor',
		'id_cliente',
		'sent',
		'delivered',
		'address',
	];

	protected $hidden = [
		'id',
		'created_at',
		'updated_at',
	];
}
