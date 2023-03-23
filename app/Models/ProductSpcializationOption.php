<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSpcializationOption extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function specialization_options(){
        return $this->belongsTo(SpecializationOption::class,'specialization_option_id');
    }

}
