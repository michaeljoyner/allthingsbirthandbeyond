<?php

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

Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');
Route::get('testimonials', 'PagesController@testimonials');
Route::get('thanks', 'PagesController@thanks');

Route::get('blog', 'BlogController@index');
Route::get('blog/{slug}', 'BlogController@show');

Route::get('contact', 'ContactController@show');
Route::post('contact', 'ContactController@store');

Route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('admin/login', 'Auth\LoginController@login');
Route::post('admin/logout', 'Auth\LoginController@logout')->name('logout');

Route::post('admin/users', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::group(['prefix' => 'admin/services', 'namespace' => 'Admin\Services'], function() {


    Route::group(['middleware' => 'auth'], function() {
        Route::get('users', 'UsersServiceController@index');

        Route::get('testimonials', 'TestimonialsController@index');
    });
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {


    Route::group(['middleware' => 'auth'], function() {
        Route::get('/', 'DashboardController@dashboard');

        Route::get('preview/articles/{articles}', 'ArticlePreviewController@show');

        Route::get('users', 'UsersController@index');
        Route::delete('users/{user}', 'UsersController@delete')->middleware('superadmin');

        Route::get('users/passwords', 'UsersPasswordController@edit');
        Route::post('users/passwords', 'UsersPasswordController@update');

        Route::get('testimonials', 'TestimonialsController@index');
        Route::post('testimonials', 'TestimonialsController@store');
        Route::post('testimonials/{testimonial}', 'TestimonialsController@update');
        Route::delete('testimonials/{testimonial}', 'TestimonialsController@delete');

        Route::post('published-testimonials', 'PublishedTestimonialsController@store');
        Route::delete('published-testimonials/{testimonial}', 'PublishedTestimonialsController@delete');

        Route::post('testimonials/{testimonial}/image', 'TestimonialsImageController@store');
        Route::delete('testimonials/{testimonial}/image', 'TestimonialsImageController@delete');
    });
});

