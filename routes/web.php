<?php

use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\ContactFormController;
use App\Http\Controllers\backend\BannerController;
use App\Http\Controllers\backend\AboutBackController;
use App\Http\Controllers\backend\BlogBackController;
use App\Http\Controllers\backend\OfferController;
use App\Http\Controllers\backend\OurGoalController;
use App\Http\Controllers\backend\ServiceBackController;
use App\Http\Controllers\backend\TeamBackController;
use App\Http\Controllers\backend\FaqController;
use App\Http\Controllers\backend\GalleryCategoryController;
use App\Http\Controllers\backend\CustomerReviewController;
use App\Http\Controllers\backend\GalleryBackController;
use App\Http\Controllers\backend\BlogCommentController;
use App\Http\Controllers\backend\SettingController;
use App\Http\Controllers\backend\SettingImageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\MainController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\GalleryController;
use App\Http\Controllers\frontend\ServiceController;
use App\Http\Controllers\frontend\ServiceDetailController;
use App\Http\Controllers\frontend\BlogDetailController;
use App\Http\Controllers\frontend\TeamController;



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

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/main', [MainController::class, 'index'])->name('main');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/service_details', [ServiceDetailController::class, 'index'])->name('service_details');
Route::get('/blog_details/{id}', [BlogDetailController::class, 'index'])->name('blog_details');
Route::get('/team', [TeamController::class, 'index'])->name('team');




Route::resource('admin', AdminController::class);
Route::resource('contact_form', ContactFormController::class);
Route::resource('banner', BannerController::class);
Route::resource('aboutback', AboutBackController::class);
Route::resource('blogback', BlogBackController::class);
Route::resource('offer', OfferController::class);
Route::resource('our_goal', OurGoalController::class);
Route::resource('serviceback', ServiceBackController::class);
Route::resource('teamback', TeamBackController::class);
Route::resource('faq', FaqController::class);
Route::resource('gallery_category', GalleryCategoryController::class);
Route::resource('customer_review', CustomerReviewController::class);
Route::resource('galleryback', GalleryBackController::class);
Route::resource('blog_comment', BlogCommentController::class);
Route::resource('setting', SettingController::class);
Route::resource('setting_image', SettingImageController::class);


require __DIR__ . '/auth.php';