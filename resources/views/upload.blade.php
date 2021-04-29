<html>
<head>
    <title>Resim Upload Uygulaması</title>
</head>
<body>
<form action="{{route('upload_img')}}" method="post" enctype="multipart/form-data">

    <!-- CROSS Site Request Forgery Protection -->
    @csrf
<input type="file" name="dosya" >
    <input type="submit" value="Gönder">

</form>
</body>
</html>
