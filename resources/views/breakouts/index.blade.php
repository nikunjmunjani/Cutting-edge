@extends('layout.master')

@section('breadcrumb')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Alpha v Beta</h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="./">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
  </ol>
</div>
@endsection
@section('content')
<h4>January 4, 2022</h4>
<p>To view the livestream or recorded event, select from presentations or a breakout room and click on the play button on the player below.</p>
<div class="row mb-3">

  <!-- Area Chart -->
  <div class="col-xl-8 col-lg-7">
    <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h5 class="m-0 font-weight-bold text-primary">Presentations</h5>
        <div class="dropdown no-arrow">
          <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
          </a>

        </div>
      </div>
      <div class="card-body">
        <iframe src="https://player.castr.com/live_70060a405cdb11ec8deaab52489bc1d8" width="700" height="394" frameborder="0" scrolling="no" allow="autoplay" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen>
      </iframe>
      </div>
    </div>
  </div>
  <!-- Pie Chart -->
  <div class="col-xl-4 col-lg-5">
    <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Products Sold</h6>
        <div class="dropdown no-arrow">
          <a class="dropdown-toggle btn btn-primary btn-sm" href="#" role="button" id="dropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Month <i class="fas fa-chevron-down"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
            aria-labelledby="dropdownMenuLink">
            <div class="dropdown-header">Select Periode</div>
            <a class="dropdown-item" href="#">Today</a>
            <a class="dropdown-item" href="#">Week</a>
            <a class="dropdown-item active" href="#">Month</a>
            <a class="dropdown-item" href="#">This Year</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="mb-3">
          <div class="small text-gray-500">Oblong T-Shirt
            <div class="small float-right"><b>600 of 800 Items</b></div>
          </div>
          <div class="progress" style="height: 12px;">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 80%" aria-valuenow="80"
              aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="mb-3">
          <div class="small text-gray-500">Gundam 90'Editions
            <div class="small float-right"><b>500 of 800 Items</b></div>
          </div>
          <div class="progress" style="height: 12px;">
            <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="70"
              aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="mb-3">
          <div class="small text-gray-500">Rounded Hat
            <div class="small float-right"><b>455 of 800 Items</b></div>
          </div>
          <div class="progress" style="height: 12px;">
            <div class="progress-bar bg-danger" role="progressbar" style="width: 55%" aria-valuenow="55"
              aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="mb-3">
          <div class="small text-gray-500">Indomie Goreng
            <div class="small float-right"><b>400 of 800 Items</b></div>
          </div>
          <div class="progress" style="height: 12px;">
            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50"
              aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="mb-3">
          <div class="small text-gray-500">Remote Control Car Racing
            <div class="small float-right"><b>200 of 800 Items</b></div>
          </div>
          <div class="progress" style="height: 12px;">
            <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30"
              aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
      <div class="card-footer text-center">
        <a class="m-0 small text-primary card-link" href="#">View More <i
            class="fas fa-chevron-right"></i></a>
      </div>
    </div>
  </div>

@endsection