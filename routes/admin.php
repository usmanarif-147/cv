<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::view('dashboard', 'admin/dashboard')->name('admin.dashboard');
    Route::view('projects', 'admin.project.projects')->name('admin.projects');
    Route::view('add-or-update', 'admin.project.add-or-update')->name('admin.add.update');

    // Technologies
    Route::view('technologies', 'admin.interview.technology.technologies')->name('admin.interview.technologies');

    // Question Answer
    Route::view('quizes', 'admin.interview.quiz.quiz')->name('admin.interview.quiz');
    Route::view('add/quiz', 'admin.interview.quiz.add')->name('admin.interview.quiz.add');
    Route::view('edit/quiz', 'admin.interview.quiz.edit')->name('admin.interview.quiz.edit');
});
