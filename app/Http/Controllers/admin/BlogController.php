<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Event;
use App\Models\Tag;
use Cloudinary\Cloudinary;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class BlogController extends Controller
{
    //
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'DESC')->get();
        foreach($blogs as $blog)
        {
            $category_id = $blog->category_id;
            $category = Category::find($category_id);
            $blog["category_name"] = $category->name;
        }
        $categories = Category::where('type', 'blog')->get();
        // dd($blogs);
        return view('admin.blog.index', compact('blogs', 'categories'));
    }   

    public function create(Request $request)
    {
        if($request->isMethod('post'))
        {
            // dd($request);
                $request->validate([
                'title' => 'bail|required|string',
                'sub_title' => 'bail|string',
                'event' => 'bail|integer|string',
                'category' => 'bail|integer|string',
                'short_description' => 'bail|required|string',
                'content' => 'bail|required|string',
                'author' => 'bail|required|string',
                'publication_date' => 'bail|required|date',
                'featured_image' => 'bail|nullable|image',
                'status' => 'nullable|integer',
                'is_featured' => 'nullable|integer',
                'tags' => 'nullable|string' // validate tags as a string
            ]);

            $slug = Str::slug($request->title);
            $checkblog = Blog::where('slug', $slug)->first();
            if($checkblog)
            {
                return redirect()->back()->with('danger', 'Sorry! You have already created this Blog.');
            }

            if ($request->is_featured) {
                $featuredBlogsCount = Blog::where('is_featured', 1)->count();
                if ($featuredBlogsCount >= 1) {
                    return redirect()->back()->with('danger', 'Sorry! Only 1 blogs can be featured at a time.');
                }
            }

            if($request->hasFile('featured_image'))
            {
                $cloudinary = app(Cloudinary::class);

                $featuredImageUrl = $cloudinary->uploadApi()->upload(
                    $request->file('featured_image')->getRealPath(),
                    ['folder' => 'blogs']
                )['secure_url'];
            }else{
                $featuredImageUrl = null;
            }

            if($request->hasFile('banner_image'))
            {
                $cloudinary = app(Cloudinary::class);

                $bannerImageUrl = $cloudinary->uploadApi()->upload(
                    $request->file('banner_image')->getRealPath(),
                    ['folder' => 'blogs']
                )['secure_url'];
            }else{
                $bannerImageUrl = null;
            }

            if($request->hasFile('thumb_image'))
            {
                $cloudinary = app(Cloudinary::class);

                $thumbImageUrl = $cloudinary->uploadApi()->upload(
                    $request->file('thumb_image')->getRealPath(),
                    ['folder' => 'blogs']
                )['secure_url'];
            }else{
                $thumbImageUrl = null;
            }

            $blog = Blog::create([
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'category_id' => $request->category,
                'event_id' => $request->event,
                'slug' => $slug,
                'short_description' => $request->short_description,
                'content' => $request->content,
                'author' => $request->author,
                'publication_date' => $request->publication_date,
                'featured_image' => $featuredImageUrl,
                'banner_image' => $bannerImageUrl,
                'thumb_image' => $thumbImageUrl,
                'status' => $request->status ?? 0,
                'is_featured' => $request->is_featured ?? 0,
            ]);

            if ($request->tags) {
                $tagNames = explode(',', $request->tags);
                $tagIds = [];
                foreach ($tagNames as $tagName) {
                    $tagName = trim($tagName);
                    if (!empty($tagName)) {
                        $tag = Tag::firstOrCreate(['name' => $tagName]);
                        $tagIds[] = $tag->id;
                    }
                }
                $blog->tags()->sync($tagIds);
            }

            return redirect()->back()->with('success', 'Blog created successfully');
        }else{
            try
            {
                $categories = Category::where('type', 'blog')->get();
                $events = Event::get();
                return view('admin.blog.create', compact('categories', 'events'));
            } catch(\Exception $e)
            {
                return redirect()->back()->with('danger', $e->getMessage());
            }
        }
    }

    public function edit(Request $request, $blog_id)
    {
        if($request->isMethod('patch'))
        {
            try
            {
                // dd($request);
                $request->validate([
                    'title' => 'bail|required|string',
                    'sub_title' => 'bail|string',
                    'category' => 'bail|integer|string',
                    'short_description' => 'bail|string',
                    'content' => 'bail|required|string',
                    'author' => 'bail|required|string',
                    'publication_date' => 'bail|required|date',
                    'featured_image' => 'bail|nullable|image',
                    'status' => 'nullable|integer',
                    'is_featured' => 'nullable|integer',
                ]);

                $slug = Str::slug($request->title);

                $blog = Blog::find($blog_id);


                $checkblog = Blog::where('slug', $slug)->where('id', '!=', $blog_id)->first();
                if($checkblog)
                {
                    return redirect()->back()->with('danger', 'Sorry! A blog already exists with this title.');
                }

                $featuredBlogsCount = Blog::where('is_featured', 1)
                    ->where('id', '!=', $blog->id) // exclude the one being updated
                    ->count();

                if ($featuredBlogsCount >= 1) {
                    return redirect()->back()->with('danger', 'Sorry! Only 1 blog can be featured at a time.');
                }


            if($request->hasFile('featured_image'))
            {
                $cloudinary = app(Cloudinary::class);

                $featuredImageUrl = $cloudinary->uploadApi()->upload(
                    $request->file('featured_image')->getRealPath(),
                    ['folder' => 'blogs']
                )['secure_url'];
            }else{
                $featuredImageUrl = $blog->featured_image;
            }

            if($request->hasFile('banner_image'))
            {
                $cloudinary = app(Cloudinary::class);

                $bannerImageUrl = $cloudinary->uploadApi()->upload(
                    $request->file('banner_image')->getRealPath(),
                    ['folder' => 'blogs']
                )['secure_url'];
            }else{
                $bannerImageUrl = $blog->banner_image;
            }

            if($request->hasFile('thumb_image'))
            {
                $cloudinary = app(Cloudinary::class);

                $thumbImageUrl = $cloudinary->uploadApi()->upload(
                    $request->file('thumb_image')->getRealPath(),
                    ['folder' => 'blogs']
                )['secure_url'];
            }else{
                $thumbImageUrl = $blog->thumb_image;
            }

                $blog->update([
                    'title' => $request->title,
                    'sub_title' => $request->sub_title,
                    'slug' => $slug,
                    'category_id' => $request->category,
                    'short_description' => $request->short_description,
                    'content' => $request->content,
                    'author' => $request->author,
                    'publication_date' => $request->publication_date,
                    'featured_image' => $featuredImageUrl,
                    'banner_image' => $bannerImageUrl,
                    'thumb_image' => $thumbImageUrl,
                    'status' => $request->status ?? 0,
                    'is_featured' => $request->is_featured ?? 0,
                ]);

                if ($request->tags) {
                    $tagNames = explode(',', $request->tags);
                    $tagIds = [];
                    foreach ($tagNames as $tagName) {
                        $tagName = trim($tagName);
                        if (!empty($tagName)) {
                            $tag = Tag::firstOrCreate(['name' => $tagName]);
                            $tagIds[] = $tag->id;
                        }
                    }
                    $blog->tags()->sync($tagIds);
                }

                return redirect()->back()->with('success', 'Blog updated successfully');

            } catch (ValidationException $e)
            {
                return redirect()->back()->with('danger', $e->validator->errors()->first())->withInput();
            } catch (\Exception $e)
            {
                return redirect()->back()->with('danger', $e->getMessage())->withInput();
            }
        }else{
            try
            {
                // $categories = Category::all();
                $categories = Category::where('type', 'blog')->get();
                $blog = Blog::find($blog_id);
                // dd($blog);
                return view('admin.blog.edit', compact('categories', 'blog'));
            } catch(\Exception $e)
            {
                return redirect()->back()->with('danger', $e->getMessage());
            }
        }
    
    }
}
