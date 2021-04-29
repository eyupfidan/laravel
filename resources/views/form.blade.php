<html>
<head>
    <title>Form Sayfası</title>
    <meta charset="UTF-8">
</head>
<body>
<form action="{{route('sonuc') }}" method="post">
    @csrf
    <textarea name="metin">

    </textarea>
    <input type="submit" name="gonder" value="Gönder">

</form>
</body>
</html>

