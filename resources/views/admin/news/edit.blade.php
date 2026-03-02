@extends('admin.layout')

@section('title', 'Edit News')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit News Article</h1>
    <a href="{{ route('admin.news.index') }}" class="btn btn-outline-secondary">
        <i class="fas fa-arrow-left me-2"></i> Back to List
    </a>
</div>

<div class="card">
    <div class="card-body">
        <form method="POST" action="{{ route('admin.news.update', $news) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="title_en" class="form-label">Title (English) *</label>
                        <input type="text" class="form-control" id="title_en" name="title_en" value="{{ old('title_en', $news->title_en) }}" required>
                        @error('title_en')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="title_lv" class="form-label">Title (Latvian) *</label>
                        <input type="text" class="form-control" id="title_lv" name="title_lv" value="{{ old('title_lv', $news->title_lv) }}" required>
                        @error('title_lv')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
                <div class="form-text">Maximum file size: 2MB. Allowed formats: JPEG, PNG, JPG, GIF</div>
                
                @if($news->image)
                    <div class="mt-2">
                        <small class="text-muted">Current image:</small><br>
                        <img src="{{ asset('assets/images/news/' . $news->image) }}" alt="{{ $news->title_en }}" style="width: 100px; height: 100px; object-fit: cover; border-radius: 8px;">
                    </div>
                @endif
                
                @error('image')
                    <div class="text-danger small">{{ $message }}</div>
                @enderror
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="content_en" class="form-label">Content (English) *</label>
                        <textarea class="form-control" id="content_en" name="content_en" rows="10" required>{{ old('content_en', $news->content_en) }}</textarea>
                        @error('content_en')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="content_lv" class="form-label">Content (Latvian) *</label>
                        <textarea class="form-control" id="content_lv" name="content_lv" rows="10" required>{{ old('content_lv', $news->content_lv) }}</textarea>
                        @error('content_lv')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="published" name="published" value="1" {{ old('published', $news->published) ? 'checked' : '' }}>
                    <label class="form-check-label" for="published">
                        Published (visible on website)
                    </label>
                </div>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save me-2"></i> Update News
                </button>
                <a href="{{ route('admin.news.index') }}" class="btn btn-outline-secondary">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
