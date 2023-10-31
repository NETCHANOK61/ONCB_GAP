<?php

namespace App\Http\Controllers;

use App\Models\policeSchool;
use App\Models\user_details;
use Illuminate\Http\Request;

class policeSchoolController extends Controller
{
    //
    public function index()
    {

        $user = policeSchool::all();
        
        $total_user = user_details::whereIn('id', $user->pluck('user_row_id'))
            ->get();

        $unable = user_details::whereNotIn('id', $user->pluck('user_row_id'))->whereIn('group_id', $user->pluck('group_id'))->get();

        return view("oncb.policeSchool", ['total_user' => $total_user, 'unable' => $unable]);
    }
}
