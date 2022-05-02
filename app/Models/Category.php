<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable =['name','image'];


    public function  getImagenAttribute()
    {
     if($this->image !=null )
     return   (file_exists('categories/' . $this->image ) ? $this->image : 'noimg.jpg');
     else
     return 'noimg.jpg';
    }
}
