@extends('admin.dashboard.app')


@section('content')
<div class="row">
    <div class="col-lg-9">
        <div class="card">
                <a href="{{route('admin.roles.index')}}">
                  <button type="button" class="btn-sm btn-primary btn-sm float-right">
                  <i class="fa fa-reply"></i> Back</button>
                </a>

            <h4 class="card-header">Edit Role & Permission To {{$role->name}}</h4>

{!! Form::model($role, ['method' => 'PATCH','route' => ['admin.roles.update', $role->id]]) !!}
{!! Form::token() !!}
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Permissions</h3>
                </div>
                <div class="card-body">
                    <div class="form-group clearfix">
                        @foreach ($permissions as $permission)
                        <div class="form-check form-check-inline">
                            <input name="permission[]" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="{{$permission->id}}">
                            <label class="form-check-label" for="inlineCheckbox1">{{$permission->name}}</label>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn-sm btn-primary float-left">Update Role</button>
    </div>
</div>
{!! Form::close() !!}
</div>
</div>
</div>


@endsection
