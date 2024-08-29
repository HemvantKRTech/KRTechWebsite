<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;
use App\Models\TermsCondition;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [WebController::class, 'index']);
Route::get('/service', [WebController::class,'webservice'])->name('webservice');
Route::get('/about', function () {
    return view('FrontendPages.about');
})->name('about');
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/newssubscribe', [WebController::class, 'newssubscribe'])->name('newssubscribe');

Route::get('/service/{slug}', [WebController::class, 'show'])->name('servicedetail');
Route::get('/contactus', function () {
    return view('FrontendPages.contactus');
})->name('contactus');
Route::get('/privacy-policy', [WebController::class,'privacy'])->name('webprivacy');
Route::get('/termsandconditions',function(){
    $term = TermsCondition::find(1); 
    return view('FrontendPages.TermsAndCondition',compact('term'));
   })->name('termsandconditions');
   Route::post('/contact-form', [WebController::class, 'submitForm'])->name('contact.submit');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard')->middleware('auth');
Route::middleware('auth')->group(function () {
    Route::get('home-page-settings', [HomePageController::class, 'index'])->name('homepage');
    Route::post('slidersave', [HomePageController::class, 'create'])->name('slidersave');
    Route::post('/sliders/{id}', [HomePageController::class, 'destroy'])->name('slider.destroy');
    Route::post('/add-team', [HomePageController::class, 'addteam'])->name('addteam');
    Route::delete('/delete/{id}', [HomePageController::class, 'delete'])->name('delete');
   Route::get('/teamedit/{id}', [HomePageController::class, 'teamedit'])->name('teamedit');
   Route::post('/team/{id}', [HomePageController::class, 'updateteam'])->name('team.update');
    Route::post('/blogs', [HomePageController::class, 'store'])->name('blogs.store');
    Route::get('/blog/{slug}', [HomePageController::class, 'singleblog'])->name('blogs.single');
    Route::get('/editblog/{id}', [HomePageController::class, 'editblog'])->name('blogs.edit');
Route::put('updateblog/{id}', [HomePageController::class,'updateblog'])->name('update.blog');
Route::delete('/deleteblogs/{id}', [HomePageController::class, 'blogdestroy'])->name('blogs.destroy');

    Route::get('/allcomment', [HomePageController::class, 'allcomment'])->name('allcomment');
    Route::post('/approvecmnt/{id}', [HomePageController::class, 'approveCmnt'])->name('approvecmnt');
    Route::post('/disapprovecmnt/{id}', [HomePageController::class, 'disapproveCmnt'])->name('disapprovecmnt');
    Route::post('/deletecmnt/{id}', [HomePageController::class, 'deleteCmnt'])->name('deletecmnt');
    Route::get('/services', [HomePageController::class, 'services'])->name('services');
    Route::post('/addservice', [HomePageController::class, 'addservice'])->name('addservice');
    Route::get('/allservices', [HomePageController::class, 'allservice'])->name('allservice');
    Route::post('/deleteservice/{id}', [HomePageController::class, 'deleteservice'])->name('deleteservice');
    Route::get('/privacypolicy', [HomePageController::class, 'privacypolicy'])->name('privacypolicy');
    Route::post('/privacypolicy', [HomePageController::class, 'privacypolicystore'])->name('privacypolicystore');
   Route::get('/termsconditions',function(){
    $term = TermsCondition::find(1); 
    return view('Admin/termsandcondition',compact('term'));
   })->name('termsconditions');
   
   Route::post('/conditionstore', [HomePageController::class, 'conditionstore'])->name('conditionstore');






});
Route::post('addcomment', [WebController::class, 'addcomment'])->name('addcomment');
Route::get('/test',function () {
    return view('Admin/test');
});
