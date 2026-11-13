@extends('backend.layouts.master')

@section('content')


<main class="zentic-content">

    <div class="page-header">
        <div>
            <h1 class="page-title pb-2">Edit Privacy Policy Page</h1>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}"><i class="icon-house"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Static Pages</a></li>
                    <li class="breadcrumb-item active">Privacy Policy Edit</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row g-4">
        <form action="{{ route('backend.privacy-policy.update') }}" method="POST" enctype="multipart/form-data">

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
            <!-- Content Section -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="zentic-card mb-4">
                        <div class="zentic-card-header">
                            <h2 class="card-title mb-0">
                                <i class="icon-circle-user"></i> Privacy Policy Section Details
                            </h2>
                        </div>
                        <div class="zentic-card-body">
                            <div class="form-group">
                                <label class="form-label"> Title <span class="required">*</span></label>
                                <input type="text" name="privacy_title" class="form-control-zentic" placeholder="Privacy Policy Title" value="{{ old('privacy_title', $privacy->privacy_title) }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label"> Date <span class="required">*</span></label>
                                <input type="text" name="privacy_date" class="form-control-zentic" placeholder="Privacy Policy Date" value="{{ old('privacy_date', $privacy->privacy_date) }}" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Description <span class="required">*</span></label>
                                <textarea class="form-control-zentic" name="privacy_description" rows="5" placeholder="Description" required>{{ old('privacy_description', $privacy->privacy_description) }}</textarea>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Meta SEO Section -->
            <div class="row mt-2">
                <div class="col-lg-12">
                    <div class="zentic-card mb-4">
                        <div class="zentic-card-header">
                            <h2 class="card-title mb-0">
                                <i class="icon-search"></i> SEO Section Details
                            </h2>
                        </div>
                        <div class="zentic-card-body">
                            <div class="form-group">
                                <label class="form-label">Meta Title <span class="required">*</span></label>
                                <input type="text" name="meta_title" class="form-control-zentic" placeholder="Meta Title" value="{{ old('meta_title', $privacy->meta_title) }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Meta Keywords <span class="required">*</span></label>
                                <input type="text" name="meta_keywords" class="form-control-zentic" placeholder="Meta Keywords" value="{{ old('meta_keywords', $privacy->meta_keywords) }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Meta Description <span class="required">*</span></label>
                                <textarea class="form-control-zentic" name="meta_description" rows="5" placeholder="Meta Description" required>{{ old('meta_description', $privacy->meta_description) }}</textarea>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-2">
                        <button type="submit" class="btn-zentic btn-primary"> Save Changes </button>
                    </div>
                    <div class="col-2">
                        <a href="{{ route('backend.dashboard') }}"><button class="btn-zentic btn-outline">Cancel</button></a>
                    </div>
                </div>
            </div>

        </form>
    </div>

</main>

@endsection