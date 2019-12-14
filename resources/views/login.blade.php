@extends('layouts.app')

@section('main')

<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">GPAO | Sign In</h5>
            
            
        
            @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
             @endif
        
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif

            <form class="form-signin" method="post" action="{{ url('/main/checkLogin') }}">
                {{ csrf_field() }}
                <br>
                <div class="form-label-group">
                    <select class="form-control" name="cat" id="cat">
                        <option value="GERANT">GERANT</option>
                        <option value="MAGASINIER">MAGASINIER</option>
                        <option value="SECRETAIRE">SECRETAIRE</option> 
                      </select>
                </div>
                <br>
                <div class="form-label-group">
                    <label for="email">Email address</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email address">
                </div>
                <br>
                <div class="form-label-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                </div>
                <br>
                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection