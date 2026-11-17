@extends('backend.layouts.master')


@section('content')

<main class="zentic-content">

    <div class="page-header">
        <div>
            <h1 class="page-title pb-2">Add Banner</h1>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}"><i class="icon-house"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('backend.manage-banner') }}">Manage Banners</a></li>
                    <li class="breadcrumb-item active">Add Banner</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row g-4">

        <form action="{{ route('backend.store-banner') }}" method="POST" enctype="multipart/form-data">

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

            <!-- Banner Content Section -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="zentic-card mb-4">
                        <div class="zentic-card-header">
                            <h2 class="card-title mb-0">
                                <i class="icon-circle-user"></i>
                                Banner Section Details
                            </h2>
                        </div>
                        <div class="zentic-card-body">
                            <div class="form-group">
                                <label class="form-label"> Banner Title <span class="required">*</span> </label>
                                <input type="text" name="banner_title" class="form-control-zentic" placeholder="Banner Title" value="{{ old('banner_title') }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label"> Banner Link <span class="required">*</span> </label>
                                <input type="text" name="banner_link" class="form-control-zentic" placeholder="Banner Link" value="{{ old('banner_link') }}" required>
                                <span class="pt-2" style="color:grey;font-size:14px;">Enter the URL where you want users to be redirected. </span>
                            </div>
                            <div class="form-group">
                                <label class="form-label"> Banner Images Alt Text <span class="required">*</span> </label>
                                <input type="text" name="banner_alt_text" class="form-control-zentic" placeholder="Banner Images Alt Text" value="{{ old('banner_alt_text') }}" required>
                            </div>

                            <div class="form-group">
                                <span class="flex-fill" style="padding-right: 15px; color: var(--zc-text-secondary); font-weight: 600;">
                                    Status <span class="required" style="color: red;">*</span>
                                </span>

                                <label class="toggle-switch flex-shrink-0">
                                    <input type="checkbox" name="status" value="1" checked>
                                    <span class="toggle-slider"></span>
                                </label>

                                <span style="font-size: 14px; padding-left: 10px;">Enable this option if you want this Banner to be visible on the website. Otherwise, leave it unchecked.</span>
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

            <!-- Buttons -->
            <div class="row">
                <div class="col-2">
                    <button type="submit" class="btn-zentic btn-primary"> Save Changes </button>
                </div>

                <div class="col-2">
                    <a href="{{ route('backend.manage-banner') }}" class="btn-zentic btn-outline"> Cancel </a>
                </div>
            </div>

        </form>

    </div>
</main>


@endsection