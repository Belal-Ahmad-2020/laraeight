<?php

use Illuminate\Support\Str;
use App\Mail\TEmail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DbController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MutatorController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AccessorController;
use App\Http\Controllers\AggregateController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\HttpMethodController;
use App\Http\Controllers\paginat\ionController;
use App\Http\Controllers\SubmitFormController;
use App\Http\Controllers\QueryBuliderController;
use App\Http\Controllers\SaveDataInDBController;
use App\Http\Controllers\UpdateDataInDBController;
use App\Http\Controllers\FetchDataFromDbController;
use App\Http\Controllers\DeleteDataFromDBController;
use App\Http\Controllers\UpdateDataFromDBController;
use App\Http\Controllers\RouteModelBindingController;
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
    // return redirect('about');
});



// Blade Template
    Route::get('/test', [TestController::class, 'loadView']);
    Route::view('/test', 'test');


//Form
    Route::view('/submitForm', 'submitForm');
    Route::post('/submitController', [SubmitFormController::class, 'index']);



// Route::view('/first', 'first');
    //Route::view('/about', 'about');


//Component: is like a function. you can code once and reuse it several times
// php artisan make:component Header
// to use component:   <-x-header />
// passing data to component     <x-header  date="About Page Component" />
// component constructor      public $title;   function($date) { $this->title=$data; }
// header component    h1 --   {{$title}} -- h1


// Blade Template
    // Route::get('/blade', [FirstController::class, 'loadView']);

// Form
    // Route::post('/login', [FirstController::class, 'getFormData'])->name('loginCon');
    // Route::view('/form', 'form');

// Global Middleware
    // Route::view('/muser', 'middleware.user');
    // Route::view('/mhome', 'middleware.home');
    // Route::view('/mno', 'middleware.noaccess');

// Group Middleware
    // Route::view('/mno', 'middleware.noaccess');
    // Route::group( [ 'middleware' => ['protect'] ] ,function() {
    //     Route::view('/muser', 'middleware.user');
    //     Route::view('/mhome', 'middleware.home');
    // });



// ROute Middleware
    // Route::view('/muser', 'middleware.user')->middleware('protected');
    // Route::view('/mhome', 'middleware.home');
    // Route::view('/mno', 'middleware.noaccess');


// Configuration and fetch data from db
    // make dbCOntroller
    // use Illuminate\Support\Faceds\DB;
    // Route::get('/db', [DbController::class, 'index']);
    // in controller
    // return DB::select('select*from tbl');


// Model
// Model connect laravel app with db
// Model Name should be single && table name should be plural
// if the table and model names are the same you can go to the model and  --> --  $table='tableName'  --
// to create: php artisan make:Model User
// create a controller and refer it to the model
// return Model::all();

//Route::get('/posts', [PostController::class, 'show']);
// Route::get('/bilal', [PostController::class,"displayBilal"]);



// HTTP CLient
// It is helpful when we use APIs when we create an API we can use it severl times by another frameworks like react
// or when we get data from the API by the help of HTTP Client we can render and change or display it to HTML
// it allows you to make requests to communicate with other web apps
// create a controller inside it:::   use illiminata/Support/Facades/HTTP;
// inise the fun:::   return HTTP::get('api_url');  it returns data in json format
// to render data in HTML Table;;;    create a view
//inside view :::
//


// Route::get('api_data', [HTTPClientController::class, "getApiData"]);

// HTTP Request Methods
/*
fetching, submiting forms, all we can to using HTTP Requests
GET     --> get data from form
POST    --> get data from form
PUT     --> to update
DELETE  --> to delete
PATCH   --> to update some specific columns
HEAD    --> looing for headers
OPTIONS  --> sever is working or not
*/
// Route::view('/method', 'HTTP Request/http_methods');
// Route::get('/htt', [HttpMethodController::class, 'http_req']);
// Route::post('/htt', [HttpMethodController::class, 'http_req']);
// Route::delete('/htt', [HttpMethodController::class, 'http_req']);
// Route::put('/htt', [HttpMethodController::class, 'http_req']);


// Session
// to store data in server we are using sessions it is useful for login pages and ...
/*
//Route::view('/login', 'session.login');
Route::view('/profile', 'session.profile');
Route::post('/session', [SessionController::class, 'showData'])->name('loginSess');

Route::get('/login', function() {
    if(session()->has('username')) {
        // if session is aleardy set you can't go to login page fist logout
        return redirect('session.profile');
    }
    else {
        return view('session.login');
    }
});

Route::get('/logout', function () {
    if (session()->has('username')) {
        session()->pull('username');
    }
    return redirect('login');
});
*/


// Flash Session
// data will be deleted after one refresh
// creeate model and controller
// in controller
// $data =  $req->input('name);   $req->session()->flach('name', $data); return redirect();
// blade -->   @if(session('name'))  {{session('name')}}  @endif
// Route::view('/add-member', 'Flash Session/add-member');
// Route::post('/add-new-member', [MemberController::class, 'add']);




// File Upload
// first of all make a view after that make a route
//make a controller
// you can upload file the file will be stored inside the Storage>app
/*
Route::view('/upload', 'File Upload/upload');
Route::post('/uploadFile', [FileUploadController::class, "uploadFile"]);
*/


