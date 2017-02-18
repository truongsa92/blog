<form action= "{{route('PostForm')}}" method= "POST" role="form" >
	<input type= "text" name = "HoTen" >
	<input type= "submit" >
	{{csrf_field()}} 
</form>