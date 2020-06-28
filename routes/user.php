<?php 
Route::get('/layout', function(){
    return view('layouts/header');
});
Route::get('/chapter', 'ChapterController@index');
Route::get('/story', 'StoryController@index');


Route::group(['middleware' => 'locale'], function() {
    $ctl = 'StoryController';
    Route::get('/', 'StoryController@home')->name('home');
    Route::get('news', 'NewsController@getNews')->name('getNews');
    Route::get('news/{slug}', 'NewsController@detailNews')->name('getNews');

        Route::get('list_author', $ctl . '@listAuthor')->name('list_author');
        Route::get('contact', $ctl . '@contact')->name('contact');
        Route::get('upgrate', $ctl . '@upgrateAccount')->name('upgrateAccount');

    Route::post('/getCategory', 'StoryController@getCategory')->name('getCategory');
    Route::get('/list_story', $ctl . '@listStory')->name('list_story');
    Route::get('/{slug}', $ctl . '@viewStory');
    Route::get('/{story_slug}/{id}/{chapter_slug}' , $ctl . '@viewChapter')->name('viewChapter');

    Route::post('addComment', $ctl . '@addComment')->name('addComment');
    Route::get('vote/{id}', $ctl . '@vote')->name('vote');

    Route::get('category/{slug}', $ctl . '@getStoryByCategory')->name('getStoryByCategory');
    Route::post('/user/register', 'HomeController@UserRegister')->name('user.register');



});
