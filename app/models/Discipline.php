<?php
class Discipline extends Eloquent {
public function character() {
        
        return $this->hasMany('Character');
    }
}