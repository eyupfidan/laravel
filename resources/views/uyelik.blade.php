<html>
<head>
    <title>Üye Kayıt Formu</title>
    <meta charset="UTF-8">
</head>
<body>
<form action="{{route('uye-kayit') }}" method="post">
    @csrf
    <label>Ad Soyad</label><br>
    <input type="text" name="adsoyad"><br>
    <label>Telefon</label><br>
    <input type="text" name="telefon"><br>
    <label>Mail</label><br>
    <input type="text" name="mail"><br>
    <input type="submit" name="gonder" value="Gönder">

</form>
<br>
@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
    </ul>
    @endforeach
@endif
</body>
</html>

