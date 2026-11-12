@extends('backend.layouts.master')

@section('content')


<main class="zentic-content">

    <div class="page-header">
        <div>
            <h1 class="page-title pb-2">Edit Returns & Exchanges Page</h1>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}"><i class="icon-house"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Static Pages</a></li>
                    <li class="breadcrumb-item active">Returns & Exchanges Edit</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row g-4">
        <form action="{{ route('backend.returns-exchanges.update') }}" method="POST" enctype="multipart/form-data">

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
                                <i class="icon-circle-user"></i> Returns & Exchanges Section Details
                            </h2>
                        </div>
                        <div class="zentic-card-body">

                            <div class="form-group">
                                <label class="form-label"> Title <span class="required">*</span></label>
                                <input type="text" name="returns_title" class="form-control-zentic" placeholder="Returns Title" value="{{ old('returns_title', $returns->returns_title) }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label"> Date <span class="required">*</span></label>
                                <input type="text" name="returns_date" class="form-control-zentic" placeholder="Returns Date" value="{{ old('returns_date', $returns->returns_date) }}" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Description <span class="required">*</span></label>
                                <textarea class="form-control-zentic" rows="5" placeholder="Description" name="returns_description" required>{{ old('returns_description', $returns->returns_description) }}</textarea>
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
                                <input type="text" name="meta_title" class="form-control-zentic" placeholder="Meta Title" value="{{ old('meta_title', $returns->meta_title) }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Meta Keywords <span class="required">*</span></label>
                                <input type="text" name="meta_keywords" class="form-control-zentic" placeholder="Meta Keywords" value="{{ old('meta_keywords', $returns->meta_keywords) }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Meta Description <span class="required">*</span></label>
                                <textarea class="form-control-zentic" name="meta_description" rows="5" placeholder="Meta Description" required>{{ old('meta_description', $returns->meta_description) }}</textarea>
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