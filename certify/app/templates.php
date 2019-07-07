<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class templates extends Model
{
   use SoftDeletes;
   protected $date=['deleted_at'];	
   protected $table='templates';
   protected $fillable=[
   'body_ara',
   'body_eng',
   'description',
   'status',
   'requires_signature',
   'layout',
   ];
}
