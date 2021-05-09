<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phonebook extends Model
{
    protected $fillable = [
        'name',
        'tel_number',
        'address',
        'picture',
      ];
      protected $primaryKey = 'id';
}
