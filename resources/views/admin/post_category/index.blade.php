@extends('admin.layouts.app')

@section('content')
    <div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Category post</h4>
              <p class="card-category"> Here you can manage category post</p>
            </div>
            <div class="card-body">
                              <div class="row">
                <div class="col-12 text-right">
                  <a href="{{route('dashboard.post_category.create')}}" class="btn btn-sm btn-primary">Add category</a>
                </div>
              </div>
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <tr>
                        <th>
                            Title
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
                        <td>
                          {{ $entry->title }}
                        </td>
                        <td class="td-actions text-right">
                            <a rel="tooltip" class="btn btn-warning btn-link" href="{{ route('dashboard.post_category.edit', $entry->id) }}" data-original-title="" title="">
                              <i class="material-icons">edit</i>
                              <div class="ripple-container"></div>
                            </a>
                          <form method="POST" action="{{route('dashboard.post_category.destroy', $entry->id)}}">
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