@extends('backend.layouts.master')

@section('content')


<main class="zentic-content">

    <div class="page-header">
        <div>
            <h1 class="page-title pb-2">Edit Contact Us Page</h1>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}"><i class="icon-house"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Static Pages</a></li>
                    <li class="breadcrumb-item active">Contact Us Edit</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row g-4">
        <form action="{{ route('backend.contact-us.update') }}" method="POST" enctype="multipart/form-data">

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
                                <i class="icon-circle-user"></i> Contact Us Section Details
                            </h2>
                        </div>
                        <div class="zentic-card-body">

                            <div class="form-group">
                                <label class="form-label"> Title <span class="required">*</span></label>
                                <input type="text" name="contact_title" class="form-control-zentic" placeholder="Contact Title" value="{{ old('contact_title', $contact->contact_title) }}" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Description <span class="required">*</span></label>
                                <textarea class="form-control-zentic" rows="5" placeholder="Description" name="contact_description" required>{{ old('contact_description', $contact->contact_description) }}</textarea>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Address <span class="required">*</span></label>
                                <textarea class="form-control-zentic" rows="5" placeholder="Address" name="address" required>{{ old('address', $contact->address) }}</textarea>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label class="form-label">Phone <span class="required">*</span></label>
                                        <input type="text" name="phone" class="form-control-zentic" placeholder="Phone" value="{{ old('phone', $contact->phone) }}" required>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Email <span class="required">*</span></label>
                                        <input type="text" name="email" class="form-control-zentic" placeholder="Email" value="{{ old('email', $contact->email) }}" required>
                                    </div>
                                </div>
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
                                <input type="text" name="meta_title" class="form-control-zentic" placeholder="Meta Title" value="{{ old('meta_title', $contact->meta_title) }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Meta Keywords <span class="required">*</span></label>
                                <input type="text" name="meta_keywords" class="form-control-zentic" placeholder="Meta Keywords" value="{{ old('meta_keywords', $contact->meta_keywords) }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Meta Description <span class="required">*</span></label>
                                <textarea class="form-control-zentic" rows="5" name="meta_description" placeholder="Meta Description" required>{{ old('meta_description', $contact->meta_description) }}</textarea>
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