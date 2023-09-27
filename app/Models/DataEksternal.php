<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataEksternal extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama', 'data', 'lokasi', 'tanggal'
    ]; 
    
    public function DataShelter()
    {
        return $this->belongsTo(DataShelter::class, 'data_id', 'id');
    }
}
