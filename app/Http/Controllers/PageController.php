<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $title='Welcome To Laravel';
        return view('page.index') -> with('title' , $title);
    } 
    public function about(){
        $title='About Us';
        return view('page.about') -> with(compact('title'));
    }
    public function service(){
        $data=array(
            'title' => 'services' ,
            'services' => ['Web Design' , 'Programming' , 'SEO']

        );
        return view('page.services')->with($data);
    }
}
