<?php
class Race extends Eloquent {
	protected $fillable = array('name', 'description', 'traits');
public function character() {
        
        return $this->hasMany('Character');
    }
}