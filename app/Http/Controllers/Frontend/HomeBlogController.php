<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog\BlogPostCategory;
use App\Models\BlogPost;
use Illuminate\Support\Facades\DB;

class HomeBlogController extends Controller
{
    public function AddBlogPost(){

    	$blogcategory = DB::table('blog_post_categories')->get();//BlogPostCategory::latest()->get();
    	$blogpost = DB::table('blog_posts')->get();//BlogPost::latest()->get();
    	return view('frontend.blog.blog_list',compact('blogpost','blogcategory'));

    } // end method 


    public function DetailsBlogPost($id){

        $blogcategory = BlogPostCategory::latest()->get();
    	$blogpost = BlogPost::findOrFail($id);
    	return view('frontend.blog.blog_details',compact('blogpost','blogcategory'));
    }



    public function HomeBlogCatPost($category_id){

    	$blogcategory = BlogPostCategory::latest()->get();
    	$blogpost = BlogPost::where('category_id',$category_id)->orderBy('id','DESC')->get();
    	return view('frontend.blog.blog_cat_list',compact('blogpost','blogcategory'));

    } // end mehtod 


}
 