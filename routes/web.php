
<?php

use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\AddPropertyController;
use App\Http\Controllers\Auth\CustomAuthController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\SpecialPropertyController;
use App\Http\Middleware\AdminMiddleware;

Route::get('/properties', function () {
    return view('properties.index');
})->name('properties.index');






Route::get('login',function(){
    return "must be login";
})->name('login');



Route::post('/logout', function () {
    auth()->Auth::logout();
    return redirect('/'); 
})->name('logout');


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';


Route::get('add',[AddPropertyController::class,'store']);

Route::group(['prefix'=>'add'],function(){
    
    
    Route::get('create',[AddPropertyController::class,'create'])->name('Property.create');
    Route::post('store',[AddPropertyController::class,'store'])->name('add.store');
    
    Route::get('all',[AddPropertyController::class,'getAllProperty'])->name('Property.all');

     Route::get('edit/{id}',[AddPropertyController::class,'editProperty'])->name('Property.edit');
    Route::post('update/{id}',[AddPropertyController::class,'updateProperty'])->name('Property.update');
    Route::get('delete/{id}',[AddPropertyController::class,'deleteProperty'])->name('Property.delete');

   
    Route::get('allAdmin',[AddPropertyController::class,'AdmingetAllProperty'])->middleware(AdminMiddleware::class)
    ->name('dashboard');






});




    
    
    Route::group(['meddleware'=>['auth','CheckAge']],function(){

        Route::get('adualt',[CustomAuthController::class,'adualt'])->name('adult');
    });





        Route::get('site',[CustomAuthController::class,'site'])->middleware('auth:web')->name('site');
        Route::get('admin',[CustomAuthController::class,'admin'])->middleware(['auth:admin'])->name('admin');


        Route::get('admin/login',[CustomAuthController::class,'adminLogin'])->name('admin.login');
        Route::post('admin/login',[CustomAuthController::class,'checkAdminLogin'])->name('save.admin.login');

        


Route::resource('complaints', ComplaintController::class)->only(['create', 'store', 'index']);


Route::get('/landing', function () {
    return view('layouts.offers.landing');
})->name('contact');

Route::get('/comlaint', function () {
    return view('complaints.complaint');
})->name('complaint');




Route::post('/result', [SpecialPropertyController::class, 'store'])->name('result.store');
Route::get('/result', [SpecialPropertyController::class, 'index'])->name('result.index');



Route::get('/listSpicialOreder', function () {
    return view('special_properties.index');
});


