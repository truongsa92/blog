<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

@include('layouts.header')

<div id="content">
	<h1> Truong Sa </h1>

	{{ isset($a) ? $a : '' }}

	@yield('NoiDung')
	
<div>

@include('layouts.footer')
