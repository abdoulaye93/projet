@if (count($errors) > 0)
<ul><li>{{ $errors }}</li></ul>
@endif
<form action="/upload" enctype="multipart/form-data" method="post">
{{ csrf_field() }} 
Product name: <br>
<input name="name" type="text"> 
<br><br>
Product photos (can attach more than one): <br>
<input multiple="multiple" name="photos[]" type="file"> 
<br><br>
<input type="submit" value="Upload">
</form>