<?php
 
namespace App\Http\Controllers;
 
use App\Vehicle_gps;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
 
class Vehicle_gpsController extends Controller{
 
    public function getVehicles(){
        
        $vehicle  = new Vehicle_gps;
        // $issue_results=$issue::find($id);
        $vehicleegps_results = DB::table('Vehicle_gps')
                                ->select('id','vehicle','vehicleLocation')
                                ->orderBy('vehicle', 'desc')
                                ->groupby('vehicle')
                                ->distinct()
                                ->get();
  		$vehiclee_results = DB::table('Vehicles')
                                ->select('id','vehiclePlate','vehicleManufacturer','vehicleColor','vehicleCc')
                                ->get();

        $json_ret_value=[];
		$json_ret_value['gps']=$vehicleegps_results;
		$json_ret_value['vehicle']=$vehiclee_results;

        $json_ret_value=json_encode($json_ret_value);

       return $json_ret_value;
    }

}