<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <title>Data Siswa</title>
</head>
<body>
    <div class="container">
        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{ (session('sukses')) }}
        </div>
        @endif
        <div class="row">
            <div class="col-6">
                <h1>Siswa Kelas XI RPL 1</h1>
            </div>
            <div class="col-6">
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#tambahData">
                    Tambah Data
                </button>
            </div>
            <table class="table table-hover">
                <tr>
                    <th>#</th>
                    <th>Nama Depan</th>
            <th>Nama Belakang</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Alamat</th>
        </tr>
        @foreach ($siswa as $result)
        <tr>
            <td>{{ $loop->index+1 }}</td>
            <td>{{ $result->nama_depan }}</td>
            <td>{{ $result->nama_belakang }}</td>
            <td>{{ $result->jenis_kelamin }}</td>
            <td>{{ $result->agama }}</td>
            <td>{{ $result->alamat }}</td>
            <td>
                <a href="/siswa/{{$result->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                <a href="/siswa/{{$result->id}}/delete" class="btn btn-danger btn-sm">Hapus</a>
            </td>
        </tr>
        @endforeach
        </table>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

<!-- Modal -->
<div class="modal" tabindex="-1" id="tambahData" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Input Data Siswa</h5>
      </div>
      <div class="modal-body">
        <form action="/siswa/create" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label>Nama Depan</label>
                <input type="text" name="nama_depan" class="form-control" placeholder="Masukkan Nama Depan">
            </div>
            <div class="form-group">
                <label>Nama Belakang</label>
                <input type="text" name="nama_belakang" class="form-control" placeholder="Masukkan Nama Belakang">
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-select">
                    <option value="" selected disabled>Pilih Salah Satu</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select name="agama" class="form-select">
                    <option value="" selected disabled>Pilih Salah Satu</option>
                    <option value="Laki-Laki">Islam</option>
                    <option value="Kristen Protestan">Kristen Protestan</option>
                    <option value="Kristen Katolik">Kristen Katolik</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Hindu">Hindu</option>
                </select>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
    </div>
  </div>
</div>