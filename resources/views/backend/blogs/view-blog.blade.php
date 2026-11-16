@extends('backend.layouts.master')


@section('content')

<main class="zentic-content">

    <div class="page-header">
        <div>
            <h1 class="page-title pb-2">Edit Blog</h1>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}"><i class="icon-house"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('backend.manage-blogs') }}">Manage Blogs</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('backend.view-blog') }}">View Blog</a></li>
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
                            Blog Section Details
                        </h2>
                    </div>
                    <div class="zentic-card-body">
                        <div class="form-group">
                            <label class="form-label"> Blog Title <span class="readonly">*</span> </label>
                            <p>Heeloo dwd</p>
                        </div>
                        <div class="form-group">
                            <label class="form-label"> Blog URL's Preview </label>
                            <p>https://laceharbor.com/blogs/heeloo-dwd</p>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label class="form-label"> Blog Date <span class="readonly">*</span> </label>
                                    <p>2023-10-10</p>
                                </div>
                                <div class="col-6">
                                    <label class="form-label"> Blog Images Alt Text <span class="readonly">*</span> </label>
                                    <p>Blog Image Alt Text</p>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label"> Blog Description <span class="readonly">*</span> </label>
                            <p>This is a sample blog description.</p>
                        </div>

                        <div class="form-group">
                            <span class="flex-fill" style="padding-right: 15px; color: var(--zc-text-secondary); font-weight: 600;">
                                Status <span class="readonly" style="color: red;">*</span>
                            </span>

                            <label class="toggle-switch flex-shrink-0">
                                <input type="checkbox" checked readonly>
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
                            <i class="icon-image"></i> Banner Image
                        </h2>
                    </div>
                    <div class="zentic-card-body">
                        <div class="text-center mb-3">
                            <img id="bannerImagePreview" src="{{ asset('back-end/images/LaceHarbor.png') }}" alt="Banner Image" class="rounded-3 border zc-add-image" style="max-width:100%;">
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
                        <h2 class="card-title mb-0"> <i class="icon-search"></i> SEO Section Details </h2>
                    </div>

                    <div class="zentic-card-body">
                        <div class="form-group">
                            <label class="form-label"> Meta Title <span class="readonly">*</span> </label>
                            <p>Sample Meta Title</p>
                        </div>

                        <div class="form-group">
                            <label class="form-label"> Meta Keywords <span class="readonly">*</span> </label>
                            <p>Sample, Meta, Keywords</p>
                        </div>

                        <div class="form-group">
                            <label class="form-label"> Meta Description <span class="readonly">*</span> </label>
                            <p>Sample meta description for the blog post.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Buttons -->
        <div class="row">
            <div class="col-2">
                <a href="{{ route('backend.edit-blog') }}" class="btn-zentic btn-primary"> Edit Blog </a>
            </div>

            <div class="col-2">
                <a href="{{ route('backend.manage-blogs') }}" class="btn-zentic btn-outline"> Cancel </a>
            </div>
        </div>


    </div>
</main>

@endsection