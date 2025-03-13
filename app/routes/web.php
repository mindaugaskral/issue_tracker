<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IssueController;

Route::get('/', [IssueController::class, 'index'])->name('issues.index');
Route::post('/issues', [IssueController::class, 'store'])->name('issues.store');
Route::patch('/issues/{issue}', [IssueController::class, 'update'])->name('issues.update');
