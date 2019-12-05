@extends('admin.dashboard.app')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <h4 class="card-header"> <i class="zmdi zmdi-account-calendar"></i> USERS MANAGEMENT</h4>

                <div class="card-body">

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Roles</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($admins as $admin)
                               <tr>
                                <th scope="row">{{$admin->id}}</th>
                                <td><a href="{{route('admin.users.show',$admin->id)}}">{{$admin->name}}</a></td>
                                <td> {{$admin->email}}</td>
                                <td><a href="{{route('admin.roles.show',$role ?? '')}}">{{implode(', ',$admin->roles()->get()->pluck('name')->toArray())}}</a></td>
                                <td>
                                 <div class="table-data-feature">
@can('edit-users')
                                 <a href="{{route('admin.users.edit',$admin->id)}}">
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                        <i class="zmdi zmdi-edit"></i>
                                    </button>
                                 </a>
@endcan
@can('delete-users')
                                <form action="{{route('admin.users.destroy',$admin)}}" method="POST" class="float-left">
                                    @method('DELETE')
                                    @csrf
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="zmdi zmdi-delete"></i>
                                    </button>
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
    {{ $admins->links() }}
@endsection
