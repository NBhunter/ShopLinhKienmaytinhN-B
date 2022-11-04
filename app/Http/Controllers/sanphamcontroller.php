<?php

namespace App\Http\Controllers;
use App\Models\sanpham;
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
		$sanpham = sanpham::paginate(25);
		return view('sanpham.danhsach', compact('sanpham'));
	}
}
