@extends('admin.layout')

@section('title', 'Edit Service')

@section('content')
<style>
.form-container {
    background: #1a1a1a;
    border: 1px solid #2a2a2a;
    border-radius: 8px;
    padding: 2rem;
}

.form-label {
    color: rgba(255, 255, 255, 0.8);
    font-weight: 500;
    margin-bottom: 0.5rem;
    display: block;
}

.form-control, .form-select {
    background: #2a2a2a;
    border: 1px solid #3a3a3a;
    color: #ffffff;
    border-radius: 6px;
    padding: 0.75rem;
    transition: all 0.3s ease;
}

.form-control:focus, .form-select:focus {
    background: #2a2a2a;
    border-color: #4a4a4a;
    color: #ffffff;
    box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.1);
    outline: none;
}

.form-control::placeholder {
    color: rgba(255, 255, 255, 0.4);
}

.form-textarea {
    min-height: 150px;
    resize: vertical;
}

.image-preview {
    background: #2a2a2a;
    border: 1px solid #3a3a3a;
    border-radius: 8px;
    padding: 1rem;
    text-align: center;
    color: rgba(255, 255, 255, 0.6);
    margin-top: 1rem;
}

.image-preview img {
    max-width: 200px;
    max-height: 200px;
    border-radius: 8px;
    border: 1px solid #2a2a2a;
}

.current-image {
    margin-bottom: 1rem;
}

.current-image img {
    max-width: 200px;
    max-height: 200px;
    border-radius: 8px;
    border: 1px solid #2a2a2a;
}

.switch-container {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.form-switch {
    position: relative;
    display: inline-block;
    width: 50px;
    height: 24px;
}

.form-switch input {
    opacity: 0;
    width: 0;
    height: 0;
}

.slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #3a3a3a;
    transition: .4s;
    border-radius: 24px;
}

.slider:before {
    position: absolute;
    content: "";
    height: 18px;
    width: 18px;
    left: 3px;
    bottom: 3px;
    background-color: white;
    transition: .4s;
    border-radius: 50%;
}

input:checked + .slider {
    background-color: #4a90e2;
}

input:checked + .slider:before {
    transform: translateX(26px);
}

