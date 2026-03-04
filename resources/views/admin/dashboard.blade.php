@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
<style>
.dashboard-table {
    background: #1a1a1a;
    border-radius: 8px;
    overflow: hidden;
    border: 1px solid #2a2a2a;
}

.dashboard-table .table {
    margin: 0;
    background: transparent;
}

.dashboard-table .table thead th {
    background: #1f1f1f;
    color: rgba(255, 255, 255, 0.9);
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 0.75rem;
    border: none;
    padding: 1rem;
}

.dashboard-table .table tbody tr {
    background: #1a1a1a !important;
    border-bottom: 1px solid #2a2a2a;
    transition: all 0.2s ease;
}

.dashboard-table .table tbody tr:hover {
    background: #252525 !important;
    transform: translateY(-1px);
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
}

.dashboard-table .table tbody tr:last-child {
    border-bottom: none;
}

.dashboard-table .table td {
    padding: 1rem;
    vertical-align: middle;
    border: none !important;
    color: rgba(255, 255, 255, 0.8);
    background: transparent !important;
}

.dashboard-status-badge {
    padding: 0.4rem 0.8rem;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.dashboard-status-published {
    background: rgba(76, 175, 80, 0.2);
    color: #4CAF50;
    border: 1px solid rgba(76, 175, 80, 0.3);
}

.dashboard-status-draft {
    background: rgba(255, 255, 255, 0.1);
    color: rgba(255, 255, 255, 0.6);
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.dashboard-action-btn {
    padding: 0.5rem 0.75rem;
    border-radius: 6px;
    font-size: 0.8rem;
    transition: all 0.2s ease;
    border-color: rgba(255, 255, 255, 0.2);
    color: rgba(255, 255, 255, 0.8);
    background: rgba(255, 255, 255, 0.05);
}

.dashboard-action-btn:hover {
    background: rgba(255, 255, 255, 0.15);
    border-color: rgba(255, 255, 255, 0.4);
    color: #ffffff;
    transform: translateY(-1px);
}
</style>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
</div>

<div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card stat-card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col">
                        <h5 class="card-title mb-0">Total News</h5>
                        <p class="card-text display-4">{{ $totalNews }}</p>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-newspaper fa-2x opacity-75"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card stat-card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col">
                        <h5 class="card-title mb-0">Services</h5>
                        <p class="card-text display-4">{{ $totalServices }}</p>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-cogs fa-2x opacity-75"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card stat-card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col">
                        <h5 class="card-title mb-0">Developments</h5>
                        <p class="card-text display-4">{{ $totalDevelopments }}</p>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-code fa-2x opacity-75"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>




<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Recent News</h5>
            </div>
            <div class="card-body">
                @if($recentNews = App\Models\News::latest()->take(5)->get())
                    <div class="dashboard-table">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th>Created</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($recentNews as $news)
                                        <tr>
                                            <td>{{ Str::limit($news->title_en, 50) }}</td>
                                            <td>
                                                @if($news->published)
                                                    <span class="dashboard-status-badge dashboard-status-published">Published</span>
                                                @else
                                                    <span class="dashboard-status-badge dashboard-status-draft">Draft</span>
                                                @endif
                                            </td>
                                            <td>{{ $news->created_at->format('M d, Y') }}</td>
                                            <td>
                                                <a href="{{ route('admin.news.edit', $news) }}" class="btn btn-sm dashboard-action-btn">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @else
                    <p class="text-muted">No news articles found.</p>
                @endif
            </div>
        </div>
        
        <div class="card mt-4">
            <div class="card-header">
                <h5 class="card-title mb-0">Recent Services</h5>
            </div>
            <div class="card-body">
                @if($recentServices = App\Models\Service::latest()->take(5)->get())
                    <div class="dashboard-table">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($recentServices as $service)
                                        <tr>
                                            <td>{{ Str::limit($service->title_en, 50) }}</td>
                                            <td>
                                                @if($service->price)
                                                    <span style="color: #00d4ff; font-weight: 600;">{{ $service->price }}</span>
                                                @else
                                                    <span style="color: rgba(255, 255, 255, 0.4);">-</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($service->published)
                                                    <span class="dashboard-status-badge dashboard-status-published">Published</span>
                                                @else
                                                    <span class="dashboard-status-badge dashboard-status-draft">Draft</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.services.edit', $service) }}" class="btn btn-sm dashboard-action-btn">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @else
                    <p class="text-muted">No services found.</p>
                @endif
            </div>
        </div>
        
        <div class="card mt-4">
            <div class="card-header">
                <h5 class="card-title mb-0">Recent Developments</h5>
            </div>
            <div class="card-body">
                @if($recentDevelopments = App\Models\Development::latest()->take(5)->get())
                    <div class="dashboard-table">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th>Order</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($recentDevelopments as $development)
                                        <tr>
                                            <td>{{ Str::limit($development->title_en, 50) }}</td>
                                            <td>
                                                @if($development->published)
                                                    <span class="dashboard-status-badge dashboard-status-published">Published</span>
                                                @else
                                                    <span class="dashboard-status-badge dashboard-status-draft">Draft</span>
                                                @endif
                                            </td>
                                            <td>
                                                <span style="color: rgba(255, 255, 255, 0.7);">{{ $development->order ?? 0 }}</span>
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.developments.edit', $development) }}" class="btn btn-sm dashboard-action-btn">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @else
                    <p class="text-muted">No developments found.</p>
                @endif
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Quick Actions</h5>
            </div>
            <div class="card-body">
                <div class="d-grid gap-2">
                    <a href="{{ route('admin.news.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus me-2"></i> Add News
                    </a>
                    <a href="{{ route('admin.services.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus me-2"></i> Add New Service
                    </a>
                    <a href="{{ route('admin.developments.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus me-2"></i> Add Development
                    </a>
                    <a href="{{ route('admin.news.index') }}" class="btn btn-outline-secondary">
                        <i class="fas fa-list me-2"></i> Manage All News
                    </a>
                    <a href="{{ route('admin.services.index') }}" class="btn btn-outline-secondary">
                        <i class="fas fa-list me-2"></i> Manage All Services
                    </a>
                    <a href="{{ route('admin.developments.index') }}" class="btn btn-outline-secondary">
                        <i class="fas fa-list me-2"></i> Manage All Developments
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
