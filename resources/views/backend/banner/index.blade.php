@extends('backend.layouts.master')

@section('content')

<main class="zentic-content">

    <div class="page-header">
        <div>
            <h1 class="page-title pb-2">Manage Banner Section</h1>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}"><i class="icon-house"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('backend.manage-banner') }}">Manage Banner</a></li>
                </ol>
            </nav>
        </div>

        <div class="page-header-actions">
            <a href="{{ route('backend.add-banner') }}" class="btn-zentic btn-ai btn-sm"><i class="icon-plus"></i> Add Banner</a>
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
                            <th>Redirected Link</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($banners as $key => $banner)
                        <tr>
                            <td class="mono fw-600">{{ $key + 1 }}</td>
                            <td>{{ $banner->banner_title }}</td>
                            <td>
                                @if($banner->banner_image)
                                <img src="{{ asset($banner->banner_image) }}"
                                    alt="{{ $banner->banner_alt_tag }}"
                                    style="width: 50px; height: 50px; object-fit: cover;">
                                @else
                                <img src="{{ asset('back-end/images/no_images.svg') }}"
                                    alt="No Images"
                                    style="width: 50px; height: 50px; object-fit: cover;">
                                @endif
                            </td>
                            <td>{{ $banner->banner_alt_text }}</td>
                            <td>
                                <a href="{{ $banner->banner_link }}"
                                    target="_blank"
                                    rel="noopener noreferrer">
                                    {{ $banner->banner_link }}
                                </a>
                            </td>

                            <td>
                                @if($banner->status == 1)
                                <span class="badge-zentic badge-green badge-dot">Active</span>
                                @else
                                <span class="badge-zentic badge-dot badge-red">Inactive</span>
                                @endif
                            </td>

                            <td>
                                <a href="{{ route('backend.view-banner', $banner->id) }}">
                                    <button class="btn-zentic btn-warning btn-icon"><i class="icon-eye"></i></button>
                                </a>
                                <a href="{{ route('backend.edit-banner', $banner->id) }}">
                                    <button class="btn-zentic btn-success btn-icon"><i class="icon-pencil"></i></button>
                                </a>
                                <button type="button" class="btn-zentic btn-danger btn-icon"
                                    data-bs-toggle="modal"
                                    data-bs-target="#deleteModal{{ $banner->id }}">
                                    <i class="icon-trash-2"></i>
                                </button>
                            </td>
                        </tr>

                        @empty
                        <tr>
                            <td colspan="7" class="text-center">
                                No Banner Data Is Found
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>


<!-- Delete Confirmation Modal -->

@foreach($banners as $banner)

<div class="modal fade" id="deleteModal{{ $banner->id }}" tabindex="-1" aria-hidden="true">
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

                <p>Are you sure you want to delete this banner? This action cannot be undone.</p>
            </div>

            <div class="modal-footer justify-content-center">

                <button type="button" class="btn btn-secondary"
                    data-bs-dismiss="modal">
                    Cancel
                </button>

                <form action="{{ route('backend.delete-banner', $banner->id) }}"
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