<h1>Upload a file</h1>
<form action="{{ url('/uploadFile') }}" method="post" enctype="multipart/form-data">
    @csrf
    Image: <input type="file" name="image" id="">  <br>
    <input type="submit" value="Upload">
</form>