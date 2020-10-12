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
        $paths = [];
        $images = json_decode($this->image);
        foreach($images as $image){
            $image = "public/images/" . $image;
            if ( $this->image != null) {
                $path = \Request::root() . Storage::disk('local')->url($image);
                array_push($paths, $path);
            } else {
                array_push($paths, "no image");
            }
        }
		return $paths;
	}
}
