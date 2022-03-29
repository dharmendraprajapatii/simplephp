@extends('layout.app')
@section('content')
  <div class="container-fluid">
    <div class="row bg-light">
        <div class="col-md-12 mt-3 mb-3 ">
            <table id = "daTable" class="table table-hover"  style="border: 1px solid black">
                <thead>
                    <tr>
                        <th scope="col" style="border: 1px solid black">Id</th>
                        <th scope="col" style="border: 1px solid black">Customers</th>
                        <th scope="col" style="border: 1px solid black"> Mobile number</th>
                        <th scope="col" style="border: 1px solid black">Location</th>
                        <th scope="col" style="border: 1px solid black">Following</th>
                        <th scope="col" style="border: 1px solid black">Action</th>
                    </tr>
                </thead>
                <tbody id="data"></tbody>
            </table>
        </div>
    </div>
 </div> 
@endsection
<script src="vendor/jquery/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/8.7.1/firebase-app.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/8.7.1/firebase-auth.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/8.7.1/firebase-database.min.js"></script>
<script src="js/customer.js"></script>

