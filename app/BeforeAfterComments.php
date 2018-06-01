<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class   BeforeAfterComments extends Model
{

    protected $table = 'bascomment';
    public $timestamps = false; // added for 10** error
    public $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */



    protected $fillable = [
        'BASId', 'UserId', 'BASDate', 'BASContent'
    ];

}

