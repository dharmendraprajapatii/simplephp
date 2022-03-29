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
                    {{-- <a href="over_post" class="brn btn-danger btn-sm form-control text-center">Over Post</a> --}}
                </div>
            </div>
            <h4>This is Over Post Data</h4>
            <table class="table" id="table">
                        <thead>
                            <tr>
                                <th >Id</th>
                                <th >Business Name</th>
                                <th >Audience</th>
                              
                                <th >Action</th>
                            </tr>
                        </thead>
                        <tbody id="nPostData">

                        </tbody>
                    </table>

                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Normal Post (<font id="totalpost"></font>)</h5>
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
                                                            <th style="border: 1px solid black">Date and Time</th>
                                                            <th style="border: 1px solid black">Saved</th>
                                                            <th style="border: 1px solid black">Impression</th>
                                                            <th style="border: 1px solid black">Likes</th>
                                                            <th style="border: 1px solid black">Comments</th>
                                                            <th style="border: 1px solid black">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="allData1"></tbody>
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
@endsection
<script src="vendor/jquery/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/8.7.1/firebase-app.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/8.7.1/firebase-auth.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/8.7.1/firebase-database.min.js"></script>
<script src="js/over_post.js"></script>

 