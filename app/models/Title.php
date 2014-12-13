<?php 
class Title extends Eloquent {
	protected $fillable = array('name', 'description', 'flag');
	public function character() {
        
        return $this->hasMany('Character');
    }
}