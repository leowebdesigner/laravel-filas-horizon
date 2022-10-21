<?php

use App\Jobs\ExampleJob;
use App\Mail\TestMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/test-email', function(){
   Mail::to('contato@leowebdesigner.com.br')
         ->send(new TestMail);

    return 'ok - mail sended';
});

Route::get('/test-job', function(){
    ExampleJob::dispatch(['example' => 'value']);

    return 'ok';
});

Route::get('/', function () {
    return view('welcome');
});
