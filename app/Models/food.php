<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;

class food extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 'descriptions', 'ingredients', 'price', 'rate', 'types', 'picturePath'
    ];

    public function getCreatedAtAttribute($value)
    {
    
       return Carbon::parse($value)->tempstamp;
    }

     public function getUpdateAtAttribute($value)
    {
    
       return Carbon::parse($value)->tempstamp;
    }

    public function toArray() 
    {
        $toArray = parent::toArray();
        $toArray['picturePath'] = $this->picturePath;
        return $toArray;

    }

    public function getPicturePathAttribute() 
    {
        return url('') . Storage::url($this->attributes['picturePath']);
    }
}
