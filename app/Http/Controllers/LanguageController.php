<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
class LanguageController extends Controller
{
    public function index(){
        if(!Session::has('locale')){
            Session::put('locale', Input::get('locale'));
        }else{
            Session::set('locale', Input::get('locale'));
        }
        return Redirect::back();
    }
}
