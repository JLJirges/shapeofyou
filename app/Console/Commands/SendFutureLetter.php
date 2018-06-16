<?php

namespace App\Console\Commands;

use App\FutureLetter;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class SendFutureLetter extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-future-letter';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send future letter per Mail.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
       $allLetters = FutureLetter::getLetters();
       foreach($allLetters as $letter){
           $user = DB::table('users')->where('id', $letter->UserId)->first();
           $mail = new \App\Mail\FutureLetter($letter);
           Mail::to($user->email)->send($mail);

           $letter->sent = 1;
           $letter->save();
       }


    }
}
