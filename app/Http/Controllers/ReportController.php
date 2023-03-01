<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Load;
class ReportController extends Controller
{
        public function Driver()
        {
            return view('admin.report.driverpay');
        }


        public function Driver_data(Request $request)
        {
            $start_date = '2023-02-23';
            $end_date = '2022-12-31';

            $records = DB::table('Load')
                        ->whereBetween('date_field', [$start_date, $end_date])
                        ->get();

        }




}
