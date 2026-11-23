@extends('backend.layouts.master')

@section('content')


<main class="zentic-content">

    <div class="page-header">
        <div>
            <h1 class="page-title pb-2">Edit Google Tag Manger</h1>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}"><i class="icon-house"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Google Tag Manager</a></li>
                    <li class="breadcrumb-item active">Google Tag Manger Edit</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row g-4">
        <form action="{{ route('backend.gtm-tag.update') }}" method="POST" enctype="multipart/form-data">

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
                                <i class="icon-search"></i> Google Tag Manager Head Section Details
                            </h2>
                        </div>
                        <div class="zentic-card-body">
                            <div class="form-group">
                                <label class="form-label">Head Tag <span class="required">*</span></label>
                                <textarea class="form-control-zentic" name="head_tag" rows="10" placeholder="Meta Description" required>{{ old('head_tag', $gtmtag->head_tag) }}</textarea>
                                <span>Paste this code as high in the head of the page as possible:</span>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="zentic-card mb-4">
                        <div class="zentic-card-header">
                            <h2 class="card-title mb-0">
                                <i class="icon-search"></i> Google Tag Manager Body Section Details
                            </h2>
                        </div>
                        <div class="zentic-card-body">
                            <div class="form-group">
                                <label class="form-label">Body Tag <span class="required">*</span></label>
                                <textarea class="form-control-zentic" name="body_tag" rows="10" placeholder="Meta Description" required>{{ old('body_tag', $gtmtag->body_tag) }}</textarea>
                                <span>Paste this code immediately after the opening body tag:</span>
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