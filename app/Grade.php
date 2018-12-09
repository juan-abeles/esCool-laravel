<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = [
        'name', 'value', 'user_id', 'subject_id',
    ];

    public function subject()
    {
      return $this->belongsTo(Subject::class);
    }
}
