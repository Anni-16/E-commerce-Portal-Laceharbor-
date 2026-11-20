@extends('backend.layouts.master')

@section('content')

<main class="zentic-content">

    <div class="page-header">
        <div>
            <h1 class="page-title pb-2">Manage FAQ's Categories</h1>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}"><i class="icon-house"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('backend.manage-faq-categories') }}">Manage FAQ's Categories</a></li>
                </ol>
            </nav>
        </div>

        <div class="page-header-actions">
            <button type="button" class="btn-zentic btn-ai btn-sm" data-bs-toggle="modal" data-bs-target="#addCategoryModal" data-id="1" data-title="dfbfg" data-status="1"><i class="icon-plus"></i> Add Category</button>
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
                            <th>Category Name</th>
                            <th>Question</th>
                            <th>Answers</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($faqcategory as $key => $category)
                        <tr>
                            <td class="mono fw-600">{{ $key + 1 }}</td>
                            <td>{{ $category->faq_cat_name }}</td>
                            <td>{{ $category->faq_cat_name }}</td>
                            <td>{{ $category->faq_cat_name }}</td>
                            <td>
                                @if($category->status == 1)
                                <span class="badge-zentic badge-green badge-dot">Active</span>
                                @else
                                <span class="badge-zentic badge-red badge-dot">Inactive</span>
                                @endif
                            </td>

                            <td>
                                <button type="button" class="btn-zentic btn-success btn-icon" data-bs-toggle="modal" data-bs-target="#editCategoryModal" data-id="{{ $category->id }}" data-title="{{ $category->faq_cat_name }}" data-status="{{ $category->status }}"> <i class="icon-pencil"></i></button>
                                <button type="button" class="btn-zentic btn-danger btn-icon" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="{{ $category->id }}"><i class="icon-trash-2"></i></button>
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

                <p>Are you sure you want to delete this FAQ's Categories? This action cannot be undone.</p>
            </div>

            <div class="modal-footer justify-content-center">

                <button type="button" class="btn btn-secondary"
                    data-bs-dismiss="modal">
                    Cancel
                </button>

                <form id="deleteCategoryForm" action="" method="POST">
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


@endsection