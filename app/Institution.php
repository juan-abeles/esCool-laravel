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

public function users()
{
  return $this->hasMany(User::class, "institution_id");
}

public function communications()
{
  return $this->hasMany(Communication::class, "institution_id");
}



}
