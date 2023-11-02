<?php

namespace App\Http\Controllers;

use App\Models\communityReportProblem;
use App\Models\user_details;
use Illuminate\Http\Request;

class communityReportProblemController extends Controller
{
    //
    public function index()
    {

        $user = communityReportProblem::all();

        $total_user = user_details::whereIn('id', $user->pluck('user_row_id'))
            ->get();

        $unable = user_details::whereNotIn('id', $user->pluck('user_row_id'))->whereIn('group_id', $user->pluck('group_id'))->get();

        return view("oncb.communityReportProblem", ['total_user' => $total_user, 'unable' => $unable]);
    }
}
