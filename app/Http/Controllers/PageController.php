<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "selamat datang";
    }

    public function about(){
        return "2141720207 / Arya Wicaksana H";
    }

    public function articles($id){
        return "Artikel dengan ID ". $id;
    }
}
