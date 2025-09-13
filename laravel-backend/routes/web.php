<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function(){ return view('welcome'); });

Auth::routes();

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class,'index'])->name('dashboard');

    // LMS
    Route::resource('courses', App\Http\Controllers\CourseController::class);
    Route::post('courses/{course}/enroll', [App\Http\Controllers\EnrollmentController::class,'enroll'])->name('courses.enroll');

    // Assignments, Quizzes, Live Classes
    Route::resource('assignments', App\Http\Controllers\AssignmentController::class);
    Route::resource('quizzes', App\Http\Controllers\QuizController::class);
    Route::resource('live-classes', App\Http\Controllers\LiveClassController::class);

    // Results / Marksheet
    Route::resource('results', App\Http\Controllers\ResultController::class);
    Route::get('results/{result}/marksheet/pdf', [App\Http\Controllers\ResultController::class,'marksheetPdf'])->name('results.marksheet.pdf');

    // Fees
    Route::resource('fee-invoices', App\Http\Controllers\FeeInvoiceController::class);
    Route::get('fee-invoice/{invoice}/pdf', [App\Http\Controllers\FeeInvoiceController::class,'generatePdf'])->name('fee.invoice.pdf');

    // Admin module toggles
    Route::get('admin/modules', [App\Http\Controllers\Admin\ModuleController::class,'index'])->name('admin.modules');

    // Other modules scaffolds (students, staff, hostel etc.)
    Route::resource('students', App\Http\Controllers\StudentController::class);
    Route::resource('staff', App\Http\Controllers\StaffController::class);
});
