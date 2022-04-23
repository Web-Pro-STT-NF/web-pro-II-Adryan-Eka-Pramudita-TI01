<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container card pt-3">
        <div class="row">
            <div class="col-12">
                <p>Belanja Online</p>
            </div>
        </div>
        <hr>
            <form method="POST">
                <div class="form-group row">
                    <label for="name" class="col-4 col-form-label">Customer</label>
                    <div class="col-8">
                        <input id="name" name="pembeli" placeholder="Tulis Nama Anda" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Pilih Produk</label>
                    <div class="col-8">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="inlineCheckbox1" value="TV" name="barang">TV
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="inlineCheckbox2" value="Kulkas" name="barang">Kulkas
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="inlineCheckbox2" value="Mesin Cuci" name="barang">Mesin Cuci
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-4 col-form-label">Jumlah</label>
                    <div class="col-8">
                        <input id="name" name="jumlah" placeholder="Jumlah Barang" type="number" class="form-control">
                    </div>
                </div>
                <di v class="form-group row">
                    <div class="offset-4 col-8">
                        <input type="submit" value="submit" name="bayar" class="btn-success px-3 py-1">
                    </div>
                </di>
            </form>
            <?php
            $proses = isset($_POST['bayar']) ? $_POST['bayar'] : ' ';
            $customer = isset($_POST['pembeli']) ? $_POST['pembeli'] : ' ';
            $produk = isset($_POST['barang']) ? $_POST['barang'] : ' ';
            $jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : ' ';
            $harga = $jumlah;

            echo "Nama Customer : $customer";
            echo "<br> Produk yang di beli : $produk";
            echo "<br> Jumlah Barang yang dibeli : $jumlah";
          

            if($produk == "TV"){
                echo "<br>Total Belanja : " . $jumlah * 4200000 ;
            }
            elseif($produk == "Kulkas"){
                echo "<br>Total Belanja : " . $jumlah * 3100000 ;
            }
            elseif($produk == "Mesin Cuci"){
                echo "<br>Total Belanja : " . $jumlah * 3800000 ;
            }
            ?>
        </div>
        <div class="col-md-4">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active">Daftar Harga</a>
                <div class="list-group-item">
                    TV : 4.200.000
                </div>
                <div class="list-group-item">
                    KULKAS : 3.100.000
                </div>
                <div class="list-group-item justify-content-between">
                    MESIN CUCI : 3.800.000
                </div> <a href="#" class="list-group-item list-group-item-action active justify-content-between">Harga dapat berubah setiap saat</a>
            </div>
        </div>
    </div>
    </div>
    </body>
</html>