<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scratch_card extends Model
{
    //
    protected $table = "scratch_card";
    protected $fillable = [
							'scratch_id', 'title', 'description', 'prize','thumbnail_img','background_img','scratch_icon_img1','scratch_icon_img2','scratch_icon_img3','winning_img','type','status','created_at'
							];
}
