@extends('backend.layouts.master')

@section('content')

<main class="zentic-content">

    <div class="page-header">
        <div>
            <h1 class="page-title pb-2">Manage Country</h1>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}"><i class="icon-house"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Manage Website Setting</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('backend.manage-country') }}">Add country</a></li>
                </ol>
            </nav>
        </div>

        <div class="page-header-actions">
            <button type="button" class="btn-zentic btn-ai btn-sm" data-bs-toggle="modal" data-bs-target="#addCategoryModal" data-id="1" data-title="dfbfg" data-status="1"><i class="icon-plus"></i> Add Country</button>
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
                            <th>Country Name</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($country as $key => $coun)
                        <tr>
                            <td class="mono fw-600">{{ $key + 1 }}</td>
                            <td>{{ $coun->country_name }}</td>
                            <td>
                                @if($coun->status == 1)
                                <span class="badge-zentic badge-green badge-dot">Active</span>
                                @else
                                <span class="badge-zentic badge-red badge-dot">Inactive</span>
                                @endif
                            </td>

                            <td>
                                <button type="button" class="btn-zentic btn-success btn-icon" data-bs-toggle="modal" data-bs-target="#editCategoryModal" data-id="{{ $coun->id }}" data-title="{{ $coun->country_name }}" data-status="{{ $coun->status }}"> <i class="icon-pencil"></i></button>
                                <button type="button" class="btn-zentic btn-danger btn-icon" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="{{ $coun->id }}"><i class="icon-trash-2"></i></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<!-- Add Country Modal -->
<div class="modal fade" id="addCategoryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Add Country</h5>
                <button type="button" class="btn-close"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('backend.manage-country.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="modal-body">

                    <div class="form-group mb-3">
                        <label class="form-label">
                            Country Name
                        </label>

                        <input type="text" name="country_name"
                            class="form-control-zentic"
                            placeholder="Enter Country Name">
                    </div>

                    <div class="text-center mb-3">
                        <strong>OR</strong>
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label">
                            Upload CSV / Excel File
                        </label>

                        <input type="file" name="country_file"
                            class="form-control-zentic"
                            accept=".csv,.xlsx,.xls">
                    </div>

                    <div class="form-group d-flex align-items-center mb-3">
                        <span class="flex-fill"
                            style="padding-right: 15px; color: var(--zc-text-secondary); font-weight: 600;">
                            Status <span class="required" style="color: red;">*</span>
                        </span>

                        <label class="toggle-switch flex-shrink-0">
                            <input type="checkbox" name="status" value="1" checked>
                            <span class="toggle-slider"></span>
                        </label>
                    </div>

                    <span style="font-size: 14px; color: var(--zc-text-secondary);">
                        Enable this option if you want this country to be visible on the website.
                    </span>

                    <small class="d-block mt-2 text-muted">
                        CSV / Excel file must contain country names in the first column.
                    </small>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn-zentic btn-outline"
                        data-bs-dismiss="modal">Cancel</button>

                    <button type="submit" class="btn-zentic btn-primary">
                        Save Country
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>


<!-- Edit Country Modal -->
<div class="modal fade" id="editCategoryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Edit Country</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="editCategoryForm" method="POST" action="">
                @csrf
                @method('PUT')

                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label class="form-label">
                            Country Name <span class="required">*</span>
                        </label>

                        <input type="text" name="country_name"
                            id="edit_country_name"
                            class="form-control-zentic"
                            placeholder="Country Name" required>
                    </div>

                    <div class="form-group d-flex align-items-center mb-3">

                        <span class="flex-fill"
                            style="padding-right: 15px; color: var(--zc-text-secondary); font-weight: 600;">
                            Status <span class="required" style="color: red;">*</span>
                        </span>

                        <label class="toggle-switch flex-shrink-0">
                            <input type="checkbox" name="status"
                                id="edit_status" value="1">
                            <span class="toggle-slider"></span>
                        </label>

                    </div>

                    <span style="font-size: 14px; color: var(--zc-text-secondary);">
                        Enable this option if you want this country to be visible on the website. Otherwise, leave it unchecked.
                    </span>

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn-zentic btn-outline"
                        data-bs-dismiss="modal">Cancel</button>

                    <button type="submit" class="btn-zentic btn-primary">
                        Save Changes
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>


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

                <p>Are you sure you want to delete this Country Name? This action cannot be undone.</p>
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

<script>
    document.addEventListener('DOMContentLoaded', function() {

        const editModal = document.getElementById('editCategoryModal');

        editModal.addEventListener('show.bs.modal', function(event) {

            const button = event.relatedTarget;

            const id = button.getAttribute('data-id');
            const title = button.getAttribute('data-title');
            const status = button.getAttribute('data-status');

            // Country Name
            document.getElementById('edit_country_name').value = title;

            // Status
            document.getElementById('edit_status').checked = (status == 1);

            // Update Form Action
            document.getElementById('editCategoryForm').action =
                "{{ url('admin/manage-country') }}/" + id;

        });

        const deleteModal = document.getElementById('deleteModal');

        deleteModal.addEventListener('show.bs.modal', function(event) {

            const button = event.relatedTarget;
            const id = button.getAttribute('data-id');


            document.getElementById('deleteCategoryForm').action =
                "{{ url('admin/manage-country') }}/" + id;
        });

    });
</script>

@endsection