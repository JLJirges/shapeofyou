<?php

namespace App;

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
    protected $table = 'users';
    public $timestamps = false; // added for 10** error
    public $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname','lastname', 'email', 'username', 'password', 'mq', 'profilepic', 'birthdate', 'origin', 'User-Diet', 'User-Goal', 'User-Shape'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    public function getAuthPassword()
    {
        return $this->password;
    }
    public function setPasswordAttribute($password){
        $this->attributes['password'] = bcrypt($password);
    }
}
