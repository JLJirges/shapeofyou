<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class FAQs extends Model
{

    protected $table = 'faq';
    public $timestamps = true; // added for 10** error
    public $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */



    protected $fillable = [
        'Question', 'Answer', 'created_at', 'updated_at'
    ];





}

