@extends('backend.layouts.master')

@section('content')


<main class="zentic-content">

    <div class="page-header">
        <div>
            <h1 class="page-title pb-2">Edit About Page</h1>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}"><i class="icon-house"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Static Pages</a></li>
                    <li class="breadcrumb-item active">About Us Edit</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row g-4">

        <form action="{{ route('backend.about.update') }}" method="POST" enctype="multipart/form-data">

            @csrf
            @method('PUT')

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

            <!-- Banner Section -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="zentic-card mb-4">
                        <div class="zentic-card-header">
                            <h2 class="card-title mb-0">
                                <i class="icon-circle-user"></i>
                                About Banner Section Details
                            </h2>
                        </div>
                        <div class="zentic-card-body">
                            <div class="form-group">
                                <label class="form-label"> Banner Section Title <span class="required">*</span> </label>
                                <input type="text" name="banner_title" class="form-control-zentic" placeholder="Banner Title" value="{{ old('banner_title', $about->banner_title) }}" required>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-8">
                                        <label class="form-label"> Banner Section Heading <span class="required">*</span> </label>
                                        <input type="text" name="banner_heading" class="form-control-zentic" placeholder="Banner Section Heading" value="{{ old('banner_heading', $about->banner_heading) }}" required>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label"> Banner Images Alt Text <span class="required">*</span> </label>
                                        <input type="text" name="banner_alt_text" class="form-control-zentic" placeholder="Banner Images Alt Text" value="{{ old('banner_alt_text', $about->banner_alt_text) }}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label"> Banner Section Sub-heading <span class="required">*</span> </label>
                                <textarea name="banner_subheading" class="form-control-zentic" rows="5" placeholder="Banner Sub-heading" required>{{ old('banner_subheading', $about->banner_subheading) }}</textarea>
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
                                <img id="bannerImagePreview" src="{{ $about->banner_image ? asset($about->banner_image) : asset('back-end/images/LaceHarbor.png') }}" alt="{{ $about->banner_alt_text }}" class="rounded-3 border zc-add-image" style="max-width:100%;">
                            </div>
                            <div class="file-upload-zone mb-3">
                                <input type="file" name="banner_image" accept="image/jpeg,image/png,image/webp" id="bannerImageUpload" class="gallery-upload-input"  data-preview="bannerImagePreview">
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

            <!-- About Section -->
            <div class="row mt-2">

                <div class="col-lg-8">
                    <div class="zentic-card mb-4">

                        <div class="zentic-card-header">
                            <h2 class="card-title mb-0">
                                <i class="icon-circle-user"></i>
                                About Us Section Details
                            </h2>
                        </div>

                        <div class="zentic-card-body">

                            <div class="form-group">
                                <label class="form-label">
                                    About Us Section Title <span class="required">*</span>
                                </label>

                                <input type="text"
                                    name="about_title"
                                    class="form-control-zentic"
                                    placeholder="About Us Title"
                                    value="{{ old('about_title', $about->about_title) }}"
                                    required>
                            </div>

                            <div class="form-group">
                                <div class="row">

                                    <div class="col-8">
                                        <label class="form-label">
                                            About Us Section Heading <span class="required">*</span>
                                        </label>

                                        <input type="text"
                                            name="about_heading"
                                            class="form-control-zentic"
                                            placeholder="About Us Section Heading"
                                            value="{{ old('about_heading', $about->about_heading) }}"
                                            required>
                                    </div>

                                    <div class="col-4">
                                        <label class="form-label">
                                            About Us Images Alt Text <span class="required">*</span>
                                        </label>

                                        <input type="text"
                                            name="about_alt_text"
                                            class="form-control-zentic"
                                            placeholder="About Us Images Alt Text"
                                            value="{{ old('about_alt_text', $about->about_alt_text) }}"
                                            required>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">
                                    About Us Section Sub-heading <span class="required">*</span>
                                </label>

                                <input type="text"
                                    name="about_subheading"
                                    class="form-control-zentic"
                                    placeholder="About Us Section Sub-heading"
                                    value="{{ old('about_subheading', $about->about_subheading) }}"
                                    required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">
                                    About Us Section Title 2 <span class="required">*</span>
                                </label>

                                <input type="text"
                                    name="about_title_2"
                                    class="form-control-zentic"
                                    placeholder="About Us Title 2"
                                    value="{{ old('about_title_2', $about->about_title_2) }}"
                                    required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">
                                    About Us Section Heading 2 <span class="required">*</span>
                                </label>

                                <input type="text"
                                    name="about_heading_2"
                                    class="form-control-zentic"
                                    placeholder="About Us Section Heading 2"
                                    value="{{ old('about_heading_2', $about->about_heading_2) }}"
                                    required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">
                                    About Us Section Description <span class="required">*</span>
                                </label>

                                <textarea name="about_description"
                                    class="form-control-zentic"
                                    rows="5"
                                    placeholder="About Us Section Description"
                                    required>{{ old('about_description', $about->about_description) }}</textarea>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="zentic-card">

                        <div class="zentic-card-header">
                            <h2 class="card-title mb-0">
                                <i class="icon-image"></i> About Us Image
                            </h2>
                        </div>

                        <div class="zentic-card-body">

                            <div class="text-center mb-3">
                                <img id="aboutImagePreview"
                                    src="{{ $about->about_image ? asset($about->about_image) : asset('back-end/images/LaceHarbor.png') }}"
                                    alt="{{ $about->about_alt_text }}"
                                    class="rounded-3 border zc-add-image"
                                    style="max-width:100%;">
                            </div>

                            <div class="file-upload-zone mb-3">

                                <input type="file"
                                    name="about_image"
                                    accept="image/jpeg,image/png,image/webp"
                                    id="aboutImageUpload"
                                    class="gallery-upload-input"
                                    data-preview="aboutImagePreview">

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

            <!-- Our Mission Section -->
            <div class="row mt-2">
                <div class="col-lg-6">
                    <div class="zentic-card mb-4">
                        <div class="zentic-card-header">
                            <h2 class="card-title mb-0"><i class="icon-circle-user"></i>  Our Mission Section Details</h2>
                        </div>
                        <div class="zentic-card-body">
                            <div class="form-group">
                                <label class="form-label"> Our Mission Section Heading <span class="required">*</span> </label>
                                <input type="text" name="our_mission_title" class="form-control-zentic" placeholder="Our Mission Section Heading" value="{{ old('our_mission_title', $about->our_mission_title) }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label"> About Us Section Description <span class="required">*</span></label>
                                <textarea name="our_description" class="form-control-zentic" rows="5" placeholder="About Us Section Description" required>{{ old('our_description', $about->our_description) }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="zentic-card mb-4">
                        <div class="zentic-card-header">
                            <h2 class="card-title mb-0"> <i class="icon-circle-user"></i> What We Do Section Details</h2>
                        </div>
                        <div class="zentic-card-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label class="form-label"> What We Do Section Title <span class="required">*</span></label>
                                        <input type="text" name="what_we_do_title" class="form-control-zentic" placeholder="What We Do Section Title" value="{{ old('what_we_do_title', $about->what_we_do_title) }}" required>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label"> What We Do Heading <span class="required">*</span> </label>
                                        <input type="text" name="what_we_do_heading" class="form-control-zentic"  placeholder="What We Do Heading" value="{{ old('what_we_do_heading', $about->what_we_do_heading) }}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label"> What We Do Section Description <span class="required">*</span> </label>
                                <textarea name="what_we_do_description" class="form-control-zentic" rows="5" placeholder="What We Do Section Description" required>{{ old('what_we_do_description', $about->what_we_do_description) }}</textarea>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Our Promise Section -->
            <div class="row mt-2">
                <div class="col-lg-6">
                    <div class="zentic-card mb-4">
                        <div class="zentic-card-header">
                            <h2 class="card-title mb-0"><i class="icon-circle-user"></i> Our Promise Section Details</h2>
                        </div>

                        <div class="zentic-card-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label class="form-label"> Our Promise Section Title <span class="required">*</span> </label>
                                        <input type="text" name="our_pro_title" class="form-control-zentic" placeholder="Our Promise Section Title" value="{{ old('our_pro_title', $about->our_pro_title) }}" required>
                                    </div>

                                    <div class="col-6">
                                        <label class="form-label"> Our Promise Section Heading <span class="required">*</span> </label>
                                        <input type="text" name="our_pro_heading" class="form-control-zentic" placeholder="Our Promise Section Heading" value="{{ old('our_pro_heading', $about->our_pro_heading) }}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label"> Our Promise Section Sub Description <span class="required">*</span> </label>
                                <textarea name="our_pro_description" class="form-control-zentic" rows="5" placeholder="Our Promise Section Sub Description" required>{{ old('our_pro_description', $about->our_pro_description) }}</textarea>
                            </div>

                            <div class="form-group">
                                <label class="form-label"> Our Mission Section Tag Line <span class="required">*</span> </label>
                                <input type="text"  name="our_pro_tagline" class="form-control-zentic"  placeholder="Our Mission Section Tag Line" value="{{ old('our_pro_tagline', $about->our_pro_tagline) }}" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="zentic-card mb-4">
                        <div class="zentic-card-header">
                            <h2 class="card-title mb-0"> <i class="icon-search"></i> SEO Section Details </h2>
                        </div>

                        <div class="zentic-card-body">
                            <div class="form-group">
                                <label class="form-label"> Meta Title <span class="required">*</span> </label>
                                <input type="text" name="meta_title" class="form-control-zentic" placeholder="Meta Title" value="{{ old('meta_title', $about->meta_title) }}" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label"> Meta Keywords <span class="required">*</span> </label>
                                <input type="text" name="meta_keywords" class="form-control-zentic" placeholder="Meta Keywords" value="{{ old('meta_keywords', $about->meta_keywords) }}" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label"> Meta Description <span class="required">*</span> </label>
                                <textarea name="meta_description" class="form-control-zentic" rows="5" placeholder="Meta Description" required>{{ old('meta_description', $about->meta_description) }}</textarea>
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
                    <a href="{{ route('backend.dashboard') }}" class="btn-zentic btn-outline"> Cancel </a>
                </div>
            </div>

        </form>

    </div>
</main>


@endsection