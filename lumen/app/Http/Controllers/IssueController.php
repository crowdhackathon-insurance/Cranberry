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
    public function setIssue(){
    	$response='hello world';
       return $response;
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



}