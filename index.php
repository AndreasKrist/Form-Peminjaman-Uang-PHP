<?php

if(isset($_POST['hitung']))
$nama=$_POST['nama'];
$jk=$_POST['jk'];
$tempat=$_POST['tempat'];
//$tanggal=$_POST['tanggal'];//
$ibu=$_POST['ibu'];
$nik=$_POST['nik'];
$nomor=$_POST['nomor'];
$email=$_POST['email'];
$alamat=$_POST['alamat'];
$image=$_POST['image'];
$penghasilan=$_POST['penghasilan'];
$pinjaman=$_POST['pinjaman'];
$alasan=$_POST['alasan'];
$jangka=$_POST['jangka'];

//biar format hari - bulan - tahun //
if(!empty($_POST['tanggal'])){
    $date = $_POST['tanggal'];
    $date = strtotime($date);
    $date = date('d-m-y', $date);
    //y-m-d
    //d-m-y
    
}
//Perhitungan//

$admin=$pinjaman*0.025 ;
$provisi=$pinjaman*0.05 ; 
$cair=$pinjaman - $admin - $provisi ; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 4 - FORM PENGAJUAN PINJAMAN</title>
    <link rel="icon" type="image/x-icon" href="logo.svg"> 
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Shade&family=Cinzel+Decorative:wght@400;900&family=Hubballi&family=Jost:wght@100;200;300;400;500;600;700;800;900&family=Rubik+Mono+One&display=swap" rel="stylesheet">
    <style>
        .cair {
            color: green;
            display: inline-block;
            text-align: center;
            font-size: 2rem;
        }
        .tengah{
            text-align: center;
        }
        .email {
            font-size: 1rem;
        }
        .keterangan {
            margin-top : 2rem ;
        }
    </style>
</head>
<body>
   <div class="container">

   <div class="judul">
        <h1>Detail Pengajuan Pinjaman</h1>
        <hr>
   </div>

   <div class="content">
            <table border="0" align="center">
                <tr><td>Nama Lengkap</td><td>:</td><td><?php echo $nama; ?></td></tr>
                <tr><td>Jenis Kelamin</td><td>:</td><td><?php echo $jk; ?></td></tr>
                <tr><td>Tempat Lahir</td><td>:</td><td><?php echo $tempat; ?></td></tr>
                <tr><td>Tanggal Lahir</td><td>:</td><td><?php echo $date; ?></td></tr>
                <tr><td>Nama Ibu kandung</td><td>:</td><td><?php echo $ibu; ?></td></tr>
                <tr><td>NIK</td><td>:</td><td><?php echo $nik; ?></td></tr>
                <tr><td>No. Telepon</td><td>:</td><td><?php echo $nomor; ?></td></tr>
                <tr><td>Email</td><td>:</td><td><?php echo $email; ?></td></tr>
                <tr><td>Alamat</td><td>:</td><td><?php echo $alamat; ?></td></tr>
                <tr><td>Foto selfie ktp</td><td>:</td><td><?php echo $image; ?></td></tr>
                <tr><td>Kategori penghasilan</td><td>:</td><td><?php echo $penghasilan; ?></td></tr>
                <tr><td>Jumlah Pinjaman</td><td>:</td><td>Rp<?php echo $pinjaman; ?></td></tr>
                <tr><td>Kategori Pinjaman</td><td>:</td><td><?php echo $alasan; ?></td></tr>
                <tr><td>Jangka waktu pinjaman</td><td>:</td><td><?php echo $jangka; ?></td></tr>
                <tr><td>Biaya Administrasi</td><td>:</td><td>Rp<?php echo $admin; ?></td></tr>
                <tr><td>Biaya Provisi</td><td>:</td><td>Rp<?php echo $provisi; ?></td></tr>
                <tr>
                    <td class="tengah" colspan="3">
                        <div class="keterangan">Jumlah pinjaman yang dicairkan </div>
                    </td>
                </tr> 
                <tr>
                    <td class="tengah" colspan="3">
                    <div class="cair">Rp<?php echo $cair; ?></div>
                    </td>
                </tr> 
                <tr>
                    <td class="tengah" colspan="3">
                    <div class="email">*Mohon menunggu dan periksa email anda : <?php echo $email; ?></div>
                    </td>
                </tr> 
                
            </table>
    </div>
    <form action="index.html" style="padding-left:20px;">
    <input type="submit" value="Kembali"/>
    </form>
    <marquee>- Andreas Mardohar Kristianto/XIIA3/05 -</marquee>
   </div>
</body>
</html>