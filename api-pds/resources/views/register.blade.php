<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>

<body>
    @if (session()->has('success'))
        {{ session('success') }}
    @endif
    <form action="/registrasi" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="name">
        <input type="email" name="email" placeholder="email">
        <input type="text" name="telp" placeholder="Telepon">
        <select name="role" id="">
            <option value="Super Admin">Super Admin</option>
            <option value="Lab Manager UREL">Lab Manager UREL</option>
            <option value="Document Controller 1">Document Controller 1</option>
            <option value="Document Controller 2">Document Controller 2</option>
            <option value="Bagian UREL">Bagian UREL</option>
            <option value="SM IAS">SM IAS</option>
            <option value="Lab Manager DEQA">Lab Manager DEQA</option>
            <option value="Lab Manager IQA">Lab Manager IQA</option>
            <option value="Lab Device">Lab Device</option>
            <option value="Lab Energy">Lab Energy</option>
            <option value="Lab Kabel dan Aksesoris FTTH">Lab Kabel dan Aksesoris FTTH</option>
            <option value="Lab Transmisi">Lab Transmisi</option>
            <option value="Lab Kalibrasi">Lab Kalibrasi</option>
        </select>
        <input type="file" name="photo">
        <button type="submit">Submit</button>
    </form>
</body>

</html>
