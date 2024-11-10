<?php

use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/students', function () {
    return view('students',
        [
            'students'=> Student::all()
        ]);
});
Route::get('/students/{id}', function ($id) {

    $student= Student::find($id);


    return view('student',['student'=>$student]);
});

Route::get('/contact', function () {
    return view('contact');
});
