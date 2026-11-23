@extends('backend.layouts.master')

@section('content')


<main class="zentic-content">

    <div class="page-header">
        <div>
            <h1 class="page-title pb-2">Edit All Pages SEO</h1>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}"><i class="icon-house"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">All Pages Meta SEO</a></li>
                    <li class="breadcrumb-item active">All Pages Seo Edit</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row g-4">
        <form action="{{ route('backend.meta-seo.update') }}" method="POST" enctype="multipart/form-data">

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
            <!-- Meta SEO Section -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="zentic-card mb-4">
                        <div class="zentic-card-header">
                            <h2 class="card-title mb-0">
                                <i class="icon-search"></i> Home Pages SEO Section Details
                            </h2>
                        </div>
                        <div class="zentic-card-body">
                            <div class="form-group">
                                <label class="form-label">Meta Title <span class="required">*</span></label>
                                <input type="text" name="home_meta_title" class="form-control-zentic" placeholder="Meta Title" value="{{ old('home_meta_title', $metaseo->home_meta_title) }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Meta Keywords <span class="required">*</span></label>
                                <input type="text" name="home_meta_keyword" class="form-control-zentic" placeholder="Meta Keywords" value="{{ old('home_meta_keyword', $metaseo->home_meta_keyword) }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Meta Description <span class="required">*</span></label>
                                <textarea class="form-control-zentic" name="home_meta_description" rows="5" placeholder="Meta Description" required>{{ old('home_meta_description', $metaseo->home_meta_description) }}</textarea>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="zentic-card mb-4">
                        <div class="zentic-card-header">
                            <h2 class="card-title mb-0">
                                <i class="icon-search"></i> Products Pages SEO Section Details
                            </h2>
                        </div>
                        <div class="zentic-card-body">
                            <div class="form-group">
                                <label class="form-label">Meta Title <span class="required">*</span></label>
                                <input type="text" name="pro_meta_title" class="form-control-zentic" placeholder="Meta Title" value="{{ old('pro_meta_title', $metaseo->pro_meta_title) }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Meta Keywords <span class="required">*</span></label>
                                <input type="text" name="pro_meta_keyword" class="form-control-zentic" placeholder="Meta Keywords" value="{{ old('pro_meta_keyword', $metaseo->pro_meta_keyword) }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Meta Description <span class="required">*</span></label>
                                <textarea class="form-control-zentic" name="pro_meta_description" rows="5" placeholder="Meta Description" required>{{ old('pro_meta_description', $metaseo->pro_meta_description) }}</textarea>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="zentic-card mb-4">
                        <div class="zentic-card-header">
                            <h2 class="card-title mb-0">
                                <i class="icon-search"></i> FAQ's Pages SEO Section Details
                            </h2>
                        </div>
                        <div class="zentic-card-body">
                            <div class="form-group">
                                <label class="form-label">Meta Title <span class="required">*</span></label>
                                <input type="text" name="faq_meta_title" class="form-control-zentic" placeholder="Meta Title" value="{{ old('faq_meta_title', $metaseo->faq_meta_title) }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Meta Keywords <span class="required">*</span></label>
                                <input type="text" name="faq_meta_keyword" class="form-control-zentic" placeholder="Meta Keywords" value="{{ old('faq_meta_keyword', $metaseo->faq_meta_keyword) }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Meta Description <span class="required">*</span></label>
                                <textarea class="form-control-zentic" name="faq_meta_description" rows="5" placeholder="Meta Description" required>{{ old('faq_meta_description', $metaseo->faq_meta_description) }}</textarea>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="zentic-card mb-4">
                        <div class="zentic-card-header">
                            <h2 class="card-title mb-0">
                                <i class="icon-search"></i> Size Guide Pages SEO Section Details
                            </h2>
                        </div>
                        <div class="zentic-card-body">
                            <div class="form-group">
                                <label class="form-label">Meta Title <span class="required">*</span></label>
                                <input type="text" name="size_meta_title" class="form-control-zentic" placeholder="Meta Title" value="{{ old('size_meta_title', $metaseo->size_meta_title) }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Meta Keywords <span class="required">*</span></label>
                                <input type="text" name="size_meta_keyword" class="form-control-zentic" placeholder="Meta Keywords" value="{{ old('size_meta_keyword', $metaseo->size_meta_keyword) }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Meta Description <span class="required">*</span></label>
                                <textarea class="form-control-zentic" name="size_meta_description" rows="5" placeholder="Meta Description" required>{{ old('size_meta_description', $metaseo->size_meta_description) }}</textarea>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="zentic-card mb-4">
                        <div class="zentic-card-header">
                            <h2 class="card-title mb-0">
                                <i class="icon-search"></i> Product Category Pages SEO Section Details
                            </h2>
                        </div>
                        <div class="zentic-card-body">
                            <div class="form-group">
                                <label class="form-label">Meta Title <span class="required">*</span></label>
                                <input type="text" name="pro_cat_meta_title" class="form-control-zentic" placeholder="Meta Title" value="{{ old('pro_cat_meta_title', $metaseo->pro_cat_meta_title) }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Meta Keywords <span class="required">*</span></label>
                                <input type="text" name="pro_cat_meta_keyword" class="form-control-zentic" placeholder="Meta Keywords" value="{{ old('pro_cat_meta_keyword', $metaseo->pro_cat_meta_keyword) }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Meta Description <span class="required">*</span></label>
                                <textarea class="form-control-zentic" name="pro_cat_meta_description" rows="5" placeholder="Meta Description" required>{{ old('pro_cat_meta_description', $metaseo->pro_cat_meta_description) }}</textarea>
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