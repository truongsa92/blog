<form action="{{route('postFile')}}" method="post" enctype="multipart/form-data" >
 	<input type="file" name="myFile" >
 	<input type="submit" >
 	{{csrf_field()}} 
</form>