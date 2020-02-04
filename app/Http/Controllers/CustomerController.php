<?php

namespace App\Http\Controllers;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Route;
use View;
class CustomerController extends Controller
{
    public function index(){
       $customers = Customer::all();
       return View::make('board',['customers' => $customers]);
    }
}
