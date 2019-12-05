@extends('admin.dashboard.app')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                  <a href="{{route('admin.roles.index')}}">
                    <button type="button" class="btn-sm btn-primary btn-sm float-right"><i class="fa fa-reply"></i> Back</button>
                  </a>
                  <h5 class="card-header"><i class="zmdi zmdi-account-calendar"></i>
                    Permissions To Role {{$role->name}}</h5>

                <div class="card-body">

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Permissions</th>
                          </tr>
                        </thead>
                        <tbody>
                            <td scope="row">{{$role->id}}</td>
                            <td>{{$role->name}}</td>
                            <td>
                                @if(!empty($permissions))
                                    @foreach($permissions as $v)
                                           <li>
                                           {{ $v->name }}
                                           </li>
                                    @endforeach
                                @endif
                            </td>

                        </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
@endsection
