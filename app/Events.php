<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Events extends Model
{

    protected $table = 'events';
    public $timestamps = true; // added for 10** error
    public $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */



    protected $fillable = [
        'EventTitle', 'TicketsTotal', 'TicketsSold', 'EventWhen', 'EventWhat', 'EventWhere', 'Maps', 'Costs', 'Upcoming'
    ];





}

