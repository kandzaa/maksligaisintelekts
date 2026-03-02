@extends('admin.layout')

@section('title', 'Create News')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create News Article</h1>
    <a href="{{ route('admin.news.index') }}" class="btn btn-outline-secondary">
        <i class="fas fa-arrow-left me-2"></i> Back to List
    </a>
</div>

<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('admin.news.store') }}" enctype="multipart/form-data" id="newsForm">
                    @csrf
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="title_en" class="form-label">Title (English) *</label>
                                <input type="text" class="form-control" id="title_en" name="title_en" value="{{ old('title_en') }}" required onkeyup="updatePreview()">
                                @error('title_en')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="title_lv" class="form-label">Title (Latvian) *</label>
                                <input type="text" class="form-control" id="title_lv" name="title_lv" value="{{ old('title_lv') }}" required onkeyup="updatePreview()">
                                @error('title_lv')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*" onchange="previewImage(event)">
                        <div class="form-text">Maximum file size: 2MB. Allowed formats: JPEG, PNG, JPG, GIF</div>
                        @error('image')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="content_en" class="form-label">Content (English) *</label>
                                <textarea class="form-control" id="content_en" name="content_en" rows="10" required onkeyup="updatePreview()">{{ old('content_en') }}</textarea>
                                @error('content_en')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="content_lv" class="form-label">Content (Latvian) *</label>
                                <textarea class="form-control" id="content_lv" name="content_lv" rows="10" required>{{ old('content_lv') }}</textarea>
                                @error('content_lv')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="published" name="published" value="1" {{ old('published') ? 'checked' : '' }}>
                            <label class="form-check-label" for="published">
                                Published (visible on website)
                            </label>
                        </div>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-2"></i> Create News
                        </button>
                        <a href="{{ route('admin.news.index') }}" class="btn btn-outline-secondary">
                            Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Live Preview</h5>
            </div>
            <div class="card-body">
                <div class="post-box">
                    <div class="post-img-wrapper">
                        <img id="previewImage" class="parallax-img post-img" src="{{ asset('assets/images/blog/post-images/1.jpg') }}" alt="Preview"/>
                        <span class="post-date">
                            <span class="day" id="previewDay">{{ now()->format('d') }}</span>
                            {{ now()->format('M') }} {{ now()->format('Y') }}
                        </span>
                    </div>
                    <div class="post-summary">
                        <div class="post-text">
                            <h2 class="post-title" id="previewTitle">Enter title to see preview...</h2>
                            <p class="post-excerpt" id="previewExcerpt">Start typing content to see preview...</p>
                            <a href="#" class="read-more">read more<i class="bi bi-arrow-right icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.post-box {
    background: #2a2a2a;
    border-radius: 8px;
    overflow: hidden;
    margin-bottom: 1rem;
}

.post-img-wrapper {
    position: relative;
    height: 200px;
    overflow: hidden;
}

.post-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.post-date {
    position: absolute;
    top: 10px;
    right: 10px;
    background: rgba(0, 0, 0, 0.8);
    color: white;
    padding: 5px 10px;
    border-radius: 4px;
    font-size: 0.8rem;
}

.post-summary {
    padding: 1rem;
}

.post-title {
    color: #ffffff;
    font-size: 1.1rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
    line-height: 1.3;
}

.post-excerpt {
    color: rgba(255, 255, 255, 0.7);
    font-size: 0.9rem;
    margin-bottom: 1rem;
    line-height: 1.4;
}

.read-more {
    color: #ffffff;
    text-decoration: none;
    font-size: 0.8rem;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.read-more:hover {
    color: #cccccc;
}
</style>

<script>
function updatePreview() {
    const titleEn = document.getElementById('title_en').value;
    const contentEn = document.getElementById('content_en').value;
    
    // Update title
    const previewTitle = document.getElementById('previewTitle');
    previewTitle.textContent = titleEn || 'Enter title to see preview...';
    
    // Update excerpt (first 100 characters of content)
    const previewExcerpt = document.getElementById('previewExcerpt');
    const excerpt = contentEn.length > 100 ? contentEn.substring(0, 100) + '...' : contentEn;
    previewExcerpt.textContent = excerpt || 'Start typing content to see preview...';
}

function previewImage(event) {
    const file = event.target.files[0];
    const previewImage = document.getElementById('previewImage');
    
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            previewImage.src = e.target.result;
        }
        reader.readAsDataURL(file);
    }
}

// Initialize preview on page load
document.addEventListener('DOMContentLoaded', function() {
    updatePreview();
});
</script>
@endsection
