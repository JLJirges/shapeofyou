<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
    protected $table = 'users';
    public $timestamps = true; // added for 10** error
    public $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname','lastname', 'email', 'username', 'password', 'mq', 'profilepic', 'birthdate', 'origin', 'UserDiet', 'UserGoal', 'UserShape', 'BloggerBio', 'AdminText'
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

    public function deleteAccount()
    {
        $user = User::find(id);

        $user->delete();


        return redirect()->to('register')->with('global', 'We are sorry to see you go... You will be missed!');


    }


}
