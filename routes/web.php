
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
Route::get('/', 'publiccontroller1@index')->name('welcome');
Route::get('movie/{id}','publiccontroller1@singlmovie')->name('movie');
Route::get('about/','publiccontroller1@about')->name('about');
Route::get('contact/','publiccontroller1@contact')->name('contact');
Route::Post('contact/','publiccontroller1@contactpost')->name('contactpost');
Route::get('search/','publiccontroller1@search')->name('search');
Route::get('searchmovie/{letter}','publiccontroller1@searchmoviebtletter')->name('searchmoviebtletter');
Route::get('searchactor/{letter}','publiccontroller1@searchactorbtletter')->name('searchactorbtletter');
Route::get('searchproducer/{letter}','publiccontroller1@searchproducerbtletter')->name('searchproducerbtletter');

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::prefix('admin')->group(function(){
  Route::get('dashboard',"Admincontroller1@dashboard")->name('AdminDashboard') ;
  Route::get('comments',"Admincontroller1@comments")->name('Admincomments');
Route::get('users',"Admincontroller1@users")->name('Adminusers');


Route::get('movie/upload',"Admincontroller1@uploadnewmovie")->name('uploadmovie');
Route::post('movie/upload',"Admincontroller1@uploadnewmovie1")->name('uploadmoviepost');
  Route::get('movies',"Admincontroller1@movies")->name('adminmovies');
      Route::get('movies/edit/{id}',"Admincontroller1@editmovie")->name('admineditmovie');
        Route::post('movies/edit/{id}',"Admincontroller1@editmovie1")->name('admineditmovie');
        Route::post('movies/{id}/delete',"Admincontroller1@deletemovie")->name('admindeletemovie');


Route::get('actor/upload',"Admincontroller1@addnewactors")->name('addnewactors');
Route::post('actor/upload',"Admincontroller1@addnewactors1")->name('addnewactorspost');
        Route::get('actors',"Admincontroller1@actors")->name('Adminactors');
            Route::get('actors/edit/{id}',"Admincontroller1@editactor")->name('Admineditactor');
              Route::post('actors/edit/{id}',"Admincontroller1@editactor1")->name('Admineditactor');
              Route::post('actors/{id}/delete',"Admincontroller1@deleteactor")->name('Admindeleteactor');




              Route::get('producer/upload',"Admincontroller1@addnewproducer")->name('addnewproducer');
              Route::post('producer/upload',"Admincontroller1@addnewproducer1")->name('addnewproducerpost');
              Route::get('producers',"Admincontroller1@producers")->name('Adminproducers');
                  Route::get('producers/edit/{id}',"Admincontroller1@editproducer")->name('Admineditproducer');
                    Route::post('producers/edit/{id}',"Admincontroller1@editproducer1")->name('Admineditproducer');
                    Route::post('producers/{id}/delete',"Admincontroller1@deleteproducer")->name('Admindeleteproducer');



                    Route::get('type/upload',"Admincontroller1@addnewtype")->name('addnewtype');
                    Route::post('type/upload',"Admincontroller1@addnewtype1")->name('addnewtypepost');
                    Route::get('moviestypes',"Admincontroller1@moviestypes")->name('Adminmoviestypes');
                        Route::get('moviestypes/edit/{id}',"Admincontroller1@editmoviestype")->name('Admineditmoviestype');
                          Route::post('moviestypes/edit/{id}',"Admincontroller1@editmoviestype1")->name('Admineditmoviestype');
                          Route::post('moviestypes/{id}/delete',"Admincontroller1@deletemoviestype")->name('Admindeletemoviestype');

        Route::post('comment/{id}/delete',"Admincontroller1@deletecomment")->name('admindeletecomment');
        Route::post('user/{id}/delete',"Admincontroller1@admindeleteuser")->name('admindeleteuser');
        Route::get('user/{id}/edit',"Admincontroller1@adminedituser")->name('adminedituser');
          Route::post('user/{id}/edit',"Admincontroller1@adminedituserpostmethod")->name('adminedituserpostmethod');

  Route::get('reports',"Admincontroller1@reports")->name('reports');
    Route::POST('reports',"Admincontroller1@reports1")->name('reports');

});
Route::prefix('user')->group(function()
{
  Route::post('movie/{id}/comment',"Usercontroller1@addcomment")->name('addcomment');
  Route::get('dashboard',"Usercontroller1@dashboard")->name('userdashboard');
  Route::get('comment/{id}/delete',"Usercontroller1@deletecomment")->name('deletecomment');
  //  Route::get('comments',"Usercontroller1@comments")->name('usercomments');
    Route::get('profile',"Usercontroller1@profile")->name('userprofile');
    Route::Post('profile','Usercontroller1@editprofile')->name('profileedit');
    Route::get('comments',"Usercontroller1@comments")->name('usercomments');

    Route::get('moviee/{id}/{rate}',"Usercontroller1@addrate")->name('addrate');
    Route::get('movie/{id}/download',"Usercontroller1@download_movie")->name('download_movie');
    Route::post('movie/{id}/buymovie',"Usercontroller1@buymovie")->name('buymovie');

    Route::POST('movie/{file}/download','Usercontroller1@downloadToBrowser')->name('downloadToBrowser');

});
//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Route::get('/home', 'HomeController@index')->name('home');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
route::post('login', 'Auth\LoginController@login')->name('login1');
route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
route::post('password/reset', 'Auth\ResetPasswordController@reset');