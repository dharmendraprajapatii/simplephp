@extends('layout.app')
@section('content')
  <div class="container-fluid bg-light">
    <div class="row bg-light ">
        <div class="col-md-12 mt-5">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 text-center mt-5 mb-3">
                    <h1 class="text-info">Admin Detail</h1>
                </div>
            </div>
           <div class="row" >
               <div class="col-md-3"></div>
               <div class="col-md-3" style="border: 1px solid black;"><p  class="mt-3 mb-3">Admin Name</p></div>
               <div class="col-md-3"  style="border: 1px solid black;"><p id="nameData" class="mt-3 mb-3"></p></div>
               <div class="col-md-3"></div>

               <div class="col-md-3"></div>
               <div class="col-md-3 "style="border: 1px solid black;"><p class="mt-3 mb-3">Admin Email</p></div>
               <div class="col-md-3 "  style="border: 1px solid black;"><p id="emailData" class="mt-3 mb-3"></p></div>
               <div class="col-md-3"></div>

               <div class="col-md-3"></div>
               <div class="col-md-3 "style="border: 1px solid black;"><p class="mt-3 mb-3">Change password</p></div>
               <div class="col-md-3  form-grou" style="border: 1px solid black;">
                <a href="forget_password" class="btn mt-3 mb-3 btn-danger form-control btn-sm">Forgot Password ?</a>
                </div>
               <div class="col-md-3"></div>
               <div class="col-md-3"></div>
               <div class="col-md-6 mt-3 form-group">
                   <a href="logout" class="btn btn-info btn-sm form-control">Logout</a>
               </div>
           </div>
        </div>
    </div> </div> 
@endsection
<script src="vendor/jquery/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/8.7.1/firebase-app.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/8.7.1/firebase-auth.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/8.7.1/firebase-database.min.js"></script>
<script src="js/adminData.js"></script>

 