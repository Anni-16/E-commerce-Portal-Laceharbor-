@extends('backend.layouts.master')

@section('content')

<main class="zentic-content">
    <div class="page-header">
        <div>
            <h1 class="page-title pb-2">Add FAQs</h1>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}"><i class="icon-house"></i></a> </li>
                    <li class="breadcrumb-item"><a href="{{ route('backend.manage-faq') }}"> Manage FAQs </a> </li>
                    <li class="breadcrumb-item active">Add FAQ</li>
                </ol>
            </nav>
        </div>
    </div>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="zentic-card">
        <div class="zentic-card-body">
            <form action="{{ route('backend.store-faq') }}" method="POST">

                @csrf

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Select Category  <span class="required">*</span></label>
                        <select name="category_id" class="form-select" required>
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                {{ $category->faq_cat_name }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label"> How Many FAQs Do You Want To Add?</label>
                        <input type="number" id="faq_count" class="form-control" min="1" max="100" value="{{ count(old('questions', [['question'=>'', 'answer'=>'']])) }}" required>
                        <small class="text-muted"> Enter the number of FAQs.</small>
                    </div>

                </div>
                <hr>
                <div id="faqFields"></div>

                <div class="row">
                    <div class="col-2">
                        <button type="submit" class="btn-zentic btn-primary"> Save FAQ's </button>
                    </div>

                    <div class="col-2">
                        <a href="{{ route('backend.manage-faq') }}" class="btn-zentic btn-outline"> Cancel </a>
                    </div>
                </div>
            </form>

        </div>
    </div>

</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {

        const faqCount = document.getElementById('faq_count');
        const faqFields = document.getElementById('faqFields');

        let oldQuestions = @json(old('questions', []));

        function generateFields() {

            let count = parseInt(faqCount.value) || 0;

            if (count < 1) count = 1;
            if (count > 100) count = 100;

            faqCount.value = count;

            faqFields.innerHTML = '';

            for (let i = 0; i < count; i++) {

                let question = oldQuestions[i]?.question || '';
                let answer = oldQuestions[i]?.answer || '';

                let html = `
                <div class="zentic-card mb-3">
                    <div class="zentic-card-body">

                        <h5 class="mb-3">FAQ ${i + 1}</h5>

                        <div class="mb-3">
                            <label class="form-label">
                                Question ${i + 1} <span class="required">*</span>
                            </label> 

                            <input
                                name="questions[${i}][question]"
                                class="form-control"
                                placeholder="Enter question"
                                required ${escapeHtml(question)}>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                Answer ${i + 1} <span class="required">*</span>
                            </label>

                            <textarea
                                name="questions[${i}][answer]"
                                class="form-control"
                                rows="5"
                                placeholder="Enter answer"
                                required>${escapeHtml(answer)}</textarea>
                        </div>

                    </div>
                </div>
            `;

                faqFields.insertAdjacentHTML('beforeend', html);
            }
        }

        function escapeHtml(value) {
            return String(value).replace(/[&<>"']/g, function(char) {
                return {
                    '&': '&amp;',
                    '<': '&lt;',
                    '>': '&gt;',
                    '"': '&quot;',
                    "'": '&#039;'
                } [char];
            });
        }

        faqCount.addEventListener('input', generateFields);

        generateFields();

    });
</script>

@endsection