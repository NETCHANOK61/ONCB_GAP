<?php

namespace App\Http\Controllers;

use App\Models\monthReportMeetingProvince;
use App\Models\user_details;
use Illuminate\Http\Request;

class monthReportMeetingProvinceController extends Controller
{
    //
    public function index()
    {

        $user = monthReportMeetingProvince::all();

        $total_user = user_details::whereIn('id', $user->pluck('user_row_id'))
            ->get();

        $unable = user_details::whereNotIn('id', $user->pluck('user_row_id'))->whereIn('group_id', $user->pluck('group_id'))->get();

        return view("oncb.monthReportMeetingProvince", ['total_user' => $total_user, 'unable' => $unable]);
    }
}
