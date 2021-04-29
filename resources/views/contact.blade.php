<html>
<head>
    <title>İletisim Formu</title>
    <meta charset="UTF-8">
</head>
<body>
<form action="{{route('contact-res') }}" method="post">
    @csrf
    <label>Ad Soyad</label><br>
    <input type="text" name="adsoyad"><br>
    <label>Telefon</label><br>
    <input type="text" name="telefon"><br>
    <label>Mail</label><br>
    <input type="text" name="mail"><br>
    <label>Mesaj</label><br>
    <textarea name="metin" style="width=300px; height: 300px;" ></textarea><br>
    <input type="submit" name="gonder" value="Gönder">

</form>
</body>
</html>

