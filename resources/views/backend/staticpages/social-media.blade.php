@extends('backend.layouts.master')

@section('content')


<main class="zentic-content">

    <div class="page-header">
        <div>
            <h1 class="page-title pb-2">Edit Social Media Page</h1>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}"><i class="icon-house"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Static Pages</a></li>
                    <li class="breadcrumb-item active">Social Media Links Edit</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row g-4">
        <form action="{{ route('backend.social-media.update') }}" method="POST" enctype="multipart/form-data">

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
                                <i class="icon-circle-user"></i> Social Media Links Section Details
                            </h2>
                        </div>
                        <div class="zentic-card-body">
                            <div class="form-group">
                                <label class="form-label"> Instagram <span class="required">*</span></label>
                                <input type="text" name="instagram" class="form-control-zentic" placeholder="Instagram Link" value="{{ old('instagram', $socialMedia->instagram) }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label"> Facebook <span class="required">*</span></label>
                                <input type="text" name="facebook" class="form-control-zentic" placeholder="Facebook Link" value="{{ old('facebook', $socialMedia->facebook) }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label"> Twitter ( X ) <span class="required">*</span></label>
                                <input type="text" name="twitter" class="form-control-zentic" placeholder="Twitter Link" value="{{ old('twitter', $socialMedia->twitter) }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label"> Threads <span class="required">*</span></label>
                                <input type="text" name="threads" class="form-control-zentic" placeholder="Threads Link" value="{{ old('threads', $socialMedia->threads) }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label"> Pinterest <span class="required">*</span></label>
                                <input type="text" name="pinterest" class="form-control-zentic" placeholder="Pinterest Link" value="{{ old('pinterest', $socialMedia->pinterest) }}" required>
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