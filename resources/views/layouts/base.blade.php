<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"> <!--icon-->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Admin-Panle - لوحة القيادة</title>
    <style>
      *{
        font-family: cairo;
        color:white
      }
     
      label{
        color:black;
    }
 
    </style>
</head>
<body>
  <Header>
    <!-- Navbar -->
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
<!-- Container wrapper -->
<div class="container-fluid">
  <!-- Navbar brand -->
  <a class="navbar-brand" href="#">ExploreKSA </a>

  <!-- Icons -->
  <ul class="navbar-nav d-flex flex-row me-1">
      <li class="nav-item me-3 me-lg-0">
          <a class="nav-link text-white" href="#"><i class="fas fa-envelope mx-1"></i> Contact</a>
      </li>
      <li class="nav-item me-3 me-lg-0">
          <a class="nav-link text-white" href="#"><i class="fas fa-cog mx-1"></i> Settings</a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <i class="fas fa-user mx-1"></i> Welcome  {{ Auth::user()->name }} </a>
          <!-- Dropdown menu -->
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <li>
                  <a class="dropdown-item" href="#">My account</a>
              </li>

              <li>
                  <a class="dropdown-item" href="{{route('logout')}}">Log out</a>
              </li>
          </ul>
      </li>
  </ul>
</div>

<!-- Container wrapper -->
</nav>
<!-- Navbar -->
    <!-- Navbar --> 
</Header>
    <main>
        <div class="row">
          <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="{{route('index')}}" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline text-white">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('offers')}}" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline text-white">Offer</span> </a>
                       
                    </li>
                    <li>
                        <a href="{{route('tourist-attraction')}}" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline text-white">Tourist Attractions</span></a>
                    </li>
                    
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline text-white">Customers</span> </a>
                    </li>
                </ul>
              
            </div>
        </div>
        
           <div class="col-sm-10 bg-body-secondary">
                  @yield('content')
           </div>
       </div>
    </main>

    <footer>

    </footer>
</body>
</html>