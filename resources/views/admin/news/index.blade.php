@extends('admin.layout')

@section('title', 'Manage News')

@section('content')
<style>
.news-table {
    background: #1a1a1a;
    border-radius: 8px;
    overflow: hidden;
    border: 1px solid #2a2a2a;
}

.news-table .table {
    margin: 0;
    background: transparent;
}

.news-table .table thead th {
    background: #1f1f1f;
    color: rgba(255, 255, 255, 0.9);
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 0.75rem;
    border: none;
    padding: 1rem;
}

.news-table .table tbody tr {
    background: #1a1a1a !important;
    border-bottom: 1px solid #2a2a2a;
    transition: all 0.2s ease;
}

.news-table .table tbody tr:hover {
    background: #252525 !important;
    transform: translateY(-1px);
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
}

.news-table .table tbody tr:last-child {
    border-bottom: none;
}

.news-table .table td {
    padding: 1rem;
    vertical-align: middle;
    border: none !important;
    color: rgba(255, 255, 255, 0.8);
    background: transparent !important;
}

.news-table .table td:first-child {
    padding-left: 1.5rem;
}

.news-table .table td:last-child {
    padding-right: 1.5rem;
}

.news-title {
    font-weight: 500;
    color: rgba(255, 255, 255, 0.9);
    margin-bottom: 0.25rem;
}

.news-meta {
    font-size: 0.8rem;
    color: rgba(255, 255, 255, 0.5);
}

.status-badge {
    padding: 0.4rem 0.8rem;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.status-published {
    background: rgba(76, 175, 80, 0.2);
    color: #4CAF50;
    border: 1px solid rgba(76, 175, 80, 0.3);
}

.status-draft {
    background: rgba(255, 255, 255, 0.1);
    color: rgba(255, 255, 255, 0.6);
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.action-buttons {
    display: flex;
    gap: 0.5rem;
}

.action-buttons .btn {
    padding: 0.5rem 0.75rem;
    border-radius: 6px;
    font-size: 0.8rem;
    transition: all 0.2s ease;
}

.action-buttons .btn-outline-primary {
    border-color: rgba(255, 255, 255, 0.2);
    color: rgba(255, 255, 255, 0.8);
    background: rgba(255, 255, 255, 0.05);
}

.action-buttons .btn-outline-primary:hover {
    background: rgba(255, 255, 255, 0.15);
    border-color: rgba(255, 255, 255, 0.4);
    color: #ffffff;
    transform: translateY(-1px);
}

.action-buttons .btn-outline-danger {
    border-color: rgba(244, 67, 54, 0.3);
    color: rgba(244, 67, 54, 0.8);
    background: rgba(244, 67, 54, 0.05);
}

.action-buttons .btn-outline-danger:hover {
    background: rgba(244, 67, 54, 0.15);
    border-color: rgba(244, 67, 54, 0.5);
    color: #ff6b6b;
    transform: translateY(-1px);
}

.image-placeholder {
    background: #2a2a2a;
    border: 1px solid #3a3a3a;
    color: rgba(255, 255, 255, 0.4);
}

.empty-state {
    background: #1a1a1a;
    border: 1px solid #2a2a2a;
    border-radius: 8px;
    padding: 3rem;
}

.empty-state i {
    color: rgba(255, 255, 255, 0.3);
}

.empty-state h4 {
    color: rgba(255, 255, 255, 0.6);
}

.empty-state p {
    color: rgba(255, 255, 255, 0.4);
}
</style>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom" style="border-color: #2a2a2a !important;">
    <h1 class="h2" style="color: #ffffff; font-weight: 300;">News & Articles</h1>
    <a href="{{ route('admin.news.create') }}" class="btn btn-primary" style="background: linear-gradient(135deg, #4a90e2 0%, #357abd 100%); border: none; border-radius: 6px; padding: 0.6rem 1.5rem; font-weight: 500;">
        <i class="fas fa-plus me-2"></i> Add New
    </a>
</div>

<div class="news-table">
    @if($news->count() > 0)
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($news as $item)
                        <tr>
                            <td>
                                @if($item->image)
                                    <img src="{{ asset('assets/images/news/' . $item->image) }}" alt="{{ $item->title_en }}" style="width: 60px; height: 60px; object-fit: cover; border-radius: 8px; border: 1px solid #2a2a2a;">
                                @else
                                    <div class="image-placeholder d-inline-block" style="width: 60px; height: 60px; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                        <i class="fas fa-image"></i>
                                    </div>
                                @endif
                            </td>
                            <td>
                                <div class="news-title">{{ Str::limit($item->title_en, 50) }}</div>
                                <div class="news-meta">{{ Str::limit($item->title_lv, 40) }}</div>
                            </td>
                            <td>
                                @if($item->published)
                                    <span class="status-badge status-published">Published</span>
                                @else
                                    <span class="status-badge status-draft">Draft</span>
                                @endif
                            </td>
                            <td>
                                <div style="color: rgba(255, 255, 255, 0.7); font-size: 0.9rem;">
                                    {{ $item->created_at->format('M d, Y') }}
                                </div>
                                <div class="news-meta">
                                    {{ $item->created_at->format('H:i') }}
                                </div>
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <a href="{{ route('admin.news.edit', $item) }}" class="btn btn-sm btn-outline-primary" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form method="POST" action="{{ route('admin.news.destroy', $item) }}" onsubmit="return confirm('Are you sure you want to delete this news article?')" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <div class="d-flex justify-content-center mt-4 p-3" style="background: #1f1f1f; border-top: 1px solid #2a2a2a;">
            {{ $news->links() }}
        </div>
    @else
        <div class="empty-state text-center">
            <i class="fas fa-newspaper fa-4x mb-3"></i>
            <h4>No news articles found</h4>
            <p class="mb-4">Start by creating your first news article.</p>
            <a href="{{ route('admin.news.create') }}" class="btn btn-primary" style="background: linear-gradient(135deg, #4a90e2 0%, #357abd 100%); border: none; border-radius: 6px; padding: 0.6rem 1.5rem; font-weight: 500;">
                <i class="fas fa-plus me-2"></i> Add New News
            </a>
        </div>
    @endif
</div>
@endsection
