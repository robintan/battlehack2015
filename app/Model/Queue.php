<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Queue extends Model {

	protected $table = 'queues';

	protected $guarded = [];

	protected $hidden = ['merchant_id'];

}
