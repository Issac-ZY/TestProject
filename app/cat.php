<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class cat extends Model
{
   use Notifiable;
  
      /**
       * The attributes that are mass assignable.
       *
       * @var array
       */
      protected $fillable = [
          'name',  'password',
      ];
 //
}
