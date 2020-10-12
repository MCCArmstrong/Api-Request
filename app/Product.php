<?php

namespace App;
use Storage;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'title',
        'product_code',
        'image',
        'description'
    ];

    protected $appends = [
        'image_path'
    ];


    public function getImagePathAttribute() {
        $images = json_decode($this->image);
        $image = "public/images/" . $this->image;
        if ( $this->image != null) {
            $path = \Request::root() . Storage::disk('local')->url($image);
            return $path;
        } 

		return '';
	}
}
