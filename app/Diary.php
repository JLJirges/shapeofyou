<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{

    protected $table = 'diaries';
    public $timestamps = false; // added for 10** error
    public $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */



    protected $fillable = [
        'DiaryTitle', 'DiaryContent', 'DiaryHeroImage', 'DiaryDate', 'DiaryUserId',
    ];



}

