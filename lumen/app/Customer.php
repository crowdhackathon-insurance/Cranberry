<?php 

namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Customer extends Model{
    
public function issues()
{
  return $this->hasMany('App\Issue','id');
}

}