@extends('layout.app')
@section('content')

<section class="content">
    <div class="container-fluid ">
      <div class="row">
        <div class="col-md-12 mt-3 mb-3">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Total Report</h5>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-footer">
              <div class="row">
                <div class="col-sm-3  bg-primary">
                  <div class="description-block border-right">
                    <span class="description-text">TOTAL CUSTOMERS</span><br>
                    <span class="description-percentage text-light"><i class="fas fa-caret-down"></i></span>
                    <h5 id="customerCountData" class="description-header"></h5>                
                  </div>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-3 bg-warning">
                  <div class="description-block border-right">
                    <span class="description-text text-light">TOTAL Business</span><br>
                    <span class="description-percentage text-light"><i class="fas fa-caret-down"></i> </span>
                    <h5 class="description-header text-light" id="businessCountData" ></h5> 
                  </div>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-3 bg-success">
                  <div class="description-block border-right">
                    <span class="description-text">TOTAL ALL</span><br>
                    <span class="description-percentage text-light"><i class="fas fa-caret-down"></i></span>
                    <h5 class="description-header" id="totalCountData" ></h5>   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header border-transparent">
              <h3 class="card-title">City</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body bg-info text-center p-0">
              <div class="row">
                <div id="overlay" class="col-md-12">
                  <div class="cv-spinner">
                    <span class="spinner"></span>
                  </div>
                </div>
                <div class="col-md-2 text-center mt-4">
                  <label for="">
                    <h4>Select City</h4>
                  </label>
                </div>
                <div class="col-md-4 mt-4  form-group">
                  <form>
                    <select  id="otherCity" class="select form-control" >
                        
                        
                    </select>
                   
                  </form>
                </div>
                <div class="col-md-4 mt-4">
                  <h4>Total customers in a city
                </div>
                
                <div class="col-md-1 text-center mt-4">
                  <h4 class="description-header text-light" id="cityData"></h4>
                </div>
              </div>
            </div>
          </div>
          <div class="card bg-light ">
            <div class="card-header border-transparent">
              <h3 class="card-title">List</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body mt-4 p-0">
              <div class="table-responsive">
                <table id="example" class="table table-hover" style="border: 1px solid black">
                  <thead>
                  <tr>
                    <th style="border: 1px solid black">ID</th>
                    <th style="border: 1px solid black">User Name</th>
                    <th style="border: 1px solid black">List Of Categories</th>
                    <th style="border: 1px solid black">List Of Sub-Categories</th>
                    <th style="border: 1px solid black">List Of Business</th>
                  </tr>
                  </thead>
                  <tbody id="listData"></tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="card bg-light ">
            <div class="card-header border-transparent">
              <h3 class="card-title">Promoted  Post ( <font class="text-success" id="promtedPost"></font> )</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body mt-4 p-0">
              <div class="table-responsive">
                <table id="table" class="table table-hover" style="border: 1px solid black">
                  <thead>
                  <tr>
                    <th style="border: 1px solid black">ID</th>
                    <th style="border: 1px solid black">Business Name</th>
                    <th style="border: 1px solid black">Targeted Regions</th>
                    <th style="border: 1px solid black">Promotions</th>
                  </tr>
                  </thead>
                  <tbody id="postData">

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
</section>
@endsection
<script src="vendor/jquery/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/8.7.1/firebase-app.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/8.7.1/firebase-auth.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/8.7.1/firebase-database.min.js"></script>
<script src="js/mainpage.js"></script>

<style>
  #first{
  display:block;
  margin:20px auto;
  padding:10px 30px;
  background-color:#eee;
  border:solid #ccc 1px;
  cursor: pointer;
}
#overlay{	
  position: fixed;
  top: 0;
  z-index: 100;
  width: 100%;
  height:100%;
  display: none;
  background: rgba(0,0,0,0.6);
}
.cv-spinner {
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;  
}
.spinner {
  width: 40px;
  height: 40px;
  border: 4px #ddd solid;
  border-top: 4px #2e93e6 solid;
  border-radius: 50%;
  animation: sp-anime 0.8s infinite linear;
}
@keyframes sp-anime {
  100% { 
    transform: rotate(360deg); 
  }
}
.is-hide{
  display:none;
}
</style>