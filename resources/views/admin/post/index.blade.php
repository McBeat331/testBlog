@extends('admin.layouts.app')

@section('content')
    <div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Posts</h4>
              <p class="card-category"> Here you can manage posts</p>
            </div>
            <div class="card-body">
                              <div class="row">
                <div class="col-12 text-right">
                  <a href="{{route('dashboard.post.create')}}" class="btn btn-sm btn-primary">Add post</a>
                </div>
              </div>
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <tr>
                        <th>
                            Title
                        </th>
                        <th>
                            Content
                        </th>
                        <th>
                            Image
                        </th>
                        <th>
                            Time to read
                        </th>
                        <th>
                            Author
                        </th>
                        <th>
                            Category
                        </th>
                        <th class="text-right">
                            Actions
                        </th>
                    </tr>
                  </thead>
                  <tbody>
                  @if(isset($enties))
                    @foreach ($enties as $entry)
                      <tr>
                        <td width="20%">
                          {{ $entry->title }}
                        </td>
                        <td width="30%">
                          {{ Str::words($entry->content, 20, $end='.......')}}
                        </td>
                          <td>
                              <img src="{{ $entry->getMedia('post')[0]->getUrl('smallThumb') }}"/>
                          </td>
                          <td>
                              {{ $entry->time_read }}
                          </td>
                          <td>
                              {{ $entry->author->name }}
                          </td>
                          <td>
                              {{ $entry->category->title }}
                          </td>
                        <td class="td-actions text-right" width="10%">
                            <a rel="tooltip" class="btn btn-warning btn-link" href="{{ route('dashboard.post.edit', $entry->id) }}" data-original-title="" title="">
                              <i class="material-icons">edit</i>
                              <div class="ripple-container"></div>
                            </a>
                          <form method="POST" action="{{route('dashboard.post.destroy', $entry->id)}}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                              <button type="submit" class="btn btn-danger btn-link">
                                  <i class="material-icons">delete_forever</i>
                                  <div class="ripple-container"></div>
                              </button>
                          </form>
                        </td>
                      </tr>
                    @endforeach
                  @endif
                  </tbody>
                </table>

                {{ $enties->links('vendor.pagination.admin') }}
              </div>
            </div>
          </div>

      </div>
    </div>
  </div>
</div>
@endsection