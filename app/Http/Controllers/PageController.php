<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class PageController extends Controller
{
    public function about() {
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function gallery() {
        return view('gallery');
    }
    public function sitemap() {
        return view('sitemap');
    }
    public function service() {
        return view('service');
    }

    public function terms() {
        return view('terms');
    }
    public function privacy() {
        return view('privacy');
    }
    public function declaration() {
        return view('declaration');
    }
}