<?php
class Character extends Eloquent {
    public function race() {
        
    return $this->belongsTo('Race');
    }
    public function region() {
        
    return $this->belongsTo('Region');
    }
    public function discipline() {
        
    return $this->belongsTo('Discipline');
    }
    public function title() {
        
    return $this->belongsTo('Title');
    }
    public function user() {
        
    return $this->belongsTo('User');
    }
    public function scopeOwned($query) {
        return $query->where('creator_id', '=', Auth::id());
    }
}