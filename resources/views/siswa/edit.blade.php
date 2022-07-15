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
        <h1>Siswa Kelas XI RPL 1</h1>
        <form action="/siswa/{{$siswa->id}}/update" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label>Nama Depan</label>
                <input type="text" name="nama_depan" class="form-control" value="{{$siswa->nama_depan}}">
            </div>
            <div class="form-group">
                <label>Nama Belakang</label>
                <input type="text" name="nama_belakang" class="form-control" value="{{$siswa->nama_belakang}}">
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-select">
                    <option value="" selected disabled>Pilih Salah Satu</option>
                    <option value="Laki-Laki" @if($siswa-> jenis_kelamin == 'Laki-Laki') selected @endif>Laki-Laki</option>
                    <option value="Perempuan" @if($siswa-> jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label>Agama</label>
                <select name="agama" class="form-select">
                    <option value="" selected disabled>Pilih Salah Satu</option>
                    <option value="Laki-Laki" @if($siswa-> agama == 'Islam') selected @endif>Islam</option>
                    <option value="Kristen Protestan" @if($siswa-> agama == 'Kristen Protestan') selected @endif>Kristen Protestan</option>
                    <option value="Kristen Katolik" @if($siswa-> agama == 'Kristen Katolik') selected @endif>Kristen Katolik</option>
                    <option value="Buddha" @if($siswa-> agama == 'Buddha') selected @endif>Buddha</option>
                    <option value="Hindu" @if($siswa-> agama == 'Hindu') selected @endif>Hindu</option>
                </select>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea type="text" name="alamat" class="form-control">{{$siswa->alamat}}</textarea>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-warning">Update</button>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>