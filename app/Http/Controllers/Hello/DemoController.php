<?php
namespace App\Http\Controllers\Hello;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class HelloDemoController extends Controller{
  // 輸入下列程式碼
  public function index(){
    return 'Hello Controller';
  }
}
