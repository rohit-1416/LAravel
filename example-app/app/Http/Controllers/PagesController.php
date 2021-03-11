<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title="welcome to Laravel";
        return view ('Pages/index',compact('title'));
    // way 1 to add dynamic valute in pages/index
    }
    public function about(){
        $data=array(
            'title'=>'about'
            
        );
        return view ('Pages/abt')->with ($data);
        // passing dynamic arry way2 
    }
    public function Services(){
        $data=array(
            'title'=>'Services',
            'services'=>['web design','programming','SEO']
            
        );
        return view ('Pages/services')->with ($data);
    }
}
