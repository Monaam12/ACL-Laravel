@extends('admin.dashboard.app')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="card">
@can('create-role')
                    <a href="{{route('admin.roles.create')}}">
                        <button type="button" class="btn-sm btn-primary float-right"><i class="fa fa-plus-circle"></i> Create New Role</button>
                    </a>
@endcan
                <h4 class="card-header"><i class="zmdi zmdi-account-calendar"></i> ROLE MANAGEMENT</h4>

                <div class="card-body">

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Permissions</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                            <tr>
                                <th scope="row">{{$role->id}}</th>
                                <td>
@can('list-role')
                                <a href="{{route('admin.roles.show',$role->id)}}">{{$role->name}}</a>
@endcan
                                </td>
                                <td>{{implode(', ',$role->permissions()->get()->pluck('name')->toArray())}}</td>
                                <td>
                                 <div class="table-data-feature">
@can('edit-role')
                                 <a href="{{route('admin.roles.edit',$role->id)}}">
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit"><i class="zmdi zmdi-edit"></i></button>
                                 </a>
@endcan
@can('delete-role')
                                 <form action="{{route('admin.roles.destroy',$role)}}" method="POST" class="float-left">
                                    @method('DELETE')
                                    @csrf
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete"><i class="zmdi zmdi-delete"></i></button>
                                 </form>
@endcan
                                 </div>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
    {{ $roles->links() }}
@endsection
