<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Genre;
use App\Role;
use App\Institution;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'last_name', 'email', 'avatar_path','genre_id','role_id','institution_id', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

public function genre()
{
  return $this->belongsTo(Genre::class);
}

public function role()
{
  return $this->hasOne(Role::class, "id");
}
public function institution()
{
  return $this->belongsTo(Institution::class);
}


}
