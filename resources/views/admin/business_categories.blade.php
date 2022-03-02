@extends('layout.app')
@section('content')
  <div class="container-fluid">
    <div class="row bg-light">
        <div class="col-md-12 mt-3 mb-3 ">
            <form action="">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 form-group">
                        <select class="form-control" id="categoryData">
                
                        </select>
                    </div>
                    <div class="col-md-12">
                        <table class="table" id="example">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Business Name</th>
                                    <th>Business Cateory</th>
                                </tr>
                            </thead>
                            <tbody id="allDataCategory"></tbody>
                        </table>
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
<script src="js/business_category.js"></script>

 