// Localization
// puting website in multiple languages
//make a folder for each language inside lang folder and make seprate files for each languages and define keys with translation
// and translate the keys
/*
Route::get('/profile/{lang}', function($lang){
    App::setlocale($lang);
    return view('localization.profile');
});
*/

// Show list from db --. how to fetch data from db
// create a view , create a controller and return the specific view
// create a model and use it inside controller

/*
Route::get('/list', [FetchDataFromDbController::class, "showData"]);
*/


// Pagination
// to show specific data within one page
// Model::paginate(5);
// blade--> $data->links();

// Route::get('/pag', [paginationController::class, "showData"]);


// Save Data in DB
// to save data in db first of all create a form
// create a controller and catch data
// create a model and use it within controller
// save data from controller to db

// when there is no updated_at and created_at files so go to Model
// public $timestamp = false;

/*
Route::view('/saveForm', 'Save Data In DB.save');
Route::post('/store', [SaveDataInDBController::class, "saveData"]);
*/


// Delete and Update Data in DB

// Route::get('/list', [DeleteDataFromDBController::class, "list"]);
// Route::get('/delete/{id}', [DeleteDataFromDBController::class, "delete"]);

// // to update

// Route::get('/edit/{id}', [DeleteDataFromDBController::class, "showData"]);
// Route::post('/update', [DeleteDataFromDBController::class, "update"]);
// Route::view('/test', "Delete Data From DB/test");



// UPdate Data In DB

// Route::get('/list', [UpdateDataInDBController::class, "list"]);
// Route::get('/edit/{id}', [UpdateDataInDBController::class, "showData"]);
// Route::post('/update', [UpdateDataInDBController::class, "update"]);




// Query Builder
// using it u can directly connect to db without any Models
// Route::get('/selectAll', [QueryBuliderController::class, "dbOperations"]);


// Aggregate Function
// these are database functions that provide matematical calculations
// min, max, count, avg

// Route::get('/aggregate', [AggregateController::class, "operations"]);


// Join
// for geting data from two tables
// make a controller
// return DB::table('table_name')->join('onwhichtable', 'whichColumn', '=', 'incurrenttable')->get();
// company     employeee
// return DB::table('employee')->join('company', 'employee_id', '=', 'company_id')->get();
// if you want to select data
// return DB::table('employee')->join('company', 'employee_id', '=', 'company_id')->select('employee.*');
// return DB::table('employee')->join('company', 'employee_id', '=', 'company_id')->where('employee_id', 1);



// Migration
// make dynamically your table using laravel
// very helpful to manage database when many developers working on sepecific project
// mifration table is created by laravel itself to keep record of every table
// php artisan make:migration create_post_table
// php artisan migrate

// to reset   --> php artisan migrate:reset
// to rollback  --> php artisan migrate:rollback --step=3
// to refresh(erase previous data ) --> php artisan migrate:refresh
// to migrate specifica table
// --> php artisam make:migraten --path=/databases/migrations/migration_name_here



// Seeding
// to add fack data inside the db
// php artisan make:seeder BilalSeeder
//         DB::table('bilal')->insert([
//     'name' =>Str::random(10),
//     'fname' =>Srr::random(10),
//     'lname' => Str::random(10)
// ]);

// use Illuminate\Support\Facades\DB; and use Illuminate\Support\Str;
//  to run the seeder   php artisan db:seed --class=BilalSeeder

// Accessor
// to modify data in app base not database based
// make controller
// mkae amodel for the table
// go to model
// public function getNameAttribute($value) {
    // return ucFirst($value);   capitalize first word
//}

// Route::get('/acc', [AccessorController::class, "index"]);


// Mutator
// updating data before save it to database
// make controller and model
//go to the model
// public function setNameAttribute($value) {
    // $this->attributes['name'] = "Mr " . $value;
//}

// Route::get('/mutator', [MutatorController::class, "index"]);



// ONe to One Relationship
// fetch data from tables based on one shared key
// one to one means one column from first table can have only one column in another table
// here we make a relation between two tables users and posts
// make Model for BilalPost and BilalUser
// mkae Controller for them

// BilalPost
Route::get('/posts', [BilalPostController::class, "showPosts"]);





// Stub
// file structure defined in stub
// exmaple when you create a controller laravel automatically make an index function for you or ...
// publish stub   php artisan stub:publish
// find stubs related to your task (controller.plain.stub)
// in controller.plain.stub you can make an index function
// go to Model.stub and public $timestamps = false;



// Fluent Strings
// chaining of the methods
//   use Illuminate\Support\Str;
//  $data = "hello laravel"
// $data = Str::ucFirst($data);
// $data = Str::replaceFirst('Hello', 'Hi', $data);
// $data = Str::camel($data);

// now you can write
// $data = Str::of($data)
//    ->ucFirst($data)
//    ->replaceFirst('Hello', 'Hi', $data);


// Route Model Binding
// fetch data with less code
// you can search throw tables using defferent columns

// Route::get('/bind/{key}', [RouteModelBindingController::class, "index"]);
// search by name
// Route::get('/bind/{key}', [RouteModelBindingController::class, "index"]);


// update laravel 7 to laravel 8
// go to json file and update some folders
// then run    composer update



// email sending
// php artisan make:mail TestEmail --markdown=emails.TestEmail
// inside web.php    use App\Mail\TestEmail;
// return new TestEmial();

Route::get('/mail', function() {
    return new TEmail();
});

















