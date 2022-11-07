<?php

namespace App\Http\Controllers;
use App\Models\products;
use App\Models\LoaiSanPham;
use App\Imports\SanPhamImport;
use App\Exports\SanPhamExport;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Excel;
use File;
use Illuminate\Support\Facades\Storage;


class sanphamcontroller extends Controller
{
    public function getDanhSach()
	{
		$products = products::paginate(25);
		return view('products.list', compact('products'));
	}
}
