@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="row bg-light ">
        <div class="col-lg-12  mt-3 mb-3">
            <table id="daTable"  class="table "style="border: 1px solid black" >
                <thead>
                    <tr>
                        <th style="border: 1px solid black">Id</th>
                        <th style="border: 1px solid black">Business Accounts</th>
                        <th style="border: 1px solid black">Mo.Number</th>
                        <th style="border: 1px solid black">Location</th>
                        <th style="border: 1px solid black">Category</th>
                        <th style="border: 1px solid black">Normal Post</th>
                        <th style="border: 1px solid black">Live Promoted Post</th>
                        <th style="border: 1px solid black"  class="text-right">Action</th>
                    </tr>
                </thead>
                <tbody id="data">

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
                                            <div class="col-sm-12">
                                                <table>
                                                    <thead>
                                                        <tr >
                                                            <th style="border: 1px solid black">id</th>
                                                            <th style="border: 1px solid black">Image</th>
                                                            <th style="border: 1px solid black">Description</th>
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
                                

                   <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Promoted Post</h5>
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
                                                            <th style="border: 1px solid black">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="allData1"></tbody>
                                                </table>
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
<script src="js/business.js"></script>