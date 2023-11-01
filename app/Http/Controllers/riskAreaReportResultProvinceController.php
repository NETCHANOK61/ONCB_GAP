<?php

namespace App\Http\Controllers;

use App\Models\riskAreaReportResultProvince;
use App\Models\user_details;
use Illuminate\Http\Request;

class riskAreaReportResultProvinceController extends Controller
{
    //
    public function index()
    {

        $user = riskAreaReportResultProvince::all();

        $total_user = user_details::whereIn('id', $user->pluck('user_row_id'))
            ->get();

        $unable = user_details::whereNotIn('id', $user->pluck('user_row_id'))->whereIn('group_id', $user->pluck('group_id'))->get();

        return view("oncb.riskAreaReportResultProvince", ['total_user' => $total_user, 'unable' => $unable]);
    }
}
