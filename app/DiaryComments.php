<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class DiaryComments extends Model
{

    protected $table = 'diarycomment';
    public $timestamps = false; // added for 10** error
    public $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */



    protected $fillable = [
        'DiaryId', 'UserId', 'DiaryCommentDate', 'DiaryCommentContent'
    ];

}

