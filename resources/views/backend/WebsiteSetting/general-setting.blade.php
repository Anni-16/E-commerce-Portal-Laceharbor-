
@extends('backend.layouts.master')

@section('content')

<main class="zentic-content">

    <div class="page-header">
        <div>
            <h1 class="page-title pb-2">Edit General Setting</h1>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('backend.dashboard') }}">
                            <i class="icon-house"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Website Setting</a>
                    </li>
                    <li class="breadcrumb-item active">General Setting Edit</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row g-4">

        <form action="{{ route('backend.general-setting.update') }}" method="POST" enctype="multipart/form-data">

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

            <!-- General Website Details -->
            <div class="row">

                <div class="col-lg-8">

                    <div class="zentic-card mb-4">

                        <div class="zentic-card-header">
                            <h2 class="card-title mb-0">
                                <i class="icon-circle-user"></i>
                                General Website Details
                            </h2>
                        </div>

                        <div class="zentic-card-body">

                            <div class="form-group">
                                <label class="form-label">
                                    Brand Name <span class="required">*</span>
                                </label>

                                <input type="text"
                                    name="brand_name"
                                    class="form-control-zentic"
                                    placeholder="Brand Name"
                                    value="{{ old('brand_name', $generals->brand_name) }}"
                                    required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">
                                    Website URL <span class="required">*</span>
                                </label>

                                <input type="url"
                                    name="website_url"
                                    class="form-control-zentic"
                                    placeholder="https://example.com"
                                    value="{{ old('website_url', $generals->website_url) }}"
                                    required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">
                                    Website Currency <span class="required">*</span>
                                </label>

                                <input type="text"
                                    name="Website_currecry"
                                    class="form-control-zentic"
                                    placeholder="Website Currency"
                                    value="{{ old('Website_currecry', $generals->Website_currecry) }}"
                                    required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">
                                    Copyrights <span class="required">*</span>
                                </label>

                                <textarea name="copy_rights"
                                    class="form-control-zentic"
                                    rows="4"
                                    placeholder="Copyrights"
                                    required>{{ old('copy_rights', $generals->copy_rights) }}</textarea>
                            </div>

                        </div>

                    </div>

                </div>

                <!-- Website Logo -->
                <div class="col-lg-4">

                    <div class="zentic-card mb-4">

                        <div class="zentic-card-header">
                            <h2 class="card-title mb-0">
                                <i class="icon-image"></i>
                                Website Logo
                            </h2>
                        </div>

                        <div class="zentic-card-body">

                            <div class="text-center mb-3">
                                <img id="websiteLogoPreview"
                                    src="{{ $generals->website_logo ? asset($generals->website_logo) : asset('back-end/images/LaceHarbor.png') }}"
                                    alt="{{ $generals->logo_alt_tag }}"
                                    class="rounded-3 border zc-add-image"
                                    style="max-width:100%;">
                            </div>

                            <div class="form-group">
                                <label class="form-label">
                                    Logo Alt Text <span class="required">*</span>
                                </label>

                                <input type="text"
                                    name="logo_alt_tag"
                                    class="form-control-zentic"
                                    placeholder="Logo Alt Text"
                                    value="{{ old('logo_alt_tag', $generals->logo_alt_tag) }}"
                                    required>
                            </div>

                            <div class="file-upload-zone mb-3">

                                <input type="file"
                                    name="website_logo"
                                    accept="image/jpeg,image/png,image/webp"
                                    id="websiteLogoUpload"
                                    class="gallery-upload-input"
                                    data-preview="websiteLogoPreview">

                                <div class="file-upload-icon">
                                    <i class="icon-image-up"></i>
                                </div>

                                <div class="file-upload-title">
                                    Upload Website Logo
                                </div>

                                <div class="file-upload-desc">
                                    PNG, WEBP, JPG or JPEG, up to 1MB
                                </div>

                            </div>

                            <p class="text-xs text-muted mb-2">
                                Choose a logo from your device
                            </p>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Website Favicon -->
            <div class="row mt-2">

                <div class="col-lg-4">

                    <div class="zentic-card mb-4">

                        <div class="zentic-card-header">
                            <h2 class="card-title mb-0">
                                <i class="icon-image"></i>
                                Website Favicon
                            </h2>
                        </div>

                        <div class="zentic-card-body">

                            <div class="text-center mb-3">
                                <img id="websiteFaviconPreview"
                                    src="{{ $generals->website_favicon ? asset($generals->website_favicon) : asset('back-end/images/LaceHarbor.png') }}"
                                    alt="{{ $generals->favicon_alt_tag }}"
                                    class="rounded-3 border zc-add-image"
                                    style="max-width:100%;">
                            </div>

                            <div class="form-group">
                                <label class="form-label">
                                    Favicon Alt Text <span class="required">*</span>
                                </label>

                                <input type="text"
                                    name="favicon_alt_tag"
                                    class="form-control-zentic"
                                    placeholder="Favicon Alt Text"
                                    value="{{ old('favicon_alt_tag', $generals->favicon_alt_tag) }}"
                                    required>
                            </div>

                            <div class="file-upload-zone mb-3">

                                <input type="file"
                                    name="website_favicon"
                                    accept="image/jpeg,image/png,image/webp"
                                    id="websiteFaviconUpload"
                                    class="gallery-upload-input"
                                    data-preview="websiteFaviconPreview">

                                <div class="file-upload-icon">
                                    <i class="icon-image-up"></i>
                                </div>

                                <div class="file-upload-title">
                                    Upload Website Favicon
                                </div>

                                <div class="file-upload-desc">
                                    PNG, WEBP, JPG or JPEG, up to 1MB
                                </div>

                            </div>

                            <p class="text-xs text-muted mb-2">
                                Choose a favicon from your device
                            </p>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Buttons -->
            <div class="row">

                <div class="col-2">
                    <button type="submit" class="btn-zentic btn-primary">
                        Save Changes
                    </button>
                </div>

                <div class="col-2">
                    <a href="{{ route('backend.dashboard') }}" class="btn-zentic btn-outline">
                        Cancel
                    </a>
                </div>

            </div>

        </form>

    </div>

</main>

@endsection
