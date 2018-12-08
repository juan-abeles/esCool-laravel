<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Group;

class Institution extends Model
{
  protected $fillable = [
      'name',
  ];

public function groups()
{
  return $this->hasMany(Group::class, "institution_id");
}




}
