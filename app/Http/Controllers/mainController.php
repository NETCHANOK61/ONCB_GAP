<?php

namespace App\Http\Controllers;

use App\Models\user_details;
use Illuminate\Http\Request;

class mainController extends Controller
{
    //
    public function index()
    {

        $user = user_details::all();

        return view("oncb.main", ['total_user' => $user]);
    }
}
