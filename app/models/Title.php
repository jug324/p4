<?php 
class Title extends Eloquent {
	public function character() {
        
        return $this->hasMany('Character');
    }
}