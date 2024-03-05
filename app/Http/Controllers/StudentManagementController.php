<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentManagementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Thêm dòng này
    }

    public function index()
    {
        // Logic to retrieve students data

        return view('student_management');
    }
}