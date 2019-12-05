@extends('admin.dashboard.app')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <a href="{{route('admin.roles.index')}}">
                   <button type="button" class="btn-sm btn-primary btn-sm float-right">
                    <i class="fa fa-reply"></i> Back</button>
                </a>
                <h5 class="card-header"><i class="zmdi zmdi-account-calendar"></i>
                   Edit Role & Permission To {{$user->name}}</h5>
                <div class="card-body">
                  <form action="{{route('admin.users.update',$user)}}" method="POST">
                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label text-md-right">Name</label>
                                <div class="col-md-6">
                                 <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" required autofocus>
                                </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label text-md-right">Email</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control " name="email" value="{{ $user->email }}" required autocomplete="email" autofocus>
                                </div>
                        </div>

                    @method('PUT')
                    @csrf
                       <fieldset class="form-group">
                         <div class="row">
                          <legend class="col-md-2 col-form-label text-md-right">Role</legend>
                          <div class="col-sm-10">
                            @foreach ($roles as $role)
                             <div class="form-check">
                               <input class="form-check-input" type="radio" name="roles[]" value="{{$role->id}}" @if ($user->roles->pluck('id')->contains($role->id)) checked @endif>
                               <label class="form-check-label"> {{$role->name}} </label>
                             </div>
                            @endforeach
                          </div>
                            <button type="submit" class="btn-sm btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Update USER
                            </button>
                      </fieldset>
                  </form>
                </div>
            </div>
        </div>
    </div>
@endsection
