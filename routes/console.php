<?php

use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

/*Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
});*/

/*Artisan::command('send',function(){
    $this->comment('send hello');
});*/

Artisan::command('catch {project}', function ($project) {
    $this->info("catch {$project}!");
})->describe('catch the project');
