@extends('backend.layouts.master')

@section('content')

<main class="zentic-content">
    <div class="page-header">
        <div>
            <h1 class="page-title pb-2">Edit FAQ</h1>

            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"> <a href="{{ route('backend.dashboard') }}"> <i class="icon-house"></i></a> </li>
                    <li class="breadcrumb-item"> <a href="{{ route('backend.manage-faq') }}"> Manage FAQs </a> </li>
                    <li class="breadcrumb-item active">Edit FAQ</li>
                </ol>
            </nav>
        </div>
    </div>

    @if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
        <div>{{ $error }}</div>
        @endforeach
    </div>
    @endif

    <div class="zentic-card">
        <div class="zentic-card-body">

            <form action="{{ route('backend.update-faq', $faq->id) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">

                    <label class="form-label"> Select Category <span class="required">*</span></label>
                    <select name="category_id" class="form-select" required>
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ old('category_id', $faq->category_id) == $category->id ? 'selected' : '' }}>
                            {{ $category->faq_cat_name }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label"> Question <span class="required">*</span></label>
                    <input name="question" class="form-control" required value="{{  old('question', $faq->question) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label"> Answer <span class="required">*</span></label>
                    <textarea name="answer" class="form-control" rows="6" required>{{ old('answer', $faq->answer) }}</textarea>
                </div>

                <!-- Buttons -->
                <div class="row">
                    <div class="col-2">
                        <button type="submit" class="btn-zentic btn-primary"> Update FAQ </button>
                    </div>

                    <div class="col-2">
                        <a href="{{ route('backend.manage-faq') }}" class="btn-zentic btn-outline"> Cancel </a>
                    </div>
                </div>

            </form>

        </div>
    </div>

</main>

@endsection