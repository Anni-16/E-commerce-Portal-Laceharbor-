@extends('backend.layouts.master')

@section('content')

<main class="zentic-content">
    <div class="page-header">
        <div>
            <h1 class="page-title pb-2">View FAQ</h1>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}"> <i class="icon-house"></i> </a></li>
                    <li class="breadcrumb-item"><a href="{{ route('backend.manage-faq') }}"> Manage FAQs</a></li>
                    <li class="breadcrumb-item active">View FAQ</li>
                </ol>
            </nav>
        </div>

    </div>

    <div class="zentic-card">
        <div class="zentic-card-body">
            <div class="mb-4">
                <h5>Category Name</h5>
                <p>
                    {{ $faq->category->faq_cat_name ?? 'N/A' }}
                </p>
            </div>

            <div class="mb-4">
                <h5>Question</h5>
                <p>{{ $faq->question }}</p>
            </div>

            <div class="mb-4">
                <h5>Answer</h5>

                <div>
                    {!! nl2br(e($faq->answer)) !!}
                </div>
            </div>

            <!-- Buttons -->
            <div class="row">
                <div class="col-2">
                    <a href="{{ route('backend.edit-faq', $faq->id) }}" class="btn-zentic btn-primary"> Edit FAQ </a>
                </div>
                <div class="col-2">
                    <a href="{{ route('backend.manage-faq') }}" class="btn-zentic btn-outline"> Cancel </a>
                </div>
            </div>

        </div>
    </div>

</main>

@endsection