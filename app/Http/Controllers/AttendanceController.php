<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Attendance;
use App\Models\Rest;
use Carbon\Carbon;
use Illuminate\Http\Request;

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

        $date = Rest::select(DB::raw('TIMEDIFF(breakin_time,breakout_time) as rest_time'))->get();
        $date = Attendance::all();

        $items = $date;
        return view('attendance', ['items' => $items]);
    }
}
