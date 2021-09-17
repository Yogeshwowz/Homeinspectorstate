<!DOCTYPE html>
<html lang="en">
<head>
  <title>@if(Request::segment(1) != "") {{ucfirst(Request::segment(1)).' | ' .config('app.name')}} @else {{ config('app.name') }} @endif</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link href = "{{asset('public/admin_theme/css/admin.css')}}" rel = "stylesheet"/>
  <link rel="stylesheet" type="text/css" href="https://kit-pro.fontawesome.com/releases/v5.15.2/css/pro.min.css"/> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</head>
  <body>
    <div class = "container-fluid main-body">
      <div class="row">    
        <div class = "col-2 side-bar">  
                    <div class = "side-logo">Admin-Panel</div>
          <ul class="nav-default">
                        <li class="active"><a href="#"><b><i class="far fa-copy"></i> Pages</b></a></li>
                        <li class="{{ (request()->segment(1) == 'home') ? 'active' : '' }}"><a href="{{asset('/home')}}"><i class="fas fa-home"></i> Home</a></li>
                        <li class="{{ (request()->segment(1) == 'service') ? 'active' : '' }}"><a href="{{asset('/service')}}"><i class="fas fa-cogs"></i> services</a></li>
                        <li class="{{ (request()->segment(1) == 'inspection') ? 'active' : '' }}"><a href="{{asset('/inspection')}}"><i class="fas fa-bug"></i> inspection</a></li>
                        <li class="{{ (request()->segment(1) == 'affiliation') ? 'active' : '' }}"><a href="{{asset('/affiliation')}}"><i class="fas fa-network-wired"></i> affiliations</a></li>
                        <li class="{{ (request()->segment(1) == 'about-page') ? 'active' : '' }}"><a href="{{asset('/about-page')}}"><i class="fas fa-address-card"></i> about us</a></li>
                        <li class="{{ (request()->segment(1) == 'contact-page') ? 'active' : '' }}"><a href="{{asset('/contact-page')}}"><i class="fas fa-mobile"></i> contact an incpector</a></li>
                        <li class="{{ (request()->segment(1) == 'widget') ? 'active' : '' }}"><a href="{{asset('/widget')}}"><i class="fas fa-th-list"></i> Sidebar</a></li>
                        <li class="{{ (request()->segment(1) == 'settings') ? 'active' : '' }}"><a href="{{asset('/settings')}}"><i class="fas fa-sliders-h"></i> Settings</a></li>
                    </ul>	
        </div>
        <div class = " col-10 right-header">
          <div class = "admin-header">
            <div class = "admin-nav">
              <nav class="navbar navbar-expand-lg">
                  <div class="container-fluid">
                  <a href = "#"><img class = "head-logo" src = "{{asset('public/images/logo.png')}}" alt = "logo" /></a>
                  <ul class="navbar-nav top-nav">
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false" > Admin </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li>
                      <a class="dropdown-item" href="#">Something else here</a>
                      </li>
                    </ul>
                    </li>					<li><a href="{{asset('/logout')}}"><img src="{{asset('public/images/logout-icon.png')}}" alt=""> Logout</a></li>
                  </ul>
                  </div>
              </nav>
            </div>
          </div>
          <div class = "container mb-5">
            @yield('content')
        </div>
      </div>
    </div>  
  </div>
  <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script>
            $(function(){
              if($('#editor').length)
              {
                CKEDITOR.replace('editor',{});
              }
              $('.editor').each(function(){
                CKEDITOR.replace($(this).attr('id')); 
              });
            });
          </script>

</body>
</html>