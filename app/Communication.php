<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Communication extends Model
{
  protected $fillable = [
      'subject', 'content', 'institution_id',
  ];
}
