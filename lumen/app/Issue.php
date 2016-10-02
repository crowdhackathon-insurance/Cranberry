<?php namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Issue extends Model{
    
protected $fillable = ['customer', 'location', 'garage', 'files', 'type', 'contactDetails', 'status','source','comment','created_at', 'updated_at'];

}