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
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::post('post', ['as' => 'post', 'uses' => 'insertPosts@index']);
// Route::get('ember', functionpost () {
//     return view('EMBER.index');
// });
////////////////////////////////////////////////////////

Route::get('index', ['as' => 'index', function()
{
    return view('EMBER.index');

}])->middleware('admin');
Route::get('schedule', ['as' => 'schedule', function()
{
    return view('EMBER.schedule');

}])->middleware('admin');
Route::get('notification', ['as' => 'notification', function()
{
    $data['data']=DB::table('posts')->get();
    if(count($data)>0)
    {
        return view('EMBER.notifications',$data);
    }
    else
    {
        return view('EMBER.notifications');
    }

}])->middleware('admin');
Route::get('lecture', ['as' => 'lecture', function()
{
    return view('EMBER.lecturers');

}])->middleware('admin');
Route::get('students', ['as' => 'students', function()
{
    return view('EMBER.students');

}])->middleware('admin');
//////////////////////////////////////////////////////////
////////////////////////////////////////////////////////
Route::get('indexLec', ['as' => 'indexLec', function()
{
    return view('EMBER.lecturerPages.indexLec');

}])->middleware('lecturer');
Route::get('scheduleLec', ['as' => 'scheduleLec', function()
{
    return view('EMBER.lecturerPages.scheduleLec');

}])->middleware('lecturer');
Route::get('notificationLec', ['as' => 'notificationLec', function()
{
    $data['data']=DB::table('posts')->get();
    if(count($data)>0)
    {
        return view('EMBER.lecturerPages.notificationsLec',$data);
    }
    else
    {
        return view('EMBER.lecturerPages.notificationsLec');
    }

}])->middleware('lecturer');
Route::get('lectureLec', ['as' => 'lectureLec', function()
{
    return view('EMBER.lecturerPages.lecturersLec');

}])->middleware('lecturer');
Route::get('studentsLec', ['as' => 'studentsLec', function()
{
    return view('EMBER.lecturerPages.studentsLec');

}])->middleware('lecturer');
//////////////////////////////////////////////////////////
//////////////////////////////////////////////////////


Route::get('indexStudent', ['as' => 'indexStudent', function()
{
    return view('EMBER.studentPages.indexStudent');

}])->middleware('student');
Route::get('scheduleStudent', ['as' => 'scheduleStudent', function()
{
    return view('EMBER.studentPages.scheduleStudent');

}]);
Route::get('notificationStudent', ['as' => 'notificationStudent', function()
{
    $data['data']=DB::table('posts')->get();
    if(count($data)>0)
    {
        return view('EMBER.studentPages.notificationsStudent',$data);
    }
    else
    {
        return view('EMBER.studentPages.notificationsStudent');
    }

}])->middleware('student');
Route::get('lectureStudent', ['as' => 'lectureStudent', function()
{
    return view('EMBER.studentPages.lecturersStudent');

}])->middleware('student');
Route::get('studentsStudent', ['as' => 'studentsStudent', function()
{
    return view('EMBER.studentPages.studentsStudent');

}])->middleware('student');
/////////////////////////////////////////////////////
///////////////////////////////////////////////////
Route::get('insertDB', 'movieController@index');

//this is connected to a controller in movieControllercontroller.php

Route::get('test', 'movieController@index');


////


//checking the DB connection
Route::get('DbTest', function () {
    if (DB::connection()->getDatabaseName())
    {
    	echo 'connected'.DB::connection()->getDatabaseName();
    }
});


Route::get('test124', function () {
    return view('test');
});



// Route:: get('movies',function()
// {
// 	$movies = \app\Movie::all();

// 	echo'<pre>';
// 	print_r($movies);
// 	echo "</pre>";

// });
Auth::routes();

Route::get('/home', 'HomeController@index');
/////////admin middleware direct//////////////////////////
Route::group(['middleware' => ['admin']],function(){
    Route::get('/admin',function(){
        return view('EMBER.index');
    });
});
///////////////////////////////////////////////////////////////////////////////////////////////////
/////////lecturer middleware direct//////////////////////////
Route::group(['middleware' => ['lecturer']],function(){
    Route::get('/lecturer',function(){
        return view('EMBER.lecturerPages.indexLec');
       
    });
});
/////////////////
/////////student middleware direct//////////////////////////
Route::group(['middleware' => ['student']],function(){
    Route::get('/student',function(){
         return view('EMBER.studentPages.indexStudent');
        
    });
});
//////////////////////////////////////////////////////////




// These are the routes for the Lecture_Schedule
Route::get('/schedule/{batchID}');
Route::post('/schedule/createLecture', 'LectureScheduleController@createLecture');



// These are the routes for the notification insert
Route::get('insertNotification', ['as' => 'insertNotification', function()
{
    return view('EMBER.insertPost');

}]);
Route::post('/insert', 'postInputController@inputPost');