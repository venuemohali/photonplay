<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Page extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function specs(){
        return $this->hasMany(PageSpec::class);
    }

    public function images(){
        return $this->hasMany(PageImage::class);
    }

    public function features(){
        return $this->hasMany(PageFeature::class);
    }

    public function pageType(){
        return $this->belongsTo(PageType::class);
    }

}
