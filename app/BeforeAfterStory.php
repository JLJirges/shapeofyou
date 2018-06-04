<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class BeforeAfterStory extends Model
{

    protected $table = 'beforeafterstories';
    public $timestamps = true; // added for 10** error
    public $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */



    protected $fillable = [
        'BeforeAfterStoryUserId', 'BeforeAfterStoryTitle', 'BeforeAfterStoryContent', 'BeforeAfterStoryImageOne', 'BeforeAfterStoryImageTwo', 'created_at',
    ];

}

