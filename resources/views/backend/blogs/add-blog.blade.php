@extends('backend.layouts.master')


@section('content')

<main class="zentic-content">

    <div class="page-header">
        <div>
            <h1 class="page-title pb-2">Add Blog</h1>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}"><i class="icon-house"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('backend.manage-blogs') }}">Manage Blogs</a></li>
                    <li class="breadcrumb-item active">Add Blogs</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row g-4">

        <form action="{{ route('backend.store-blog') }}" method="POST" enctype="multipart/form-data">

            @csrf

            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif

            @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <!-- Blog Content Section -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="zentic-card mb-4">
                        <div class="zentic-card-header">
                            <h2 class="card-title mb-0">
                                <i class="icon-circle-user"></i>
                                Blog Section Details
                            </h2>
                        </div>
                        <div class="zentic-card-body">
                            <div class="form-group">
                                <label class="form-label"> Blog Title <span class="required">*</span> </label>
                                <input type="text" name="blog_title" class="form-control-zentic" placeholder="Blog Title" value="{{ old('blog_title') }}" required>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label class="form-label"> Blog URl's <span class="required">*</span> </label>
                                        <input type="text" name="blog_url" id="blog_url" class="form-control-zentic" placeholder="Blog URL" value="{{ old('blog_url') }}" required>
                                        <span class="pt-2" style="color:grey;font-size:14px;"> Example: /blog/my-blog-post</span>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label"> Blog URL's Preview </label>
                                        <input type="text" name="blog_url_preview" id="blog_url_preview" class="form-control-zentic" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label class="form-label"> Blog Date <span class="required">*</span> </label>
                                        <input type="text" name="blog_date" class="form-control-zentic" placeholder="Blog Date" value="{{ old('blog_date') }}" required>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label"> Blog Images Alt Text <span class="required">*</span> </label>
                                        <input type="text" name="blog_alt_text" class="form-control-zentic" placeholder="Blog Images Alt Text" value="{{ old('blog_alt_text') }}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label"> Blog Description <span class="required">*</span> </label>
                                <textarea name="blog_description" class="form-control-zentic" rows="5" placeholder="Blog Description" required>{{ old('blog_description') }}</textarea>
                            </div>

                            <div class="form-group">
                                <span class="flex-fill" style="padding-right: 15px; color: var(--zc-text-secondary); font-weight: 600;">
                                    Status <span class="required" style="color: red;">*</span>
                                </span>

                                <label class="toggle-switch flex-shrink-0">
                                    <input type="checkbox" name="blog_status" value="1" checked>
                                    <span class="toggle-slider"></span>
                                </label>

                                <span style="font-size: 14px; padding-left: 10px;">Enable this option if you want this blog to be visible on the website. Otherwise, leave it unchecked.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="zentic-card">
                        <div class="zentic-card-header">
                            <h2 class="card-title mb-0">
                                <i class="icon-image"></i> Banner Image
                            </h2>
                        </div>
                        <div class="zentic-card-body">
                            <div class="text-center mb-3">
                                <img id="bannerImagePreview" src="{{ asset('back-end/images/no_images.svg') }}" alt="Banner Image" class="rounded-3 border zc-add-image" style="max-width:100%;">
                            </div>
                            <div class="file-upload-zone mb-3">
                                <input type="file" name="banner_image" accept="image/jpeg,image/png,image/webp" id="bannerImageUpload" class="gallery-upload-input" data-preview="bannerImagePreview">
                                <div class="file-upload-icon">
                                    <i class="icon-image-up"></i>
                                </div>
                                <div class="file-upload-title">
                                    Upload your own image
                                </div>
                                <div class="file-upload-desc">
                                    PNG, WEBP, JPG or JPEG, up to 1MB
                                </div>
                            </div>
                            <p class="text-xs text-muted mb-2">
                                Choose a photo from your device
                            </p>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Meta SEO Section -->
            <div class="row mt-2">
                <div class="col-lg-12">
                    <div class="zentic-card mb-4">
                        <div class="zentic-card-header">
                            <h2 class="card-title mb-0"> <i class="icon-search"></i> SEO Section Details </h2>
                        </div>

                        <div class="zentic-card-body">
                            <div class="form-group">
                                <label class="form-label"> Meta Title <span class="required">*</span> </label>
                                <input type="text" name="meta_title" class="form-control-zentic" placeholder="Meta Title" value="{{ old('meta_title') }}" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label"> Meta Keywords <span class="required">*</span> </label>
                                <input type="text" name="meta_keywords" class="form-control-zentic" placeholder="Meta Keywords" value="{{ old('meta_keywords') }}" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label"> Meta Description <span class="required">*</span> </label>
                                <textarea name="meta_description" class="form-control-zentic" rows="5" placeholder="Meta Description" required>{{ old('meta_description') }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Buttons -->
            <div class="row">
                <div class="col-2">
                    <button type="submit" class="btn-zentic btn-primary"> Save Changes </button>
                </div>

                <div class="col-2">
                    <a href="{{ route('backend.manage-blogs') }}" class="btn-zentic btn-outline"> Cancel </a>
                </div>
            </div>

        </form>

    </div>
</main>


<!-- Url Preview Script -->
<script>
    document.getElementById('blog_url').addEventListener('input', function() {

        let blogUrl = this.value;

        // Convert to lowercase
        blogUrl = blogUrl.toLowerCase();

        // Replace spaces with hyphens
        blogUrl = blogUrl.replace(/\s+/g, '-');

        // Remove special characters except hyphens
        blogUrl = blogUrl.replace(/[^a-z0-9-]/g, '');

        // Replace multiple hyphens with single hyphen
        blogUrl = blogUrl.replace(/-+/g, '-');

        // Update input value
        this.value = blogUrl;

        // Generate preview URL
        document.getElementById('blog_url_preview').value =
            'https://laceharbor.com/blogs/' + blogUrl;

    });
</script>

@endsection