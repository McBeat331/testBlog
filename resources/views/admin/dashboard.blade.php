@extends('admin.layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">library_books</i>
              </div>
              <p class="card-category">Count Posts</p>
              <h3 class="card-title">{{ $countPosts }}</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons text-danger">local_offer</i>
                <a href="{{ route('dashboard.user.index') }}">Full list posts...</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">people</i>
              </div>
              <p class="card-category">Count Users</p>
              <h3 class="card-title">{{ $countUsers }}</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">local_offer</i>
                <a href="{{ route('dashboard.user.index') }}">Full list users...</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        @if(isset($lastPosts))
          <div class="col-lg-8 col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Last Posts</h4>
              </div>
              <div class="card-body table-responsive">
                <table class="table table-hover">
                  <thead class="text-warning">
                  <th>ID</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th>Author</th>
                  <th>Category</th>
                  </thead>
                  <tbody>
                  @foreach ($lastPosts as $entry)
                    <tr>
                      <td>{{ $entry->id }}</td>
                      <td><a href="{{ route('dashboard.post.edit', $entry->id) }}">{{ $entry->title }}</a></td>
                      <td>{{ Str::words($entry->content, 20, $end='.......') }}</td>
                      <td><img src="{{ $entry->getMedia('post')[0]->getUrl('smallThumb') }}"/></td>
                      <td>{{ $entry->author->name }}</td>
                      <td>{{ $entry->category->title }}</td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        @endif
        @if(isset($lastUsers))
          <div class="col-lg-4 col-md-12">
            <div class="card">
              <div class="card-header card-header-warning">
                <h4 class="card-title">Last Users</h4>
              </div>
              <div class="card-body table-responsive">
                <table class="table table-hover">
                  <thead class="text-warning">
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  </thead>
                  <tbody>
                    @foreach ($lastUsers as $entry)
                      <tr>
                        <td>{{ $entry->id }}</td>
                        <td><a href="{{ route('dashboard.user.edit', $entry->id) }}">{{ $entry->name }}</a></td>
                        <td>{{ $entry->email }}</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        @endif
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush