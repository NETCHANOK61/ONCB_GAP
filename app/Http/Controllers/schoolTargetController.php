<?php

namespace App\Http\Controllers;

use App\Models\schoolTarget;
use App\Models\user_details;
use Illuminate\Http\Request;

class schoolTargetController extends Controller
{
    //
    public function index()
    {

        $user = schoolTarget::all();

        $total_user = user_details::whereIn('id', $user->pluck('user_row_id'))
            ->get();

        $unable = user_details::whereNotIn('id', $user->pluck('user_row_id'))->whereIn('group_id', $user->pluck('group_id'))->get();

        return view("oncb.schoolTarget", ['total_user' => $total_user, 'unable' => $unable]);
    }
}
