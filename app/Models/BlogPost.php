<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog\BlogPostCategory;

class BlogPost extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = "blog_posts";

    public function category(){
    	return $this->belongsTo(BlogPostCategory::class,'category_id','id');
    }



}
   