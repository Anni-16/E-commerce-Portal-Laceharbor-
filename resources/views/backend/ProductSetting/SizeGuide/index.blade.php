@extends('backend.layouts.master')

@section('content')

<main class="zentic-content">

    <div class="page-header">
        <div>
            <h1 class="page-title pb-2">Manage Size Guide Section</h1>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}"><i class="icon-house"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('backend.manage-size-guide') }}">Manage Products Setting</a></li>
                    <li class="breadcrumb-item"><a href="#">Manage Size Guide</a></li>
                </ol>
            </nav>
        </div>

        <div class="page-header-actions">
            <a href="{{ route('backend.add-sizeguide') }}" class="btn-zentic btn-ai btn-sm"><i class="icon-plus"></i> Add Size Guide</a>
        </div>
    </div>

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

    <div class="zentic-card mb-4">
        <div class="zentic-card-body">
            <div class="zentic-table-wrapper">
                <table class="zentic-table w-100" id="mainDataTable">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Image Alt Text</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sizeguides as $key => $sizeguide)
                        <tr>
                            <td class="mono fw-600">{{ $key + 1 }}</td>
                            <td>{{ $sizeguide->name }}</td>

                            <td>
                                @if($sizeguide->images)
                                <img src="{{ asset($sizeguide->images) }}"
                                    alt="{{ $sizeguide->images_alt_tag }}"
                                    style="width: 50px; height: 50px; object-fit: cover;">
                                @else
                                <img src="{{ asset('back-end/images/no_images.svg') }}"
                                    alt="No Images"
                                    style="width: 50px; height: 50px; object-fit: cover;">
                                @endif
                            </td>

                            <td>{{ $sizeguide->images_alt_tag }}</td>

                            <td>
                                @if($sizeguide->status == 1)
                                <span class="badge-zentic badge-green badge-dot">Active</span>
                                @else
                                <span class="badge-zentic badge-dot badge-red">Inactive</span>
                                @endif
                            </td>

                            <td>
                                <a href="{{ route('backend.view-sizeguide', $sizeguide->id) }}">
                                    <button class="btn-zentic btn-warning btn-icon">
                                        <i class="icon-eye"></i>
                                    </button>
                                </a>

                                <a href="{{ route('backend.edit-sizeguide', $sizeguide->id) }}">
                                    <button class="btn-zentic btn-success btn-icon">
                                        <i class="icon-pencil"></i>
                                    </button>
                                </a>

                                <button type="button" class="btn-zentic btn-danger btn-icon"
                                    data-bs-toggle="modal"
                                    data-bs-target="#deleteModal{{ $sizeguide->id }}">
                                    <i class="icon-trash-2"></i>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>


<!-- Delete Confirmation Modal -->

@foreach($sizeguides as $sizeguide)

<div class="modal fade" id="deleteModal{{ $sizeguide->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Confirm Delete</h5>
                <button type="button" class="btn-close"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body text-center">
                <i class="icon-trash-2" style="font-size: 40px; color: red;"></i>

                <h5 class="mt-3">Are you sure?</h5>

                <p>Are you sure you want to delete this size guide? This action cannot be undone.</p>
            </div>

            <div class="modal-footer justify-content-center">

                <button type="button" class="btn btn-secondary"
                    data-bs-dismiss="modal">
                    Cancel
                </button>

                <form action="{{ route('backend.delete-sizeguide', $sizeguide->id) }}"
                    method="POST">

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">
                        Yes, Delete
                    </button>

                </form>

            </div>

        </div>
    </div>
</div>

@endforeach

@endsection