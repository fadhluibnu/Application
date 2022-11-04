<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Import Excel Ke Database | Laravel</title>
</head>

<body>
    <div class="container">

        <center>
            <h4>Import Excel Ke Database Dengan Laravel</h4>
            <h5><a href="" target="_blank"></a></h5>
        </center>

        {{-- notifikasi form validasi --}}

        @if ($errors->has('file'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('file') }}</strong>
            </span>
        @endif

        {{-- notifikasi sukses --}}
        @if (session()->has('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $sukses }}</strong>
            </div>
        @endif

        <button type="button" class="btn btn-primary mr-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            IMPORT EXCEL
        </button>
        <!-- Import Excel -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form method="post" action="/siswa/import_excel" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                        </div>
                        <div class="modal-body">

                            {{ csrf_field() }}

                            <label>Pilih file excel</label>
                            <div class="form-group">
                                <input type="file" name="file" required="required">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Import</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <a href="/siswa/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>

        <table class='table table-bordered'>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIS</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                @php $i=1 @endphp
                @foreach ($siswa as $s)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $s->nama }}</td>
                        <td>{{ $s->nis }}</td>
                        <td>{{ $s->alamat }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
