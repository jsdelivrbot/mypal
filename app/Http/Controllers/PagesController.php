<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome';
        return view('pages.index')->with('title',$title);
    }

    public function sales(){
        $title = 'Sales';
        return view('pages.sales')->with('title',$title);
    }

    public function addsales(){
        $title = 'Add Sales';
        return view('pages.addsales')->with('title',$title);
    }

    public function addtracking(){
        $title = 'Add Tracking';
        return view('pages.addtracking')->with('title',$title);
    }    

    public function addinform(){
        $title = 'Add Inform';
        return view('pages.addinform')->with('title',$title);
    }
}
