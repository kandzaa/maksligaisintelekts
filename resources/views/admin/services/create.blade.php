@extends('admin.layout')

@section('title', 'Create Service')

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

.card-header {
    background: #1f1f1f;
    border-bottom: 1px solid #2a2a2a;
    color: #ffffff;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 0.9rem;
    border-radius: 8px 8px 0 0;
}

.required-star {
    color: #ff6b6b;
}
</style>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom" style="border-color: #2a2a2a !important;">
    <h1 class="h2" style="color: #ffffff; font-weight: 300;">Create Service</h1>
    <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left me-2"></i> Back to Services
    </a>
</div>

<div class="form-container">
    <div class="row">
        <div class="col-lg-8">
            <form method="POST" action="{{ route('admin.services.store') }}" enctype="multipart/form-data">
                @csrf
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="title_en" class="form-label">
                                Title (English) <span class="required-star">*</span>
                            </label>
                            <input type="text" class="form-control" id="title_en" name="title_en" 
                                   value="{{ old('title_en') }}" required oninput="updatePreview()">
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
                                   value="{{ old('title_lv') }}" required oninput="updatePreview()">
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
                                      placeholder="Brief description of the service" oninput="updatePreview()">{{ old('description_en') }}</textarea>
                            @error('description_en')
                                <div class="text-danger" style="color: #ff6b6b; font-size: 0.875rem; margin-top: 0.25rem;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="description_lv" class="form-label">Description (Latvian)</label>
                            <textarea class="form-control form-textarea" id="description_lv" name="description_lv" 
                                      placeholder="Pakalpojuma īss apraksts" oninput="updatePreview()">{{ old('description_lv') }}</textarea>
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
                                      required oninput="updatePreview()">{{ old('content_en') }}</textarea>
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
                                      required oninput="updatePreview()">{{ old('content_lv') }}</textarea>
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
                                   placeholder="e.g., €99/month or From €500" value="{{ old('price') }}" oninput="updatePreview()">
                            @error('price')
                                <div class="text-danger" style="color: #ff6b6b; font-size: 0.875rem; margin-top: 0.25rem;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="image" class="form-label">Service Image</label>
                            <input type="file" class="form-control" id="image" name="image" accept="image/*">
                            
                            <div class="image-preview" id="imagePreview">
                                <i class="fas fa-image fa-2x mb-2"></i>
                                <p>No image selected</p>
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
                                    <input type="checkbox" name="published" value="1" {{ old('published') ? 'checked' : '' }}>
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
                    <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">
                        <i class="fas fa-times me-2"></i> Cancel
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save me-2"></i> Create Service
                    </button>
                </div>
            </form>
        </div>

        <div class="col-lg-4">
            <div class="preview-container" style="background: #1a1a1a; border: 1px solid #2a2a2a; border-radius: 8px; padding: 1.5rem; position: sticky; top: 20px;">
                <h5 style="color: #ffffff; margin-bottom: 1rem; font-weight: 600;">Live Preview</h5>
                
                <div class="service-preview" style="background: #252525; border-radius: 8px; padding: 1.5rem;">
                    <div class="service-icon mb-3 text-center">
                        <div id="previewImage" style="width: 60px; height: 60px; background: #2a2a2a; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                            <i class="fas fa-cogs" style="color: rgba(255, 255, 255, 0.4); font-size: 24px;"></i>
                        </div>
                    </div>
                    
                    <div class="service-content text-center">
                        <h6 id="previewTitle" style="color: #ffffff; font-weight: 600; margin-bottom: 0.5rem;">Service Title</h6>
                        <p id="previewDescription" style="color: rgba(255, 255, 255, 0.6); font-size: 0.9rem; margin-bottom: 1rem;">Service description will appear here...</p>
                        <div id="previewPrice" style="color: #00d4ff; font-weight: 600; margin-bottom: 1rem; display: none;">Price</div>
                        <div id="previewStatus" style="margin-bottom: 1rem;">
                            <span class="badge" style="background: rgba(255, 255, 255, 0.1); color: rgba(255, 255, 255, 0.6); padding: 0.25rem 0.75rem; border-radius: 12px; font-size: 0.75rem;">Draft</span>
                        </div>
                    </div>
                </div>
                
                <div class="preview-info mt-3">
                    <small style="color: rgba(255, 255, 255, 0.4); font-size: 0.8rem;">
                        <i class="fas fa-info-circle me-1"></i>
                        This is how your service will appear on the website
                    </small>
                </div>
            </div>
        </div>
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
            // Update live preview image
            document.getElementById('previewImage').innerHTML = '<img src="' + e.target.result + '" alt="Preview" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">';
        }
        reader.readAsDataURL(file);
    } else {
        preview.innerHTML = '<i class="fas fa-image fa-2x mb-2"></i><p>No image selected</p>';
        // Reset live preview image
        document.getElementById('previewImage').innerHTML = '<i class="fas fa-cogs" style="color: rgba(255, 255, 255, 0.4); font-size: 24px;"></i>';
    }
});

// Live preview update function
function updatePreview() {
    const titleEn = document.getElementById('title_en').value;
    const titleLv = document.getElementById('title_lv').value;
    const descriptionEn = document.getElementById('description_en').value;
    const descriptionLv = document.getElementById('description_lv').value;
    const price = document.getElementById('price').value;
    const published = document.querySelector('input[name="published"]').checked;
    
    // Update title (prefer English, fallback to Latvian)
    const title = titleEn || titleLv || 'Service Title';
    document.getElementById('previewTitle').textContent = title;
    
    // Update description (prefer English, fallback to Latvian)
    const description = descriptionEn || descriptionLv || 'Service description will appear here...';
    document.getElementById('previewDescription').textContent = description;
    
    // Update price
    const priceElement = document.getElementById('previewPrice');
    if (price) {
        priceElement.textContent = price;
        priceElement.style.display = 'block';
    } else {
        priceElement.style.display = 'none';
    }
    
    // Update status badge
    const statusElement = document.getElementById('previewStatus');
    if (published) {
        statusElement.innerHTML = '<span class="badge" style="background: rgba(76, 175, 80, 0.2); color: #4CAF50; border: 1px solid rgba(76, 175, 80, 0.3); padding: 0.25rem 0.75rem; border-radius: 12px; font-size: 0.75rem;">Published</span>';
    } else {
        statusElement.innerHTML = '<span class="badge" style="background: rgba(255, 255, 255, 0.1); color: rgba(255, 255, 255, 0.6); padding: 0.25rem 0.75rem; border-radius: 12px; font-size: 0.75rem;">Draft</span>';
    }
}

// Handle published checkbox change
document.querySelector('input[name="published"]').addEventListener('change', updatePreview);

// Initialize preview on page load
updatePreview();
</script>
@endsection
