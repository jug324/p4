<?php
class Discipline extends Eloquent {
	protected $fillable = array('name', 'description');
public function character() {
        
        return $this->hasMany('Character');
    }
}