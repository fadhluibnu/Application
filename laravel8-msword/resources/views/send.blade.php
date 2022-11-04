<form action="/" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="filename">
    <button type="submit">Kirim</button>
</form>
