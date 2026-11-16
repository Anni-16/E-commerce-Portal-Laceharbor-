@extends('backend.layouts.master')

@section('content')

<main class="zentic-content">

    <div class="page-header">
        <div>
            <h1 class="page-title pb-2">Edit About Page</h1>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}"><i class="icon-house"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('backend.manage-blogs') }}">Manage Blogs</a></li>
                </ol>
            </nav>
        </div>

        <div class="page-header-actions">
            <a href="{{ route('backend.add-blog') }}" class="btn-zentic btn-ai btn-sm"><i class="icon-plus"></i> Add Blogs</a>
        </div>
    </div>

    <div class="zentic-card mb-4">
        <div class="zentic-card-body">
            <div class="zentic-table-wrapper">
                <table class="zentic-table w-100" id="mainDataTable">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>URL's</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="mono fw-600">1</td>
                            <td>Blog 1</td>
                            <td><img src="{{ asset('back-end/images/LaceHarbor.png') }}" alt="" style="width: 50px; height: 50px; object-fit: cover;"></td>
                            <td>Blog 1 Description</td>
                            <td>Nov 30, 2026</td>
                            <td><a href="https://laceharbor.com/blogs/blog-1" target="_blank" rel="noopener noreferrer">https://laceharbor.com/blogs/blog-1</a></td>
                            <td><span class="badge-zentic badge-green badge-dot">Success</span></td>
                            <td>
                                <a href="{{ route('backend.view-blog') }}"><button class="btn-zentic btn-warning btn-icon"><i class="icon-eye"></i></button></a>
                                <a href="{{ route('backend.edit-blog') }}"><button class="btn-zentic btn-success btn-icon"><i class="icon-pencil"></i></button></a>
                                <button type="button" class="btn-zentic btn-danger btn-icon" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="icon-trash-2"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>


<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
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

                <p>Are you sure you want to delete this blog? This action cannot be undone.</p>
            </div>

            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-secondary"
                    data-bs-dismiss="modal">
                    Cancel
                </button>

                <button type="button" class="btn btn-danger">
                    Yes, Delete
                </button>
            </div>

        </div>
    </div>
</div>

@endsection