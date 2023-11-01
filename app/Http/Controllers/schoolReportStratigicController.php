<?php

namespace App\Http\Controllers;

use App\Models\schoolReportStratigic;
use App\Models\user_details;
use Illuminate\Http\Request;

class schoolReportStratigicController extends Controller
{
    //
    public function index()
    {

        $user = schoolReportStratigic::all();

        $total_user = user_details::whereIn('id', $user->pluck('user_row_id'))
            ->get();

        $unable = user_details::whereNotIn('id', $user->pluck('user_row_id'))->whereIn('group_id', $user->pluck('group_id'))->get();

        return view("oncb.schoolReportStratigic", ['total_user' => $total_user, 'unable' => $unable]);
    }
}
