<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Load;
use App\Models\Customer;
use App\Models\Shipper;
use App\Models\Consignee;
use App\Models\Driver;
use App\Models\Equipment;
use App\Models\Dispatch;
class DeshboardController extends Controller
{

    public function index(){
      $loads = Load::count();
      $customers = Customer::count();
      $shippers = Shipper::count();
      $consignees = consignee::count();
      $drivers = Driver::count();
      $equipments = Equipment::count();
      $dispatchs = Dispatch::count();
      return view('admin.dashboard',compact('loads','customers','shippers','consignees','drivers','equipments','dispatchs'));
    }
}
