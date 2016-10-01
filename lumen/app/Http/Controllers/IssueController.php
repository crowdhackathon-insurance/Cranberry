<?php
 
namespace App\Http\Controllers;
 
use App\Issue;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
 
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
    	$response='hello world '.$id;
       return $response;
    }



}