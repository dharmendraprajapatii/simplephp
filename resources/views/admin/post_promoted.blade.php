@extends('layout.app')
@section('content')
  <div class="container-fluid">
    <div class="row bg-light">
        <div class="col-md-12 mt-5">
            <div class="row">
                
                <div class="col-md-3"></div>
                <div class="col-md-2 form-group">
                    <a href="live_post" class="brn btn-primary btn-sm form-control text-center">Live Post</a>
                </div>
                <div class="col-md-1"></div>
                 <div class="col-md-2 form-group">
                    <a href="over_post" class="brn btn-danger btn-sm form-control text-center">Over Post</a>
                </div>
            </div>
        </div>
    </div> </div> 
@endsection
<script src="vendor/jquery/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/8.7.1/firebase-app.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/8.7.1/firebase-auth.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/8.7.1/firebase-database.min.js"></script>
<script src="js/normalPostData.js"></script>

 