<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

use Illuminate\Support\Facades\Mail;

Route::get('/send-test-email', function () {
    $to = 'aanthony.praveen@gmail.com'; // Replace with an email address you want to send the test email to

    Mail::raw('This is a test email from Service Geni CRM', function ($message) use ($to) {
        $message->to($to)
            ->subject('Test Email');
    });

    return 'Test email sent!';
});
