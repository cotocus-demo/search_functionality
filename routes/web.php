<?php
use Illuminate\Support\Facades\Input;
use App\Customer;
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
	$data = Customer::paginate(9);
    return view('welcome')->withData($data);
});

Route::any('/search',function(){
	$q = (Input::get('q'));
	if($q != ''){
		$data =Customer::where('name','like','%'.$q.'%')->orWhere('email','like','%'.$q.'%')->paginate(5)->setpath('');
		$data->appends(array(
           'q' => Input::get('q'),
		));
		if(count($data)>0){
			return view('welcome')->withData($data);
		}
		return view('welcome')->withMessage("No Results Found!");
	}
});
