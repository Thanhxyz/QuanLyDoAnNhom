<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        // Logic to retrieve students data

        return view('home_admin');
    }
}