<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentManagementController extends Controller
{
    public function index()
    {
        // Logic to retrieve students data

        return view('student_management');
    }
    
}
