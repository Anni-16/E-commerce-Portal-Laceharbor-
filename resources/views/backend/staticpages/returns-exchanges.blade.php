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
        <form data-validate id="advForm">
            <!-- Banner Section -->
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
                                <input type="text" class="form-control-zentic" placeholder="Banner Title " required>
                            </div>
                            <div class="form-group">
                                <label class="form-label"> Date <span class="required">*</span></label>
                                <input type="text" class="form-control-zentic" placeholder=" Date " required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Description <span class="required">*</span></label>
                                <textarea class="form-control-zentic" rows="5" placeholder="Description" required></textarea>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
    </div>

    <!-- Our Promise Section -->
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