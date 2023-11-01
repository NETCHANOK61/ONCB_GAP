<?php

namespace App\Http\Controllers;

use App\Models\communityReportOverviewVillage;
use App\Models\user_details;
use Illuminate\Http\Request;

class communityReportOverviewVillageController extends Controller
{
    //
    public function index()
    {

        $user = communityReportOverviewVillage::all();

        $total_user = user_details::whereIn('id', $user->pluck('user_row_id'))
            ->get();

        $unable = user_details::whereNotIn('id', $user->pluck('user_row_id'))->whereIn('group_id', $user->pluck('group_id'))->get();

        return view("oncb.communityReportOverviewVillage", ['total_user' => $total_user, 'unable' => $unable]);
    }
}
