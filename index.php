<!DOCTYPE html>
<html>

<head>
    <title>On-Boarding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <center>
        <h1>On Boarding Karyawan Baru</h1>
    </center>
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <form method="POST">
                <div class="form-group">
                    <label>NIP</label>
                    <input type="number" name="nip" class="form-control">
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control">
                </div>
                <div class="form-group">
                    <label>Posisi</label>
                    <input type="text" name="posisi" class="form-control">
                </div>
                <div class="form-group">
                    <label>Unit Kerja</label>
                    <input type="text" name="unit" class="form-control">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control">
                </div>
                <div class="form-group">
                    <label>Telepon</label>
                    <input type="text" name="telpon" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <button type="submit" name="simpan" class="btn btn-primary">Save</button>
            </form>
        </div>
        <div class="col"></div>

    </div>
</body>

</html>
<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $nip = $_POST['nip'];
    $pos = $_POST['posisi'];
    $unit = $_POST['unit'];
    $alamat = $_POST['alamat'];
    $tel = $_POST['telpon'];
    $email = $_POST['email'];

    echo '<script type ="text/JavaScript">';
    echo 'alert("Data Karyawan\nNama: ' . $nama . '\nNIP: ' . $nip . '\nPosisi:' . $pos . '\nUnit Kerja:' . $unit . '\nAlamat:' . $alamat . '\nTelepon:' . $tel . '\nEmail:' . $email . '")';
    echo '</script>';
}
?>