@extends('backend.layouts.master')


@section('content')

<main class="zentic-content">

    <div class="page-header">
        <div>
            <h1 class="page-title pb-2">Add Size Guide</h1>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}"><i class="icon-house"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('backend.manage-size-guide') }}">Manage Size Guide</a></li>
                    <li class="breadcrumb-item active">Add Size Guide</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row g-4">

        <form action="{{ route('backend.store-sizeguide') }}" method="POST" enctype="multipart/form-data">

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
                                Size Guide Section Details
                            </h2>
                        </div>
                        <div class="zentic-card-body">
                            <div class="form-group">
                                <label class="form-label"> Size Guide Title <span class="required">*</span> </label>
                                <input type="text" name="name" class="form-control-zentic" placeholder="Size Guide Title" value="{{ old('name') }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Images Alt Text <span class="required">*</span> </label>
                                <input type="text" name="images_alt_tag" class="form-control-zentic" placeholder="Images Alt Text" value="{{ old('images_alt_tag') }}" required>
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
                                <i class="icon-image"></i> Size Guide Image
                            </h2>
                        </div>
                        <div class="zentic-card-body">
                            <div class="text-center mb-3">
                                <img id="bannerImagePreview" src="{{ asset('back-end/images/no_images.svg') }}" alt="Size Guide Image" class="rounded-3 border zc-add-image" style="max-width:100%;">
                            </div>
                            <div class="file-upload-zone mb-3">
                                <input type="file" name="images" accept="image/jpeg,image/png,image/webp" id="bannerImageUpload" class="gallery-upload-input" data-preview="bannerImagePreview">
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
                    <a href="{{ route('backend.manage-size-guide') }}" class="btn-zentic btn-outline"> Cancel </a>
                </div>
            </div>

        </form>

    </div>
</main>


@endsection