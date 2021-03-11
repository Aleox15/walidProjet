<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
class HelloController extends Controller
{
    // public function __construct(){
    //     return $this->middleware('auth');
    // }
    public function showString(){
        return 'Hello';
    }

    public function index(){
        $data = 'Hello';
        $hello = 'Hello2';
        $arr = ['ayoub','ahmed'];
        return view('hello',compact('data','hello','arr'));
    }
}
