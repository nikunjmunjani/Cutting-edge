@extends('layout.auth')

@section('content')
<!-- Login Content -->
<div class="container-login">
<div class="row justify-content-center">
  <div class="col-xl-6 col-lg-12 col-md-9">
    <div class="card shadow-sm my-5">
      <div class="card-body p-0">
        <div class="row">
          <div class="col-lg-12">
            <div class="login-form">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Login</h1>
              </div>
              <form class="user" method="post" id="login_form">
                <div class="form-group">
                  <input type="text" class="form-control" name="username" id="username" placeholder="Enter your username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
                </div>
                <div class="form-group">
                  <div class="custom-control custom-checkbox small" style="line-height: 1.5rem;">
                    <input type="checkbox" name="remember" class="custom-control-input" id="customCheck">
                    <label class="custom-control-label" for="customCheck">Remember
                      Me</label>
                  </div>
                </div>
                <div class="form-group">
                  <a href="javascript:void(0);" class="btn btn-primary btn-block login_btn">Login</a>
                </div>
                <hr>
        
              </form>
              <div class="text-center">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- Login Content -->
@endsection

@section('script')
<script>

	$(document).ready(function(){
		$(document).on("click",".login_btn",function(){

			$.ajax({
		        url: "{!! URL::route('checklogin') !!}",
		        type:"POST",
		        data:$("#login_form").serialize(),
		        dataType: 'json',
		        success:function(response){
		           
		            if(response.status){
	            		toastr["success"](response.message);
		               	window.location.reload();
		            }else{
		            	toastr["error"](response.message);
		            }

		        },
		        error:function(response){
		            toastr["error"](response.message);
		        }
		    });  
		});
	});
</script>
@endsection