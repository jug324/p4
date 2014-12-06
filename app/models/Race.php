<?php
class Race extends Eloquent {
public function character() {
        
        return $this->hasMany('Character');
    }
}