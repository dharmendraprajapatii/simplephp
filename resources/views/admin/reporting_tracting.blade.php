@extends('layout.app')
@section('content')
  <div class="container-fluid">
    <div class="row bg-light">
        <div class="col-md-12 mt-5">
            <div class="row">
                
                <p id="event"></p>
            </div>
        </div>
    </div>
 </div> 
@endsection
<script src="vendor/jquery/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/8.7.1/firebase-app.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/8.7.1/firebase-auth.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/8.7.1/firebase-database.min.js"></script>
 <script src="https://www.gstatic.com/firebasejs/7.5.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.5.0/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.6.7/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.6.7/firebase-analytics.js"></script>

    {{-- <script type="module">

  // Import the functions you need from the SDKs you need

import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.7/firebase-app.js";

//   import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.7/firebase-analytics.js";

  // TODO: Add SDKs for Firebase products that you want to use

  // https://firebase.google.com/docs/web/setup#available-libraries


  // Your web app's Firebase configuration

  // For Firebase JS SDK v7.20.0 and later, measurementId is optional

//   const firebaseConfig = {

//     apiKey: "AIzaSyBWPwO9fU6zPT2hRy6Te0dDEM5t2IcD9tQ",

//     authDomain: "locsaleapplication.firebaseapp.com",

//     databaseURL: "https://locsaleapplication-default-rtdb.firebaseio.com",

//     projectId: "locsaleapplication",

//     storageBucket: "locsaleapplication.appspot.com",

//     messagingSenderId: "520448611565",

//     appId: "1:520448611565:web:11da8c936a85e8c622a8e4",

//     measurementId: "G-7FJJ68MDH7"

//   };


//   // Initialize Firebase

//   const app = initializeApp(firebaseConfig);

//   const analytics = getAnalytics(app);

</script> --}}


<script src="js/reporting.js"></script>

 