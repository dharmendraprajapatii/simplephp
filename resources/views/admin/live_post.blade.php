@extends('layout.app')
@section('content')
  <div class="container-fluid">
    <div class="row bg-light">
        <div class="col-md-12 mt-5">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-2 form-group">
                    {{-- <a href="live_post" class="brn btn-primary btn-sm form-control text-center">Live Post</a> --}}
                </div>
                <div class="col-md-1"></div>
                 <div class="col-md-2 form-group">
                    <a href="over_post" class="brn btn-danger btn-sm form-control text-center">Over Post</a>
                </div>
            </div>
            <h3>This is Live Post Data</h3>
            <table class="table" id="example">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Business Name</th>
                                <th>Audience</th>
                                <th>Saved</th>
                                <th>Impression</th>
                                <th>Reach</th>
                                
                                <th>Likes</th>
                                <th>Comment</th>
                                <th>Date/Time</th>
                                <th>Post</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="nPostData">

                        </tbody>
                    </table>

                             <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Normal Post</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-4" style="border: 1px solid black">
                                             Image: <p id="" class="viewPostimage mt-2" ></p>
                                        </div>
                                        <div class="col-md-4" style="border: 1px solid black">
                                                Description: <p id=""  class="viewPostData mt-2">Null</p>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div>
                                </div>
    
                                    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Date And Time</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                            <div class="row">
                                               
                                                <div class="col-md-12" style="border: 1px solid black">
                                                  <p id="viewPostDate" class="mt-2" >Null</p>
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
<script src="js/live_post.js"></script>

 