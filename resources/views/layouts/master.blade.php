<!DOCTYPE html>
<html lang="en">

<head>
@include('master.head')
</head>

<body id="page-top">
	<nav class="navbar navbar-expand navbar-light bg-white static-top osahan-nav sticky-top">
		@include('layouts.navbar')
	</nav>
    <div id="wrapper">
        @include('layouts.sidebar')
        <div id="content-wrapper">
           @yield('content')
        </div>

    </div>

    <!-- scroller -->
    <a class="scroll-to-top rounded" href="#page-top">
  		<i class="fas fa-angle-up"></i>
  	</a>
  	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                  </button>
               </div>
               <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
               <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="login.html">Logout</a>
               </div>
            </div>
         </div>
  	</div>

   @include('master.scripts')
   @yield('specific_scripts')
    
</body>
    
</html>
