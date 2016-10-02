<?php
 
namespace App\Http\Controllers;
 
use App\Issue;
use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
 
class IssueController extends Controller{
 
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function setIssue(Request $request){
        /*
        $table->integer('customer')->unsigned();
        $table->string('location');
        $table->string('garage');
        $table->string('files');
        $table->string('type');
        $table->string('contactDetails');
        $table->integer('status')->unsigned();//status of issue
        $table->integer('source')->nullable()->unsigned();
        $table->string('comment')->nullable();
        $table->timestamps();

        $table->foreign('customer')->references('id')->on('customers');
        $table->foreign('status')->references('id')->on('statuses');
        $table->foreign('source')->references('id')->on('sources');
        */
        $id = DB::table('issues')->insertGetId(
            ['customer' => 3,
             'location' => '36.694926,22.308851',
             'garage' => 'Αρτέμιδος 18, Βούλα 166 73',
             'files' => '',
             'type' => 'Θόρυβος Μηχανής',
             'contactDetails' => '69188928498',
             'status' => 1,
             'source' => 1,
             'comment' => 'Ειναι σκοτάδι, θα ειμαι λίγο πιο πριν σε ενα περίπτερο',
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s')
            ]
        );

    	$response=array(
            "issue_id"=>$id
            );
       //return json_encode($response);
       return view('issue_status')->with('issueID', $id);

    }


    public function getIssueStatus($id){
        
        $issue  = new Issue;
        // $issue_results=$issue::find($id);
        $issue_results = DB::table('issues')
                                ->select('issues.status','statuses.label')
                                ->leftjoin('statuses', 'statuses.id', '=', 'issues.status')
                                ->where('issues.id',$id)
                                ->limit(1)
                                ->get();



        $ret_val=array(
            "id"=>$issue_results[0]->status,
            "label"=>$issue_results[0]->label
            );
        $json_ret_value=json_encode($ret_val);

       return $json_ret_value;
    }

	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function getIssue($id){
    	
        $issue  = new Issue;
        // $issue_results=$issue::find($id);
        $issue_results = DB::table('issues')
                                ->select('issues.*','statuses.label','vehicle_issues.vehicle','vehicles.vehiclePlate')
                                ->leftjoin('statuses', 'statuses.id', '=', 'issues.status')
                                ->leftjoin('vehicle_issues', 'vehicle_issues.issue', '=', 'issues.id')
                                ->leftjoin('vehicles', 'vehicle_issues.vehicle', '=', 'vehicles.id')
                                ->where('issues.id',$id)
                                ->limit(1)
                                ->get();
        $gps_results = DB::table('vehicle_gps')
                                ->select('vehicleLocation')
                                ->where('vehicle',$issue_results[0]->vehicle)
                                ->orderBy('id', 'desc')->first();

        $ret_val=array(
            "data"=>$issue_results[0]->status,
            "label"=>$issue_results[0]->label
            );
        $issue_results[0]->vehicleLocation=$gps_results->vehicleLocation;
        $ret_val=$issue_results[0];
        $json_ret_value=json_encode($ret_val);

       return $json_ret_value;
    }



}