@extends('backend.layouts.master')


@section('content')

<main class="zentic-content">

    <div class="page-header">
        <div>
            <h1 class="page-title pb-2">View Size Guide</h1>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}"><i class="icon-house"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('backend.manage-size-guide') }}">Manage Size Guide</a></li>
                    <li class="breadcrumb-item"><a href="#">View Size Guide</a></li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row g-4">

        <!-- Banner Section -->
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
                            <label class="form-label"> Size Guide Title <span class="readonly">*</span> </label>
                            <p>{{ $sizeguide->name }}</p>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Images Alt Text</label>
                            <p>{{ $sizeguide->images_alt_tag }}</p>
                        </div>

                        <div class="form-group">
                            <span class="flex-fill" style="padding-right: 15px; color: var(--zc-text-secondary); font-weight: 600;">
                                Status <span class="readonly" style="color: red;">*</span>
                            </span>

                            <label class="toggle-switch flex-shrink-0">
                                <input type="checkbox" {{ $sizeguide->status == 1 ? 'checked' : '' }} disabled>
                                <span class="toggle-slider"></span>
                            </label>
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
                            @if($sizeguide->images)
                            <img id="bannerImagePreview" src="{{ asset($sizeguide->images) }}" alt="{{ $sizeguide->images_alt_tag }}" class="rounded-3 border zc-add-image" style="max-width:100%;">
                            @else
                            <img id="bannerImagePreview" src="{{ asset('back-end/images/no_images.svg') }}" alt="No Images" class="rounded-3 border zc-add-image" style="max-width:100%;">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Buttons -->
        <div class="row">
            <div class="col-2">
                <a href="{{ route('backend.edit-sizeguide', $sizeguide->id) }}" class="btn-zentic btn-primary"> Edit Size Guide </a>
            </div>
            <div class="col-2">
                <a href="{{ route('backend.manage-size-guide') }}" class="btn-zentic btn-outline"> Cancel </a>
            </div>
        </div>


    </div>
</main>

@endsection