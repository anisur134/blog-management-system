<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SignController;
use App\Http\Controllers\CommmentController;
use Illuminate\Support\Facades\Auth;


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
// Route::get('/', function () {
//     return view('welcome');
//  });

Route::get('/',[FrontController::class,'index'])->name('/');
Route::get('/category-blog/{id}/{name}',[FrontController::class,'CategoryBlog'])->name('category-blog');
Route::get('/blog-details/{id}',[FrontController::class,'BlogDetails'])->name('blog-details');
//Sign up Controller
Route::get('/sign-up',[SignController::class,'SignUpPage'])->name('sign-up');
Route::post('/add-user',[SignController::class,'NewUser'])->name('add-user');
Route::post('/userout',[SignController::class,'LogoutUser'])->name('user-logout');
Route::get('/email-check/{email}',[SignController::class,'emailCheck']);
//sign in controller
Route::get('/sign-in',[SignController::class,'LoginPage'])->name('sign-in');
Route::post('/sign-user',[SignController::class,'Signin'])->name('sign-user');
//Category Controller
  Route::group(['middleware'=>'categoryAll'],function(){

    Route::get('/add-category',[CategoryController::class,'addCategory'])->name('add-category');
    Route::post('/new-category',[CategoryController::class,'NewCategory'])->name('new-category');
    Route::get('/manage-category',[CategoryController::class,'CategoryView'])->name('manage-category');
    Route::get('/edit-category/{id}',[CategoryController::class,'EditCategory'])->name('edit-category');
    Route::post('/Update-category',[CategoryController::class,'UpdateCategory'])->name('update-category');
    Route::post('/Delete-category',[CategoryController::class,'DeleteCategory'])->name('delete-category');
              
    });



//Blog Controller
Route::get('/add-blog',[BlogController::class,'addBlog'])->name('add-blog');
Route::post('/new-blog',[BlogController::class,'NewBlog'])->name('new-blog');
Route::get('/manage-blog',[BlogController::class,'BlogView'])->name('manage-blog')->middleware('blog');
Route::get('/edit-blog/{id}',[BlogController::class,'EditBlog'])->name('edit-blog');
Route::post('/update-blog',[BlogController::class,'UpdateBlog'])->name('update-blog');
Route::post('/Delete-blog',[BlogController::class,'DeleteBlog'])->name('delete-blog');
//Comment Controller
Route::post('/new-comment',[CommmentController::class,'NewComment'])->name('newComment');
Route::get('/manage-comment',[CommmentController::class,'ManageComment'])->name('manage-comment');
Route::get('/edit-unpublish/{id}',[CommmentController::class,'ManageUnpublish'])->name('edit-unpublish');
Route::get('/edit-publish/{id}',[CommmentController::class,'ManagePublish'])->name('edit-publish');
Auth::routes();
Route::get('/home', [HomeController::class,'index'])->name('home');