.btn-primary {
    background: linear-gradient(135deg, #4a90e2 0%, #357abd 100%);
    border: none;
    border-radius: 6px;
    padding: 0.75rem 2rem;
    font-weight: 500;
    color: #ffffff;
    transition: all 0.3s ease;
}

.btn-primary:hover {
    background: linear-gradient(135deg, #357abd 0%, #2a6aa1 100%);
    transform: translateY(-1px);
    box-shadow: 0 4px 15px rgba(74, 144, 226, 0.3);
}

.btn-secondary {
    background: #2a2a2a;
    border: 1px solid #3a3a3a;
    color: rgba(255, 255, 255, 0.8);
    border-radius: 6px;
    padding: 0.75rem 2rem;
    font-weight: 500;
    transition: all 0.3s ease;
}

.btn-secondary:hover {
    background: #3a3a3a;
    color: #ffffff;
    transform: translateY(-1px);
}

.btn-danger {
    background: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%);
    border: none;
    border-radius: 6px;
    padding: 0.75rem 2rem;
    font-weight: 500;
    color: #ffffff;
    transition: all 0.3s ease;
}

.btn-danger:hover {
    background: linear-gradient(135deg, #c0392b 0%, #a93226 100%);
    transform: translateY(-1px);
    box-shadow: 0 4px 15px rgba(231, 76, 60, 0.3);
}

.required-star {
    color: #ff6b6b;
}
</style>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom" style="border-color: #2a2a2a !important;">
    <h1 class="h2" style="color: #ffffff; font-weight: 300;">Edit Service</h1>
    <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left me-2"></i> Back to Services
    </a>
</div>

<div class="form-container">
    <form method="POST" action="{{ route('admin.services.update', $service) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="title_en" class="form-label">
                        Title (English) <span class="required-star">*</span>
                    </label>
                    <input type="text" class="form-control" id="title_en" name="title_en" 
                           value="{{ old('title_en', $service->title_en) }}" required>
                    @error('title_en')
                        <div class="text-danger" style="color: #ff6b6b; font-size: 0.875rem; margin-top: 0.25rem;">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="title_lv" class="form-label">
                        Title (Latvian) <span class="required-star">*</span>
                    </label>
                    <input type="text" class="form-control" id="title_lv" name="title_lv" 
                           value="{{ old('title_lv', $service->title_lv) }}" required>
                    @error('title_lv')
                        <div class="text-danger" style="color: #ff6b6b; font-size: 0.875rem; margin-top: 0.25rem;">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="description_en" class="form-label">Description (English)</label>
                    <textarea class="form-control form-textarea" id="description_en" name="description_en" 
                              placeholder="Brief description of the service">{{ old('description_en', $service->description_en) }}</textarea>
                    @error('description_en')
                        <div class="text-danger" style="color: #ff6b6b; font-size: 0.875rem; margin-top: 0.25rem;">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="description_lv" class="form-label">Description (Latvian)</label>
                    <textarea class="form-control form-textarea" id="description_lv" name="description_lv" 
                              placeholder="Pakalpojuma īss apraksts">{{ old('description_lv', $service->description_lv) }}</textarea>
                    @error('description_lv')
                        <div class="text-danger" style="color: #ff6b6b; font-size: 0.875rem; margin-top: 0.25rem;">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="content_en" class="form-label">
                        Content (English) <span class="required-star">*</span>
                    </label>
                    <textarea class="form-control form-textarea" id="content_en" name="content_en" 
                              required>{{ old('content_en', $service->content_en) }}</textarea>
                    @error('content_en')
                        <div class="text-danger" style="color: #ff6b6b; font-size: 0.875rem; margin-top: 0.25rem;">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="content_lv" class="form-label">
                        Content (Latvian) <span class="required-star">*</span>
                    </label>
                    <textarea class="form-control form-textarea" id="content_lv" name="content_lv" 
                              required>{{ old('content_lv', $service->content_lv) }}</textarea>
                    @error('content_lv')
                        <div class="text-danger" style="color: #ff6b6b; font-size: 0.875rem; margin-top: 0.25rem;">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price" 
                           placeholder="e.g., €99/month or From €500" value="{{ old('price', $service->price) }}">
                    @error('price')
                        <div class="text-danger" style="color: #ff6b6b; font-size: 0.875rem; margin-top: 0.25rem;">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="image" class="form-label">Service Image</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*">
                    
                    @if($service->image)
                        <div class="current-image">
                            <label class="form-label" style="font-size: 0.875rem; color: rgba(255, 255, 255, 0.6);">
                                Current Image:
                            </label>
                            <img src="{{ asset('assets/images/services/' . $service->image) }}" alt="Current image">
                        </div>
                    @endif
                    
                    <div class="image-preview" id="imagePreview">
                        <i class="fas fa-image fa-2x mb-2"></i>
                        <p>No new image selected</p>
                    </div>
                    @error('image')
                        <div class="text-danger" style="color: #ff6b6b; font-size: 0.875rem; margin-top: 0.25rem;">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="mb-3">
                    <div class="switch-container">
                        <label class="form-label" style="margin-bottom: 0;">Published</label>
                        <label class="form-switch">
                            <input type="checkbox" name="published" value="1" {{ old('published', $service->published) ? 'checked' : '' }}>
                            <span class="slider"></span>
                        </label>
                        <span style="color: rgba(255, 255, 255, 0.6); font-size: 0.875rem;">
                            Make this service visible on the website
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-between mt-4">
            <a href="{{ route('admin.services.index') }}" class="btn btn-secondary me-2">
                <i class="fas fa-times me-2"></i> Cancel
            </a>
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save me-2"></i> Update Service
            </button>
        </div>
    </form>
    
    <div class="mt-3">
        
            <p style="margin-bottom: 0;">Deleting this service is permanent and cannot be undone.</p>
            <form method="POST" action="{{ route('admin.services.destroy', $service) }}" onsubmit="return confirm('Are you sure you want to delete this service? This action cannot be undone!')" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">
                    <i class="fas fa-trash me-1"></i> Delete Service Permanently
                </button>
            </form>
    </div>
</div>

<script>
document.getElementById('image').addEventListener('change', function(e) {
    const file = e.target.files[0];
    const preview = document.getElementById('imagePreview');
    
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.innerHTML = '<img src="' + e.target.result + '" alt="Preview">';
        }
        reader.readAsDataURL(file);
    } else {
        preview.innerHTML = '<i class="fas fa-image fa-2x mb-2"></i><p>No new image selected</p>';
    }
});
</script>
@endsection
