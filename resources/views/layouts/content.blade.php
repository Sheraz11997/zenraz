 @include('layouts.header')
 
 <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"> Home</h1>
          </div>
          <div class="col-md-8 jumbotron">
            <div class="row">
                <div class="col-md-2" style="">
                  <a href="/user"><button class="btn btn-primary">User Profile</button></a>
                </div>
                <div class="col-md-2" ></div>
                 <div class="col-md-2" style="">
                  <a href="/devices"><button class="btn btn-primary">Device Information</button></a>
                </div>
                <div class="col-md-2" ></div>
                <div class="col-md-2" style="">
                  <a href="/farmer"><button class="btn btn-primary">Farmer Information</button></a>
                </div>
            </div>
          </div>
      </div>
      <!-- End of Main Content -->
      @include('layouts.footer')