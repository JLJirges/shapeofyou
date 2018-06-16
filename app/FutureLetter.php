<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class FutureLetter extends Authenticatable
{
    protected $table = 'futureletters';
    public $timestamps = true; // added for 10** error
    public $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'LetterTitle', 'LetterContent', 'UserId', 'created_at', 'sent', 'received_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

   public static function getLetters() {
       return self::where('sent', 0)->whereRaw('received_at < now()')->get();
   }




}
