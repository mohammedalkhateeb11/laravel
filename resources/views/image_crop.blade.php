<html>
    <style>
        .n{
            align:center;
        }
    </style>
 <head>
     
   
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
 <!-- croppie -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.4/croppie.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.4/croppie.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.4/croppie.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.4/croppie.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.4/croppie.min.css.map">
<!-- croppie -->
  <title>Alkhateeb</title>
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/croppie.min.css') }}" />
 <!--<script src="{{ asset('js/bootstrap.min.js') }}"></script>!-->
    <script src="{{ asset('js/croppie.min.js') }}"></script>
 </head>

 <body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white    shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{url('about')}}">About</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{url('services')}}">Services</a>
                        </li>
                        
                      </ul>
                      <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item active"><a href="{{url('ajaxproducts')}}" class="nav-link">Create Post </a></li>
                        
                      </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{url('ajaxproducts')}}">Dashboard </a>  
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <body>
      <div class="container">    
        <br />
            <h3 align="center">How to Crop And Upload Image in Laravel 6 using jQuery Ajax</h3>
          <br />
          <div class="card">
            <div class="card-header">Crop and Upload Image</div>
            <div class="card-body">
              <div class="form-group">
                @csrf
                <div class="row">
                  <div class="col-md-4" style="border-right:1px solid #ddd;">
                    <div id="image-preview"></div>
                  </div>
                  <div class="col-md-4" style="padding:75px; border-right:1px solid #ddd;">
                    <p><label>Select Image</label></p>
                    <input type="file" name="upload_image" id="upload_image" />
                    <br />
                    <br />
                    <button class="btn btn-success crop_image">Crop & Upload Image</button>
                  </div>
                  <div class="col-md-4" style="padding:75px;background-color: #333">
                    <div id="uploaded_image" align="center"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <br />
              <br />
              
              <br />
              <br />
        </div>
        <script>  
          $(document).ready(function(){
            
            $image_crop = $('#image-preview').croppie({
              enableExif:true,
              viewport:{
                width:200,
                height:200,
                type:'circle'
              },
              boundary:{
                width:300,
                height:300
              }
            });
          
            $('#upload_image').change(function(){
              var reader = new FileReader();
          
              reader.onload = function(event){
                $image_crop.croppie('bind', {
                  url:event.target.result
                }).then(function(){
                  console.log('jQuery bind complete');
                });
              }
              reader.readAsDataURL(this.files[0]);
            });
          
            $('.crop_image').click(function(event){
              $image_crop.croppie('result', {
                type:'canvas',
                size:'viewport'
              }).then(function(response){
                var _token = $('input[name=_token]').val();
                $.ajax({
                  url:'{{ route("image_crop.upload") }}',
                  type:'post',
                  data:{"image":response, _token:_token},
                  dataType:"json",
                  success:function(data)
                  {
                    var crop_image = '<img src="'+data.path+'" />';
                    $('#uploaded_image').html(crop_image);
                  }
                });
              });
            });
            
          });  
          </script>

     </body>
    </html>
    
    
    