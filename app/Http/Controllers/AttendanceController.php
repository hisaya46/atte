<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Attendance;

namespace App\Http\Controllers;

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
        $records = Attendance::Paginate(5);
        return view('attendance', ['records' => $records]);
    }
}
