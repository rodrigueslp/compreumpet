<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PetRaca extends Model {
    
    protected $table = 'pet_raca';
    protected $fillable = ['nome', 'pet_tipo_id'];
    
    public function pet_tipo() {
        return $this->belongsTo('App\PetTipo');
    }
    
    public function pet() {
        return $this->hasMany('App\Pet');
    }
    
}