<!DOCTYPE html>
<html>
    <head>
    <meta name="csrf-token" content="P53BTXlZnPJrZndR2wcgZ4Y6HDV5HA8mNobuDTTa">
    <title>N&B Shop - cửa hàng bán linh kiện máy tính</title>
    <link rel="shortcut icon" type="image" href="./image/logo.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
<nav class="navbar navbar-light bg-light ml-auto">
<div class="container-fluid">
  <a name = "homeid"class="navbar-brand ml-auto"  href="{{ url('home') }}">
      <img src="./image/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top ml-auto">
      N&B shop @yield('title')
    </a>
    
    <ul class= "ml-2">
    
  <button type="button" class="btn btn-danger"> <img src="./image/giohang.png" alt="" width="24" height="24" class="d-inline-block align-text-top ml-auto">Giỏ Hàng</button>
  <button type="button" class="btn btn-danger"> <img src="./image/iconuser.png" alt="" width="24" height="24" class="d-inline-block align-text-top ml-auto">Đăng Nhập</button>
 
  </ul>
  </div>

  
<div class="dropdown ml-auto">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
    Danh mục sản phẩm
  </button>
  <ul class="dropdown-menu"  >
    <li><a class="dropdown-item" href= "{{ url('buildPC') }}">Máy Tính dựng sẵng</a></li>
    <li><a class="dropdown-item" href= "{{ url('buildPC') }}">linh kiện máy tính</a></li>
    <li><a class="dropdown-item" href= "{{ url('buildPC') }}">phụ kiện</a></li>
  </ul>
  

  </div>
  
</nav>
@yield('body')
<hr class="shadow-sm" />
		<footer align="center">Bản quyền &copy;{{ date('Y') }}  bởi Nguyễn Ra Băng.
    <p> {{ date('d-M-Y') }}</p>
		</footer>
</body>
</html>