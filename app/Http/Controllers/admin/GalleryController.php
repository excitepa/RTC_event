<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\GalleryImage;
use Cloudinary\Cloudinary;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class GalleryController extends Controller
{
    //
        public function index()
    {
        $galleries = Gallery::orderBy('created_at', 'DESC')->get();
        // dd($projects);
        return view('admin.gallery.index', compact('galleries'));
    }

    public function create(Request $request)
    {
        if($request->isMethod('post'))
        {
            try
            {
                // dd($request);
                 $request->validate([
                    'name' => 'bail|required|string',
                    'event' => 'bail|integer|string',
                    'short_description' => 'bail|nullable',
                    'status' => 'nullable|integer',
                    'is_featured' => 'nullable|integer',
                    'thumb_image' => 'bail|nullable',
                    'images'   => 'nullable|array',
                    'images.*' => 'image|mimes:jpg,jpeg,png,gif|max:2048', 
                ]);
                // dd($request);

                $slug = Str::slug($request->name);

                $checkgallery = Gallery::where('slug', $slug)->first();
                if($checkgallery)
                {
                    return redirect()->back()->with('danger', 'Sorry! you have already added a gallery with this name.')->withInput();
                }

                if ($request->is_featured) {
                    $featuredGalleryCount = Gallery::where('is_featured', 1)->count();
                    if ($featuredGalleryCount >= 1) {
                        return redirect()->back()->with('danger', 'Sorry! Only 1 gallery can be featured at a time.');
                    }
                }

                if($request->hasFile('thumb_image'))
                {
                    $cloudinary = app(Cloudinary::class);

                    $uploadedFileUrl = $cloudinary->uploadApi()->upload(
                        $request->file('thumb_image')->getRealPath(),
                        ['folder' => 'galleries']
                    )['secure_url'];
                }else{
                    $uploadedFileUrl = null;
                }

                $gallery = Gallery::create([
                    'name' => $request->name,
                    'slug' => $slug,
                    'event_id' => $request->event,
                    'short_description' => $request->short_description,
                    'status' => $request->status ?? 0,
                    'is_featured' => $request->is_featured ?? 0,
                    'thumb_image' => $uploadedFileUrl,
                ]);

                if (is_array($request->images)) {
                    foreach ($request->file('images') as $image) {
                        if ($image->isValid()) {
                            $cloudinary = app(Cloudinary::class);

                            $upload = $cloudinary->uploadApi()->upload(
                                $image->getRealPath(),
                                ['folder' => 'galleries']
                            );
                            // ['secure_url'];
                            GalleryImage::create([
                                'gallery_id' => $gallery->id,
                                'image' => $upload['secure_url'],
                                'public_id'  => $upload['public_id'],
                            ]);
                        }
                    }
                }

                return redirect()->back()->with('success', 'Gallery created successfully');

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
                $events = Event::get();
                return view('admin.gallery.create', compact('events'));
            } catch(\Exception $e)
            {
                return redirect()->back()->with('danger', $e->getMessage());
            }
        }
    }

    public function edit(Request $request, $gallery_id)
    {
        if($request->isMethod('patch'))
        {
            try
            {
                // dd($request);
                 $request->validate([
                    'name' => 'bail|required|string',
                    'event' => 'bail|integer|string',
                    'short_description' => 'bail|nullable',
                    'status' => 'nullable|integer',
                    'is_featured' => 'nullable|integer',
                    'thumb_image' => 'bail|nullable',
                    'images'   => 'nullable|array',
                    'images.*' => 'image|mimes:jpg,jpeg,png,gif|max:2048', 
                ]);

                $slug = Str::slug($request->name);

                $checkgallery = Gallery::where('slug', $slug)->where('id', '!=', $gallery_id)->first();
                if($checkgallery)
                {
                    return redirect()->back()->with('danger', 'Sorry! A gallery alredy exists with this name.')->withInput();
                }

                if ($request->is_featured) {
                    $featuredGalleryCount = Gallery::where('is_featured', 1)->count();
                    if ($featuredGalleryCount >= 1) {
                        return redirect()->back()->with('danger', 'Sorry! Only 1 gallery can be featured at a time.');
                    }
                }

                $gallery = Gallery::find($gallery_id);

                if($request->hasFile('thumb_image'))
                {
                    $cloudinary = app(Cloudinary::class);

                    $uploadedFileUrl = $cloudinary->uploadApi()->upload(
                        $request->file('thumb_image')->getRealPath(),
                        ['folder' => 'galleries']
                    )['secure_url'];
                }else{
                    $uploadedFileUrl = $gallery->thumb_image;
                }

                $gallery->update([
                    'name' => $request->name,
                    'slug' => $slug,
                    'event_id' => $request->event,
                    'short_description' => $request->short_description,
                    'status' => $request->status ?? 0,
                    'is_featured' => $request->is_featured ?? 0,
                    'thumb_image' => $uploadedFileUrl,
                ]);  

                if ($request->hasFile('images')) {
                    $currentImageCount = GalleryImage::where('gallery_id', $gallery_id)->count();
                    $newImages = $request->file('images');
                    $totalImagesCount = $currentImageCount + count($newImages);
    
                    if ($totalImagesCount > 30) {
                        return redirect()->back()->with('danger', 'You can only upload up to 30 images for a project.')->withInput();
                    }

                    foreach ($newImages as $image) {
                        if ($image->isValid()) {
                            $cloudinary = app(Cloudinary::class);

                            $bannerImageUrl = $cloudinary->uploadApi()->upload(
                                $image->getRealPath(),
                                ['folder' => 'galleries']
                            )['secure_url'];
                            GalleryImage::create([
                                'galery_id' => $gallery->id,
                                'image' => $bannerImageUrl,
                            ]);
                        }
                    }
                }

                return redirect()->back()->with('success', 'Gallery updated successfully');

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
                // dd($project_data);
                $events = Event::get();
                $gallery = Gallery::find($gallery_id);
                return view('admin.gallery.edit', compact('events', 'gallery'));
            } catch(\Exception $e)
            {
                return redirect()->back()->with('danger', $e->getMessage());
            }
        }
    }

    public function removeImage($gallery_id, $image_id)
    {
        // dd($project_id);
        // dd($image_id);
        $image = GalleryImage::where('gallery_id', $gallery_id)->where('id', $image_id)->first();
        
        if ($image->public_id) {
            $cloudinary = app(Cloudinary::class);
            $cloudinary->uploadApi()->destroy($image->public_id);
        }
         
        $image->delete();
        return redirect()->back()->with('success', 'Gallery image deleted successfully');
    }
}
