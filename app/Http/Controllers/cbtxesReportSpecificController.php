<?php

namespace App\Http\Controllers;

use App\Models\cbtxes_report_specific;
use App\Models\user_details;
use Illuminate\Http\Request;

class cbtxesReportSpecificController extends Controller
{
    //
    public function index()
    {

        $user = cbtxes_report_specific::all();

        $total_user = user_details::whereIn('id', $user->pluck('user_row_id'))
            ->get();

        $unable = user_details::whereNotIn('id', $user->pluck('user_row_id'))->whereIn('group_id', $user->pluck('group_id'))->get();

        return view("oncb.cbTxesReportSpecific", ['total_user' => $total_user, 'unable' => $unable]);
    }
}
