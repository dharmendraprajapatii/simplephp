@extends('layout.app')
@section('content')
  <div class="container-fluid bg-light">
    <div class="row bg-light ">
        <div class="col-md-12 mt-5">
          <form >
              <div class="row">
                  <div class="col-md-3"></div>
                  <div class="col-md-3 mt-5">Enter email Address :</div>
                  <div class="col-md-3 mt-5 form-group">
                        <input type="email" id="email" class="form-control">
                  </div>
                  <div class="col-md-3"></div>
                  <div class="col-md-3"></div>
                  <div class="col-md-3 mt-3">Enter New Password :</div>
                  <div class="col-md-3 mt-3 form-group">
                      <input type="password" class="form-control" id="password">
                  </div>
                  <div class="col-md-3"></div>
                  <div class="col-md-3"></div>
                  <div class="col-md-6 mt-3">
                      <input type="submit" id="btn" value="Submit" class="btn btn-primary form-control">
                  </div>
              </div>
          </form>
        </div>
    </div>
 </div> 
@endsection
<script src="vendor/jquery/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/8.7.1/firebase-app.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/8.7.1/firebase-auth.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/8.7.1/firebase-database.min.js"></script>
<script src="js/forgrt_password.js"></script>

    