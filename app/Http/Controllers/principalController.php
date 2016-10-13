<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\itemModel;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class principalController extends Controller
{
    public function index(){
    	$item=itemModel::find(1);
    	return view("inicio", compact("item"));
    }
}
