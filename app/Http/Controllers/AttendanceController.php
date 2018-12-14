<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attendance;
use Illuminate\Support\Facades\Auth;

class AttendanceController extends Controller
{
    public function store(Request $request)
    {
      $attendance = new Attendance();
      $attendance->value = $request->value;
      $attendance->student_id = $request->user_id;
      $attendance->date = $request->date;
      $save = $attendance->save();
      if ($save) {
        $request->session()->flash('alert-success', 'Added Succesfully!');
      }
      else {
        $request->session()->flash('alert-danger', 'OOpss!');
      }
        return redirect(route('home'));
    }
}
