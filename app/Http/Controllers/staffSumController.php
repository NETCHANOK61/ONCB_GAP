<?php

namespace App\Http\Controllers;

use App\Models\staffSum;
use App\Models\user_details;
use Illuminate\Http\Request;

class staffSumController extends Controller
{
    //
    public function index()
    {

        $user = staffSum::all();

        $total_user = user_details::whereIn('id', $user->pluck('user_row_id'))
            ->get();

        $unable = user_details::whereNotIn('id', $user->pluck('user_row_id'))->whereIn('group_id', $user->pluck('group_id'))->get();

        return view("oncb.staffSum", ['total_user' => $total_user, 'unable' => $unable]);
    }
}
