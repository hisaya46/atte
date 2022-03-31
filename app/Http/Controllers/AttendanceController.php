<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Attendance;
use App\Models\Rest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AttendanceController extends Controller
{
    //打刻ページ表示
    public function getIndex()
    {
        return view('index');
    }
    //勤務開始処理
    public function startAttendance()
    {
    }
    //勤務終了処理
    public function endAttendance()
    {
    }
    //日付一覧ページ表示
    public function getAttendance()
    {
        //データの取得
        // $items = Attendance::select('name')->get();
        // $items = Attendance::select('start_time', 'end_time')->get();

        $attendances = Attendance::all();

        $attendances = Rest::select(DB::raw('TIMEDIFF(breakout_time,breakin_time) as rest_time'))
            ->get();

        $attendances = Attendance::select(DB::raw('TIMEDIFF(end_time,start_time) as work_time'))
            ->get();

        $attendances = Attendance::Paginate(5);

        return view('attendance', compact('attendances'));
    }
}
