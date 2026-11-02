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
        <form data-validate id="advForm">
            <!-- Banner Section -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="zentic-card mb-4">
                        <div class="zentic-card-header">
                            <h2 class="card-title mb-0">
                                <i class="icon-circle-user"></i> About Banner Section Details
                            </h2>
                        </div>
                        <div class="zentic-card-body">

                            <div class="form-group">
                                <label class="form-label">Banner Section Title <span class="required">*</span></label>
                                <input type="text" class="form-control-zentic" placeholder="Banner Title " required>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-8">
                                        <label class="form-label">Banner Section Heading <span class="required">*</span></label>
                                        <input type="text" class="form-control-zentic" placeholder="Banner Section Heading" required>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Banner Images Alt Text <span class="required">*</span></label>
                                        <input type="text" class="form-control-zentic" placeholder="Banner Images Alt Text" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Banner Section Sub-heading <span class="required">*</span></label>
                                <textarea class="form-control-zentic" rows="5" placeholder="Banner Sub-heading" required></textarea>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="zentic-card">
                        <div class="zentic-card-header">
                            <h2 class="card-title mb-0"><i class="icon-image"></i> Banner Image</h2>
                        </div>
                        <div class="zentic-card-body">
                            <div class="text-center mb-3">
                                <img id="prdImagePreview" src="{{ asset('back-end/images/LaceHarbor.png') }}" alt="Product preview" class="rounded-3 border zc-add-image">
                            </div>
                            <div class="file-upload-zone mb-3">
                                <input type="file" accept="image/*" id="prdImageUpload" class="gallery-upload-input" data-preview="prdImagePreview">
                                <div class="file-upload-icon"><i class="icon-image-up"></i></div>
                                <div class="file-upload-title">Upload your own image</div>
                                <div class="file-upload-desc">PNG, WEBP, JPG, SVG or JPEG, up to 1MB</div>
                            </div>
                            <p class="text-xs text-muted mb-2">Choose a photo from your device</p>
                        </div>
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
                        <i class="icon-circle-user"></i> About Us Section Details
                    </h2>
                </div>
                <div class="zentic-card-body">

                    <div class="form-group">
                        <label class="form-label">About Us Section Title <span class="required">*</span></label>
                        <input type="text" class="form-control-zentic" placeholder="About Us Title " required>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-8">
                                <label class="form-label">About Us Section Heading <span class="required">*</span></label>
                                <input type="text" class="form-control-zentic" placeholder="About Us Section Heading" required>
                            </div>
                            <div class="col-4">
                                <label class="form-label">About Us Images Alt Text <span class="required">*</span></label>
                                <input type="text" class="form-control-zentic" placeholder="About Us Images Alt Text" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">About Us Section Sub-heading <span class="required">*</span></label>
                        <input type="text" class="form-control-zentic" placeholder="About Us Section Sub-heading" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">About Us Section Title 2 <span class="required">*</span></label>
                        <input type="text" class="form-control-zentic" placeholder="About Us Title 2 " required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">About Us Section Heading 2<span class="required">*</span></label>
                        <input type="text" class="form-control-zentic" placeholder="About Us Section Heading 2" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">About Us Section Description<span class="required">*</span></label>
                        <textarea class="form-control-zentic" rows="5" placeholder="About Us Section Description" required></textarea>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-4">
            <div class="zentic-card">
                <div class="zentic-card-header">
                    <h2 class="card-title mb-0"><i class="icon-image"></i> About Us Image</h2>
                </div>
                <div class="zentic-card-body">
                    <div class="text-center mb-3">
                        <img id="prdImagePreview" src="{{ asset('back-end/images/LaceHarbor.png') }}" alt="Product preview" class="rounded-3 border zc-add-image">
                    </div>
                    <div class="file-upload-zone mb-3">
                        <input type="file" accept="image/*" id="prdImageUpload" class="gallery-upload-input" data-preview="prdImagePreview">
                        <div class="file-upload-icon"><i class="icon-image-up"></i></div>
                        <div class="file-upload-title">Upload your own image</div>
                        <div class="file-upload-desc">PNG, WEBP, JPG, SVG or JPEG, up to 1MB</div>
                    </div>
                    <p class="text-xs text-muted mb-2">Choose a photo from your device</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Our Mission Section -->
    <div class="row mt-2">
        <div class="col-lg-6">
            <div class="zentic-card mb-4">
                <div class="zentic-card-header">
                    <h2 class="card-title mb-0">
                        <i class="icon-circle-user"></i> Our Mission Section Details
                    </h2>
                </div>
                <div class="zentic-card-body">

                    <div class="form-group">
                        <label class="form-label">Our Mission Section Heading <span class="required">*</span></label>
                        <input type="text" class="form-control-zentic" placeholder="Our Mission Section Heading" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">About Us Section Description<span class="required">*</span></label>
                        <textarea class="form-control-zentic" rows="5" placeholder="About Us Section Description" required></textarea>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-6">
            <div class="zentic-card mb-4">
                <div class="zentic-card-header">
                    <h2 class="card-title mb-0">
                        <i class="icon-circle-user"></i> What We Do Section Details
                    </h2>
                </div>
                <div class="zentic-card-body">

                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <label class="form-label">What We Do Section Title <span class="required">*</span></label>
                                <input type="text" class="form-control-zentic" placeholder="What We Do Section Title" required>
                            </div>
                            <div class="col-6">
                                <label class="form-label">What We Do Heading <span class="required">*</span></label>
                                <input type="text" class="form-control-zentic" placeholder="What We Do Heading" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">What We Do Section Description<span class="required">*</span></label>
                        <textarea class="form-control-zentic" rows="5" placeholder="What We Do Section Description" required></textarea>
                    </div>
                </div>

            </div>
        </div>

        <!-- Our Promise Section -->
        <div class="row mt-2">
            <div class="col-lg-6">
                <div class="zentic-card mb-4">
                    <div class="zentic-card-header">
                        <h2 class="card-title mb-0">
                            <i class="icon-circle-user"></i> Our Promise Section Details
                        </h2>
                    </div>
                    <div class="zentic-card-body">

                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label class="form-label">Our Promise Section Title <span class="required">*</span></label>
                                    <input type="text" class="form-control-zentic" placeholder="Our Promise Section Title" required>
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Our Promise Section Heading <span class="required">*</span></label>
                                    <input type="text" class="form-control-zentic" placeholder="Our Promise Section Heading" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Our Promise Section Sub Description <span class="required">*</span></label>
                            <textarea class="form-control-zentic" rows="5" placeholder="Our Promise Section Sub Description" required></textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Our Mission Section Tag Line <span class="required">*</span></label>
                            <input type="text" class="form-control-zentic" placeholder="Our Mission Section Tag Line" required>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="zentic-card mb-4">
                    <div class="zentic-card-header">
                        <h2 class="card-title mb-0">
                            <i class="icon-search"></i> SEO Section Details
                        </h2>
                    </div>
                    <div class="zentic-card-body">

                        <div class="form-group">
                            <label class="form-label">Meta Title <span class="required">*</span></label>
                            <input type="text" class="form-control-zentic" placeholder="Meta Title" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Meta Keywords <span class="required">*</span></label>
                            <input type="text" class="form-control-zentic" placeholder="Meta Keywords" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Meta Description <span class="required">*</span></label>
                            <textarea class="form-control-zentic" rows="5" placeholder="Meta Description" required></textarea>
                        </div>
                    </div>

                </div>
            </div>


            <div class="row">
                <div class="col-2">
                    <button class="btn-zentic btn-primary">Save Changes</button>
                </div>
                <div class="col-2">
                    <a href="{{ route('backend.dashboard') }}"><button class="btn-zentic btn-outline">Cancel</button></a>
                </div>
            </div>

            </form>
        </div>

</main>

@endsection