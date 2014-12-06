<?php 
class Region extends Eloquent {
	public function character() {
        
        return $this->hasMany('Character');
    }
}