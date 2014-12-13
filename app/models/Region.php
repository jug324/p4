<?php 
class Region extends Eloquent {
protected $fillable = array('name', 'description', 'flag');
	
	public function character() {
        
        return $this->hasMany('Character');
    }
}