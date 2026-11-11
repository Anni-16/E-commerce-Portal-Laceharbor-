@extends('backend.layouts.master')

@section('content')


<main class="zentic-content">

    <div class="page-header">
        <div>
            <h1 class="page-title pb-2">Edit Social Media  Page</h1>
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
        <form data-validate id="advForm">
            <!-- Banner Section -->
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
                                <input type="text" class="form-control-zentic" placeholder="Instagram Link" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label"> Facebook <span class="required">*</span></label>
                                <input type="text" class="form-control-zentic" placeholder="Facebook Link" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label"> Twitter ( X ) <span class="required">*</span></label>
                                <input type="text" class="form-control-zentic" placeholder="Twitter Link" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label"> Threads <span class="required">*</span></label>
                                <input type="text" class="form-control-zentic" placeholder="Threads Link" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label"> Pinterest <span class="required">*</span></label>
                                <input type="text" class="form-control-zentic" placeholder="Pinterest Link" required>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>

</main>

@endsection