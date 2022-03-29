@extends('layout.app')
@section('content')

  <div class="container-fluid">
    <div class="row bg-light">
        <div class="col-md-12 mt-3 mb-3 ">
            <div class="row">
                <div class="col-md-12">
                    <table class="table" id="daTable">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Business Name</th>
                                <!-- <th>Likes</th>
                                <th>Comment</th> -->
                                <!-- <th>Date/Time</th> -->
                                <th col="2" >Action</th>
                            </tr>
                        </thead>
                        <tbody id="nPostData"></tbody>
                     
                    </table>
                                 

                                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Normal Post</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                        <div class="col-sm-12">
                                                 <table>
                                                        <thead>
                                                            <tr >
                                                                <th style="border: 1px solid black">id</th>
                                                                <th style="border: 1px solid black">Image</th>
                                                                <th style="border: 1px solid black">Description</th>
                                                                <th style="border: 1px solid black">Date abd Time</th>
                                                                <th style="border: 1px solid black">Likes</th>
                                                                <th style="border: 1px solid black">Comments</th>
                                                                <th style="border: 1px solid black">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="allData"></tbody>
                                                    </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                            </div>

                                   




                </div>
            </div>
        </div>
    </div>
 </div> 

@endsection
<script src="vendor/jquery/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/8.7.1/firebase-app.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/8.7.1/firebase-auth.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/8.7.1/firebase-database.min.js"></script>
<script src="js/normalPostData.js"></script>

 