<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FacultyController;

use App\Http\Controllers\StudentController;



route::get('/viewallfaculties',[FacultyController::class,'index']);


route::get('/student',[StudentController::class,'create']);

route::get('/', [FacultyController::class,'create']);

route::post('/facultyread', [FacultyController::class,'store']);


route::post('/facultysearch', [FacultyController::class,'search']);


route::post('/facultyeditprocess/{id}', [FacultyController::class,'update']);


route::get('/faculty/{id}/edit', [FacultyController::class,'edit']);


route::get('/faculty/{id}/delete', [FacultyController::class,'deleteview']);

route::post('/facultydeleteprocess/{id}',[FacultyController::class,'destroy']);