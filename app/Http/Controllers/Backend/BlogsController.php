<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blogs;
use Illuminate\Support\Str;

class BlogsController extends Controller
{
    // Manage Blog
    public function index()
    {
        $blogs = Blogs::orderBy('id', 'desc')->get();

        foreach ($blogs as $blog) {

            // Strip HTML tags
            $cleanContent = strip_tags($blog->blog_description, $blog->blog_title);

            // Decode HTML entities
            $cleanContent = html_entity_decode($cleanContent, ENT_QUOTES, 'UTF-8');

            // Remove extra spaces
            $cleanContent = trim(preg_replace('/\s+/', ' ', $cleanContent));

            // Limit description to 5 words
            $blog->blog_description = Str::words($cleanContent, 5, '...');

            // Limit blog title to 5 words
            $blog->blog_title = Str::words($blog->blog_title, 5, '...');
        }

        return view('backend.blogs.index', compact('blogs'));
    }


    // Add Blog Page
    public function addBlog()
    {
        return view('backend.blogs.add-blog');
    }


    // Store Blog
    public function storeBlog(Request $request)
    {
        // Validate form data
        $request->validate([
            'blog_title'        => 'required|string|',
            'blog_url'          => 'required|string|unique:blogs,blog_url',
            'blog_date'         => 'required|date',
            'blog_alt_text'     => 'required|string|',
            'blog_description'  => 'required|string',
            'banner_image'      => 'nullable|image|mimes:jpeg,jpg,png,webp|max:1024',
            'meta_title'        => 'required|string|',
            'meta_keywords'     => 'required|string',
            'meta_description'  => 'required|string',
        ]);

        // Upload Blog Image
        $imagePath = null;

        if ($request->hasFile('banner_image')) {

            $image = $request->file('banner_image');

            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

            $uploadPath = public_path('uploads/blogs');

            // Create folder if not exists
            if (!file_exists($uploadPath)) {
                mkdir($uploadPath, 0755, true);
            }

            // Move image to folder
            $image->move($uploadPath, $imageName);

            $imagePath = 'uploads/blogs/' . $imageName;
        }

        // Save Blog Data
        Blogs::create([

            'blog_title'        => $request->blog_title,
            'blog_url'          => $request->blog_url,
            'blog_date'         => $request->blog_date,
            'blog_alt_tag'      => $request->blog_alt_text,
            'blog_image'        => $imagePath,
            'blog_description'  => $request->blog_description,
            'blog_status'       => $request->has('blog_status') ? 1 : 0,

            'meta_title'        => $request->meta_title,
            'meta_keywords'     => $request->meta_keywords,
            'meta_description'  => $request->meta_description,

        ]);

        return redirect()->route('backend.manage-blogs')
            ->with('success', 'Blog added successfully!');
    }



    // View Blog
    public function viewBlog($id)
    {
        $blog = Blogs::findOrFail($id);

        return view('backend.blogs.view-blog', compact('blog'));
    }

    // Edit Blog
    public function editBlog($id)
    {
        $blog = Blogs::findOrFail($id);

        return view('backend.blogs.edit-blog', compact('blog'));
    }


    // Update Blog
    public function updateBlog(Request $request, $id)
    {
        $blog = Blogs::findOrFail($id);

        // Validate form data
        $request->validate([
            'blog_title'       => 'required|string',
            'blog_url'         => 'required|string',
            'blog_date'        => 'required|date',
            'blog_alt_text'    => 'required|string',
            'blog_description' => 'required|string',
            'banner_image'     => 'nullable|image|mimes:jpeg,jpg,png,webp|max:1024',
            'meta_title'       => 'required|string',
            'meta_keywords'    => 'required|string',
            'meta_description' => 'required|string',
        ]);

        // Existing image
        $imagePath = $blog->blog_image;

        // Upload new image if selected
        if ($request->hasFile('banner_image')) {

            $image = $request->file('banner_image');

            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

            $uploadPath = public_path('uploads/blogs');

            // Create folder if not exists
            if (!file_exists($uploadPath)) {
                mkdir($uploadPath, 0755, true);
            }

            // Upload image
            $image->move($uploadPath, $imageName);

            // Delete old image
            if ($blog->blog_image && file_exists(public_path($blog->blog_image))) {
                unlink(public_path($blog->blog_image));
            }

            $imagePath = 'uploads/blogs/' . $imageName;
        }

        // Update blog data
        $blog->update([
            'blog_title'       => $request->blog_title,
            'blog_url'         => $request->blog_url,
            'blog_date'        => $request->blog_date,
            'blog_alt_tag'     => $request->blog_alt_text,
            'blog_description' => $request->blog_description,
            'blog_image'       => $imagePath,
            'blog_status'      => $request->has('blog_status') ? 1 : 0,
            'meta_title'       => $request->meta_title,
            'meta_keywords'    => $request->meta_keywords,
            'meta_description' => $request->meta_description,
        ]);

        return redirect()->route('backend.manage-blogs')
            ->with('success', 'Blog updated successfully!');
    }



    // Delete Blog
    public function deleteBlog($id)
    {
        try {

            // Find Blog
            $blog = Blogs::findOrFail($id);

            // Delete Blog Image
            if (!empty($blog->blog_image)) {

                $imagePath = public_path($blog->blog_image);

                if (file_exists($imagePath) && is_file($imagePath)) {
                    unlink($imagePath);
                }
            }

            // Delete Blog Record
            $blog->delete();

            return redirect()->route('backend.manage-blogs')
                ->with('success', 'Blog deleted successfully!');
        } catch (\Exception $e) {

            return redirect()->route('backend.manage-blogs')
                ->with('error', 'Something went wrong! Blog could not be deleted.');
        }
    }
}
