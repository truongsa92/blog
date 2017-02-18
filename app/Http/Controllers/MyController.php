<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class MyController extends Controller
{
	public function XinChao() {
		echo "Chao cac ban";
	}

	public function KhoaHoc($ten, $ten2) {
		echo $ten.'<br>';
		echo $ten2;
		// return redirect()->route('MyRoute');
	}

	public function GetURL(Request $request) {
		// if($request->isMethod('get')) {
		// 	echo 'phuong thuc get';
		// } else {
		// 	echo 'khong phai phuong thuc get';
		// }
		// if($request->is('My*')) {
		// 	echo "co My";
		// } else {
		// 	echo "k co My";
		// }
		return $request->path();
	}

	public function PostForm(Request $request) {
		echo 'ten cua ban la:';
		return $request->HoTen;
	}

	public function setCookie() {
		$response = new Response();
		$response->withCookie(
			'KhoaHoc',
			'Laravel',
			1
		);
		echo "Da set cookie";
		return $response;
	}

	public function getCookie(Request $request) {
		echo "Cookie cua ban la: ";
		return $request->cookie('KhoaHoc');
	}

	public function postFile(Request $request) {
		$file = $request->file('myFile');
		$fileName = $file->getClientOriginalName();
		$file->move('img', $fileName.$file->getClientOriginalExtension());
	}

	public function getJson() {
		$arrayy = ['Laravel', 'Php', 'Java', 'NodeJs', 'KhoaHoc' => 'Laravel'];
		return response()->json($arrayy);
	}

	public function myView() {
		return view('myView');
	}

	public function time($t) {
		return view('myView', ['t' => $t]);
	}

	public function blade($a) {
		return view('layouts.master', ['a' => $a]);
	}
}















