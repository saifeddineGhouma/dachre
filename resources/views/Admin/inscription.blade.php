@extends('Admin.master')
@section('content')
<div class="box box-info">
    <div class="box-header">
        <i class="glyphicon glyphicon-user"></i>
        <h3 class="box-title pull-center" style="    text-align: center;
        "> Nouveau Compte</h3>
        <div class="pull-right box-tools">
            <button class="btn btn-info btn-sm"  title="add"><a href="{{url('/admin/index')}}"><i class="glyphicon glyphicon-minus-sign"></i></a></button>
            
        </div>
    </div>
    <div class="box-body">
        <form action="{{ route('register') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="Nom_service" class="control-label">Nom </label>
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <label for="Nom_service" class="control-label">Prenom </label>
                <input id="prenom" type="text" class="form-control" name="prenom" value="{{ old('prenom') }}" required autofocus>
                @if ($errors->has('prenom'))
                <span class="help-block">
                    <strong>{{ $errors->first('prenom') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <label for="Nom_service" class="control-label">Username </label>
                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>
                @if ($errors->has('username'))
                <span class="help-block">
                    <strong>{{ $errors->first('username') }}</strong>
                </span>
                @endif
            </div>
            
            <div class="form-group">
                <label for="mail" class="control-label">Email </label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <label for="Tel" class="control-label">Password</label>
                <input id="password" type="password" class="form-control" name="password" required>
                @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <label for="id_departement" class="control-label">Password confirmation </label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>
            
            <div class="form-group">
                <button class="pull-right btn btn-success form-control" type="submit" id="sendEmail">Cree Compte <i class="glyphicon glyphicon-ok"></i></button>
            </div>
            
        </form>
    </div>
    <div class="box-footer clearfix">
    </div>
</div>
@endsection