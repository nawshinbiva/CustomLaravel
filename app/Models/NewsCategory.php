<?php

namespace App\Models;


use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    protected $table='news_categories';
    protected $appends=['short_name'];

    public static function boot()
    {
        parent::boot();

        self::creating(function ($m) {
            $m->name = strtoupper($m->name);
            $old = NewsCategory::where('name', $m->name)->first();
            if ($old != null) {
                
                throw new Exception("News category with $m->name already exist.", 1);
            }
            
        });

        self::updating(function ($m) {
            $m->name = strtoupper($m->name);
            $old = NewsCategory::where('name', $m->name)
                ->where('id', '<>', $m->id) // Ensure it's not the same record
                ->first();
            if ($old != null) {
                throw new Exception("News category with name {$m->name} already exists.");
            }
        });

        self::created(function ($m) {
            //
            return $m;
        });

        self::updated(function ($m) {
            return $m;
        });
    }

    public function getNameAttribute($name)
    {
        //return $name;
        return strtolower($name).".";
    }
    public function getShortNameAttribute()
    {
        return substr($this->name,0,3);
    }

    
   
    use HasFactory;
}
