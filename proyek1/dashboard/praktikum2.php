<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method Post</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container card">
        <div class=""></div>
        <row>
            <div class="col 12 bg-light pt-3">
            <p>Sistem Penilaian</p>
            </div>
        </row>
        <row>
            <div class="col 12">
                <p>Form Nilai Siswa</p>
                <hr>
            </div>
        </row>
        <row>
            <div class="col 12">
            <form method="POST">
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                    <div class="col-8">
                    <input id="nama" name="nama" placeholder="masukan nama lengkap" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                    <div class="col-8">
                    <input id="matkul" name="matkul" placeholder="masukan mata kuliah" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
                    <div class="col-8">
                    <input id="nilai_uts" name="nilai_uts" placeholder="masukan nilai uts" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
                    <div class="col-8">
                    <input id="nilai_uas" name="nilai_uas" placeholder="masukan nilai uas" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label> 
                    <div class="col-8">
                    <input id="nilai_tugas" name="nilai_tugas" placeholder="masukan nilai tugas" type="text" class="form-control">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="proses" type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </div>
            </form>
            <?php
                $proses = isset($_POST['proses']) ? $_POST['proses'] : ""; 
                $nama = isset($_POST['nama']) ? $_POST['nama'] : "" ;
                $mata_kuliah = isset($_POST['matkul']) ? $_POST['matkul'] : "";
                $nilai_uts = isset($_POST['nilai_uts']) ? $_POST['nilai_uts'] : "";
                $nilai_uas = isset($_POST['nilai_uas']) ? $_POST['nilai_uas'] : "";
                $nilai_tugas = isset($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : "";
            
                echo "Nama : $nama";
                echo "<br/>Mata Kuliah : $mata_kuliah";
                echo "<br/>Nilai UTS : $nilai_uts";
                echo "<br/>Nilai UAS : $nilai_uas";
                echo "<br/>Nilai Tugas : $nilai_tugas";
            
            ?>
            </div>
        </row>
        <row>
            <div class="col 12 bg-light pt-3">
                <P>Develop by Mahasiswa STT NF</P>
            </div>
        </row>
    </div>
</body>
</html>