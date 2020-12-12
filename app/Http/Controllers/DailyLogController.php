<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DailyLogController extends Controller
{
    public function update($id)
    {
        $log = \App\Models\DailyLog::findOrFail($id);

        $log->update(request()->only('log'));

        return back();
    }

    public function store(Request $request)
    {
        $log = new \App\Models\DailyLog;
        $log->log = $rquest->log;
        $log->day = $rquest->day;

        // $log->create($request->all());
        $log->save();

        return back();
    }
}
