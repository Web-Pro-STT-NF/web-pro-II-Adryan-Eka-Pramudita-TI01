<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 1</title>
</head>

<body>
    <?php
    // definisikan variables
    $nama = 'Adryan Eka Pramudita';
    $umur = 20;
    $berat = 48;

    echo 'Nama : ' . $nama;
    echo '<br/>Umur : ' . $umur . ' Tahun';
    echo '<br/>Berat : ' . $berat . ' Kg';

    echo "<br/>Hello $nama Apakabar";
    ?>
    <?php
    // variable system
    echo '<br/>Dokumen Root ' . $_SERVER["DOCUMENT_ROOT"];
    echo '<br/>Nama File ' . $_SERVER["PHP_SELF"];
    ?>
    <?php
    // definisikan konstansta
    define('PHI', 3.14);
    define('DBNAME', 'inventori');
    define('DBSERVER', 'localhost');

    $jari = 8;
    $luas = PHI * $jari * $jari;
    $kll = 2 * PHI * $jari;

    echo '<br/>Luas Lingkaran dengan Jari ' . $jari . ' : ' . $luas;
    echo '<br/>Kelilingnya : ' . $kll;
    ?>
    <hr>
    <?php
    echo 'Nama database : ' . DBNAME;
    echo '<br/>Lokasi databasenya ada di ' . DBSERVER;
    ?>
    <?php
    $ar_buah = ["Pepaya", "Mangga", "Pisang", "Jambu"];
    // cetak buah ke index ke 2
    echo $ar_buah[2];
    // cetak jumlah buah
    echo '<br/>Jumlah Buah ' . count($ar_buah);
    // cetak seluruh buah
    echo '<ol>';
    foreach ($ar_buah as $buah) {
        echo '<li>' . $buah . '</li>';
    }
    echo '</ol>';
    // tambahkan buah
    $ar_buah[] = "Durian";
    // hapus buah index ke 1
    unset($ar_buah[1]);
    // ubah buah index ke 2 menjadi Manggis
    $ar_buah[2] = "Manggis";
    // cetak seluruh buah dengan index nya
    echo '<ul>';
    foreach ($ar_buah as $k => $v) {
        echo '<li> buah index - ' . $k . ' adalah ' . $v . '</li>';
    }
    echo '</ul>';
    ?>
    <?php
    $ar_buah = ["p" => "Pepaya", "a" => "Apel", "m" => "Mangga", "j" => "Jambu"];
    echo '<ol>';
    foreach ($ar_buah as $k => $v) {
        echo '<li>' . $k . ' - ' . $v . '</li>';
    }
    echo '</ol>';
    sort($ar_buah);
    echo '<hr/>';
    echo '<ol>';
    foreach ($ar_buah as $k => $v) {
        echo '<li>' . $k . ' - ' . $v . '</li>';
    }
    echo '</ol>';
    ?>
    <hr>
    <?php
    $tims = ["erwin", "heru", "ali", "zaki"];
    array_pop($tims);
    foreach ($tims as $person) {
        echo $person . '<br/>';
    }
    ?>
    <hr>
    <?php
    $ns1 = ['id' => 1, 'nim' => '01101', 'uts' => 80, 'uas' => 84, 'tugas' => 78];
    $ns2 = ['id' => 2, 'nim' => '01121', 'uts' => 70, 'uas' => 50, 'tugas' => 68];
    $ns3 = ['id' => 3, 'nim' => '01130', 'uts' => 60, 'uas' => 86, 'tugas' => 70];
    $ns4 = ['id' => 4, 'nim' => '01134', 'uts' => 90, 'uas' => 91, 'tugas' => 82];

    $ar_nilai = [$ns1, $ns2, $ns3, $ns4];

    ?>
    <h3>Daftar Nilai Siswa</h3>
    <table border="1" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Tugas</th>
                <th>Nilai Akhir</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($ar_nilai as $ns) {
                echo '<tr><td>' . $nomor . '</td>';
                echo '<td>' . $ns['nim'] . '</td>';
                echo '<td>' . $ns['uts'] . '</td>';
                echo '<td>' . $ns['uas'] . '</td>';
                echo '<td>' . $ns['tugas'] . '</td>';
                $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas']) / 3;
                echo '<td>' . number_format($nilai_akhir, 2, ',', '.') . '</td>';
                echo '<tr/>';
                $nomor++;
            }
            ?>
        </tbody>
    </table>

</body>

</html>