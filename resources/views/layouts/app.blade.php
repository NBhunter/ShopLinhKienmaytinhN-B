<!DOCTYPE html>
<html>
    <head>
    <meta name="csrf-token" content="P53BTXlZnPJrZndR2wcgZ4Y6HDV5HA8mNobuDTTa">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>N&B Shop - cửa hàng bán linh kiện máy tính</title>
    <link rel="shortcut icon" type="image" href="./image/logo.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/css/style.css" />
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head> 
<body>
  <header>
  <div id="top-header">
				<div class="container">
					
					<ul class="header-links topnav-right">
       
   <li><a type="button" href= "" class="btn btn-danger"> <img src="./image/iconuser.png" alt="" width="24" height="auto" class="d-inline-block align-text-top ml-auto">xin chào</a></li>
  
   <li><a type="button" href= "{{ url('login') }}" class="btn btn-danger"> <img src="./image/iconuser.png" alt="" width="24" height="auto" class="d-inline-block align-text-top ml-auto">đăng nhập</a></li>
   
   <li><button type="button" class="btn btn-danger"> <img src="./image/giohang.png" alt="" width="24" height="auto" class="d-inline-block align-text-top ml-auto">Giỏ Hàng</button></li>
					</ul>
					
				</div>
			</div>
<nav id= "header"class="navbar ">
<div id ="searchfirst "class="container-fluid ml-2 ">
  <a name = "homeid"class="navbar-brand ml-auto"  href="{{ url('home') }}" style ="">
      <img src="./image/logo-bg.png" alt="" width="240" height="80" class="d-inline-block align-text-top ml-auto">
      
    </a>
    <ul class = "ml-8 ">
    <div class="container-fluid sidebar-search hidden-md hidden-lg topnav-centered"  id ="searchfirst">
    <form id="searchitem" class="d-flex">
      <input  id ="search1"class="form-control "  type="search" style="width:500px; font-size: 18px;padding: 1px 30px;" placeholder="Search" aria-label="Search">
      <button id ="search2"class="btn btn-primary" style="font-size: 18px;padding: 1px 14px; " type="submit"><img src="./image/find.png" alt="" width="44" height="44" ></button>
    </form>
  </div>
  </ul>
    
  </div>

  
<div class="dropdown ml-auto">
  
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
    Danh mục sản phẩm
  </button>
  <ul class="dropdown-menu"  >
    <li><a class="dropdown-item" href= "{{ url('buildPC') }}"> <img src="./image/maytinh.png" alt="" width="24" height="24" style="margin-right:5px ;">máy Tính dựng sẵng</a></li>
    <li><a class="dropdown-item" href= "{{ url('buildPC') }}"><img src="./image/linhkien.png" alt="" width="24" height="24" style="margin-right:5px ;">linh kiện máy tính</a></li>
    <li><a class="dropdown-item" href= "{{ url('buildPC') }}"><img src="./image/phukien.png" alt="" width="24" height="24" style="margin-right:5px ;">phụ kiện</a></li>
    <li></li>
  </ul>
  

  </div>
  
</nav>
<hr class="shadow-sm" />
@yield('body')
<hr class="shadow-sm" />
		<footer align="center">Bản quyền &copy;{{ date('Y') }}  bởi Nguyễn Ra Băng.
    <p> {{ date('d-M-Y') }}</p>
		</footer>
</body>
</html>