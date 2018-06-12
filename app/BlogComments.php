<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class BlogComments extends Model
{

    protected $table = 'blogcomment';
    public $timestamps = true; // added for 10** error
    public $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */



    protected $fillable = [
        'BlogId', 'UserId', 'BlogCommentDate', 'BlogCommentContent', 'created_at', 'deleted_at'
    ];

}

