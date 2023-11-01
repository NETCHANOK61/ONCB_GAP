<?php

namespace App\Http\Controllers;

use App\Models\user_details;
use App\Models\youthOutsReportOverview;
use Illuminate\Http\Request;

class youthOutReportOverviewController extends Controller
{
    //
    public function index()
    {

        $user = youthOutsReportOverview::all();

        $total_user = user_details::whereIn('id', $user->pluck('user_row_id'))
            ->get();

        $unable = user_details::whereNotIn('id', $user->pluck('user_row_id'))->whereIn('group_id', $user->pluck('group_id'))->get();

        return view("oncb.youthOutReportOverview", ['total_user' => $total_user, 'unable' => $unable]);
    }
}
