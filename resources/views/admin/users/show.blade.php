@extends('admin.dashboard.app')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <a href="{{route('admin.users.index')}}">
                    <button type="button" class="btn-sm btn-primary btn-sm float-right">
                      <i class="fa fa-reply"></i> Back</button></a>

                <h5 class="card-header"><i class="zmdi zmdi-account-calendar"></i>
                    Details To {{$user->name}}</h5>

                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Roles</th>
                          </tr>
                        </thead>
                        <tbody>
                               <tr>
                                <th scope="row">{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td> {{implode(', ',$user->roles()->get()->pluck('name')->toArray())}}</td>
                               </tr>
                            </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
@endsection
