@extends('backend.layouts.master')

@section('content')

<main class="zentic-content">

    <div class="page-header">
        <div>
            <h1 class="page-title pb-2">Manage FAQs</h1>

            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"> <a href="{{ route('backend.dashboard') }}"> <i class="icon-house"></i></a></li>
                    <li class="breadcrumb-item active">Manage FAQs</li>
                    <li class="breadcrumb-item active">Add FAQs</li>
                </ol>
            </nav>
        </div>

        <div class="page-header-actions">
            <a href="{{ route('backend.add-faq') }}"
                class="btn-zentic btn-ai btn-sm">
                <i class="icon-plus"></i> Add FAQ
            </a>
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
        @foreach($errors->all() as $error)
        <div>{{ $error }}</div>
        @endforeach
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
                            <th>Answer</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($faqs as $key => $faq)
                        <tr>
                            <td class="mono fw-600">{{ $key + 1 }}</td>
                            <td>{{ $faq->category->faq_cat_name ?? 'N/A' }}</td>
                            <td>{{ $faq->question }}</td>
                            <td>{{ \Illuminate\Support\Str::limit(strip_tags($faq->answer), 100) }}</td>
                            <td>
                                <a href="{{ route('backend.view-faq', $faq->id) }}"><button class="btn-zentic btn-warning btn-icon"><i class="icon-eye"></i></button></i></a>
                                <a href="{{ route('backend.edit-faq', $faq->id) }}"><button class="btn-zentic btn-success btn-icon"><i class="icon-pencil"></i></button></a>
                                <button type="button" class="btn-zentic btn-danger btn-icon" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="{{ $faq->id }}"><i class="icon-trash-2"></i> </button>
                            </td>
                        </tr>

                        @empty
                        <tr>
                            <td colspan="5" class="text-center"> No FAQs Found. </td>
                        </tr>
                        @endforelse

                    </tbody>

                </table>

            </div>
        </div>
    </div>

</main>

<!-- Delete Modal -->

<div class="modal fade" id="deleteModal" tabindex="-1"
    aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Confirm Delete</h5>

                <button type="button"
                    class="btn-close"
                    data-bs-dismiss="modal">
                </button>
            </div>

            <div class="modal-body text-center">

                <i class="icon-trash-2"
                    style="font-size:40px;color:red;">
                </i>

                <h5 class="mt-3">Are you sure?</h5>

                <p>
                    Are you sure you want to delete this FAQ?
                    This action cannot be undone.
                </p>

            </div>

            <div class="modal-footer justify-content-center">

                <button type="button"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal">
                    Cancel
                </button>

                <form id="deleteFaqForm" method="POST">
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

        const deleteModal = document.getElementById('deleteModal');

        deleteModal.addEventListener('show.bs.modal', function(event) {

            const button = event.relatedTarget;
            const id = button.getAttribute('data-id');

            document.getElementById('deleteFaqForm').action =
                "{{ url('admin/delete-faq') }}/" + id;

        });

    });
</script>

@endsection