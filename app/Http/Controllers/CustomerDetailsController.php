<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerDetails;

class CustomerDetailsController extends Controller
{
    //
    function index(){
        $data= CustomerDetails::all();

        return view('customerdetails', ['customer'=>$data]);
    }

}
