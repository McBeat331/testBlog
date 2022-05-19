@extends('admin.layouts.app')

@section('content')
    <div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Users</h4>
              <p class="card-category"> Here you can manage users</p>
            </div>
            <div class="card-body">
                              <div class="row">
                <div class="col-12 text-right">
                  <a href="{{route('dashboard.user.create')}}" class="btn btn-sm btn-primary">Add user</a>
                </div>
              </div>
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <tr><th>
                        Name
                    </th>
                    <th>
                      Email
                    </th>
                    <th class="text-right">
                      Actions
                    </th>
                  </tr></thead>
                  <tbody>
                  @if(isset($enties))
                    @foreach ($enties as $entry)
                      <tr>
                        <td>
                          {{ $entry->name }}
                        </td>
                        <td>
                          {{ $entry->email }}
                        </td>
                        <td class="td-actions text-right">
                            <a rel="tooltip" class="btn btn-warning btn-link" href="{{ route('dashboard.user.edit', $entry->id) }}" data-original-title="" title="">
                              <i class="material-icons">edit</i>
                              <div class="ripple-container"></div>
                            </a>
                          <form method="POST" action="{{route('dashboard.user.destroy', $entry->id)}}">
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