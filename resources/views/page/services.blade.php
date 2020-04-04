@extends('layouts.app')
@section('content')
<style>
      body {
    margin: 0;
    padding: 0;
    background-color: #050505;
    height: 100vh;
  }
 
  .card {
      cursor: pointer
  }
 
  .hd {
      font-size: 25px;
      font-weight: 550
  }
 
  .card.hover,
  .card:hover {
      box-shadow: 0 20px 40px rgba(0, 0, 0, .2)
  }
 
  .img {
      margin-bottom: 35px;
      -webkit-filter: drop-shadow(5px 5px 5px #222);
      filter: drop-shadow(5px 5px 5px #222)
  }
 
  .card-title {
      font-weight: 600
  }
 
  button.focus,
  button:focus {
      outline: 0;
      box-shadow: none !important
  }
 
  .ft {
      margin-top: 25px
  }
 
  .chk {
      margin-bottom: 5px
  }
 
  .rck {
      margin-top: 20px;
      padding-bottom: 15px
  }
</style>
<div class='container-fluid mx-auto mt-5 col-12' style="text-align: center">
  <div class="hd">Why People Believe in Us</div>
  <p><small class="text-muted">Always render more and better service than <br />is expected of you, no matter what your ask may be.</small></p>
  <div class="row" style="justify-content: center">
      <div class="card col-md-3 col-12">
          <div class="card-content">
              <div class="card-body"> <img class="img" src="https://i.imgur.com/S7FJza5.png" />
                  <div class="shadow"></div>
                  <div class="card-title"> We're Not  Free </div>
                  <div class="card-subtitle">
                      <p> <small class="text-muted">We spent thousands of hours creating on algorithm that does this for you in seconds. We collect a small fee from the professional after they meet your</small> </p>
                  </div>
              </div>
          </div>
      </div>
      <div class="card col-md-3 col-12 ml-2">
          <div class="card-content">
              <div class="card-body"> <img class="img" src="https://i.imgur.com/xUWJuHB.png" />
                  <div class="card-title"> We're Unbiased </div>
                  <div class="card-subtitle">
                      <p> <small class="text-muted"> We don't accept ads from anyone. We use actual data to match you who the best person for each job </small> </p>
                  </div>
              </div>
          </div>
      </div>
      <div class="card col-md-3 col-12 ml-2">
          <div class="card-content">
              <div class="card-body"> <img class="img rck" src="https://i.imgur.com/rG3CGn3.png" />
                  <div class="card-title"> We Guide you </div>
                  <div class="card-subtitle">
                      <p> <small class="text-muted">Web application programmers
                        We seek customer comfort
                        We are Laravel developers.</small> </p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection