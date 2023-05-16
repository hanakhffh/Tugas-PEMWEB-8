<?php
    include 'koneksi.php';
?>
<html>

<head>
    <title>FORMULIR PESERTA DIDIK</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>

    <?php
    $error_nama= "";
    $error_tahun_lahir= "";
    $error_pendidikan = "";
    $error_pekerjaan = "";
    $error_penghasilan_bulan = "";
    $error_berkebutuhan_khusus = "";

    $nama= "";
    $tahun_lahir = "";
    $pendidikan= "";
    $pekerjaan = "";
    $penghasilan_bulan = "";
    $berkebutuhan_khusus = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["tahun_lahir"])) {
            $error_tahun_lahir = "Tanggal Lahir Tidak Boleh Kosong";
        } else {
            $tlayah = cek_input($_POST["tahun_lahir"]);
            if (!is_numeric($tahun_lahir)) {
                $error_tahun_lahir = "Tanggal Lahir Hanya Boleh Angka";
            }
        }

    }

    function cek_input($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <br>
    <h1 class="text-center">FORMULIR PESERTA DIDIK</h1><br>
    <div class="card">
        <div class="card-header bg-success text-white">
            DATA AYAH KANDUNG
        </div>
        <div class="card-body">
            <form method="post" action="simpan3.php">

                <div class="form-group row">
                    <label for="nama_ayah" class="col-sm-2 col-form-label">Nama Ayah Kandung</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama" id="nama"
                            class="form-control <?php echo ($error_nama !="" ? "is-invalid" : ""); ?>" placeholder=""
                            value="<?php echo $nama; ?>"> <span class="warning"><?php echo $error_nama ?></span>
                    </div>
                </div><br>

                <div class="form-group row">
                    <label for="tahun_lahir" class="col-sm-2 col-form-label">Tahun Lahir</label>
                    <div class="col-sm-10">
                        <input type="text" name="tahun_lahir" id="tahun_lahir"
                            class="form-control <?php echo ($error_tahun_lahir !="" ? "is-invalid" : ""); ?>"
                            placeholder="" value="<?php echo $tahun_lahir; ?>"> <span
                            class="warning"><?php echo $error_tahun_lahir ?></span>
                    </div>
                </div><br>

                <div class="form-group row">
                    <label for="pendidikan" class="col-sm-2 col-form-label "> Pendidikan </label>
                    <div class="col-sm-10">
                        <select class="form-control" name="pendidikan">
                            <option value=""></option>
                            <option value="Tidak Sekolah"> Tidak Sekolah </option>
                            <option value="Putus SD"> Putus SD </option>
                            <option value="SD Sederajat"> SD Sederajat </option>
                            <option value="SMP Sederajat"> SMP Sederajat </option>
                            <option value="SMA Sederajat"> SMA Sederajat </option>
                            <option value="D1"> D1 </option>
                            <option value="D2"> D2 </option>
                            <option value="D3"> D3 </option>
                            <option value="D4/S1"> D4/S1 </option>
                            <option value="S2"> S2 </option>
                            <option value="S3"> S3 </option>
                        </select>
                        <span class="warning"><?php echo $error_pendidikan; ?></span>
                    </div>
                </div><br>

                <div class="form-group row">
                    <label for="pekerjaan" class="col-sm-2 col-form-label "> Pekerjaan </label>
                    <div class="col-sm-10">
                        <select class="form-control" name="pekerjaan">
                            <option value=""></option>
                            <option value="Tidak Bekerja"> Tidak Bekerja </option>
                            <option value="Nelayan"> Nelayan </option>
                            <option value=" Petani "> Petani </option>
                            <option value="Peternak"> Peternak </option>
                            <option value="PNS/TNI/POLRI"> PNS/TNI/POLRI </option>
                            <option value="KaryawanSwasta"> Karyawan Swasta </option>
                            <option value="PedagangKecil"> Pedagang Kecil </option>
                            <option value="PedagangBesar"> Pedagang Besar </option>
                            <option value="Wiraswasta"> Wiraswasta </option>
                            <option value="Wirausaha"> Wirausaha </option>
                            <option value="Buruh"> Buruh </option>
                            <option value="Pensiunan"> Pensiunan </option>
                            <option value="Lainnya"> Lainnya </option>
                        </select>
                        <span class="warning"><?php echo $error_pekerjaan; ?></span>
                    </div>
                </div><br>
                <div class="form-group row">
                    <label for="penghasilan" class="col-sm-2 col-form-label">Penghasilan Bulanan</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="penghasilan_bulan">
                            <option value=""></option>
                            <option value="< 500.000">
                                < 500.000 </option>
                            <option value="500.000 - 999.999"> 500.000 - 999.999 </option>
                            <option value=" 1 juta - 1.999.999 "> 1 juta - 1.999.999 </option>
                            <option value="2 juta - 4.999.999"> 2 juta - 4.999.999 </option>
                            <option value="5 juta - 20 juta"> 5 juta - 20 juta </option>
                            <option value=" > 20 juta "> > 20 juta </option>
                        </select>
                        <span class="warning"><?php echo $error_penghasilan_bulan; ?></span>
                    </div>
                </div><br>

                <div class="form-group row">
                    <label for="berkebutuhan_khusus" class="col-sm-2 col-form-label "> Berkbutuhan Khusus </label>
                    <div class="col-sm-10">
                        <select class="form-control" name="berkebutuhan_khusus">
                            <option value=""></option>
                            <option value="Tidak"> Tidak </option>
                            <option value="Netra"> Netra (A) </option>
                            <option value="Rungu"> Rungu (B) </option>
                            <option value="Grahita Ringan"> Grahita Ringan (C) </option>
                            <option value="Grahita Sedang"> Grahita Sedang (C1) </option>
                            <option value="Daksa Ringan"> Daksa Ringan (D) </option>
                            <option value="Laras"> Laras (E) </option>
                            <option value="Wicara"> Wicara (F) </option>
                            <option value="Tuna Ganda"> Tuna Ganda (G) </option>
                            <option value="Hiper Aktif"> Hiper Aktif (H) </option>
                            <option value="Cerdas Istimewa"> Cerdas Istimewa (I) </option>
                            <option value="Bakat Istimewa"> Bakat Istimewa (J) </option>
                            <option value="Kesulitan Belajar"> Kesulitan Belajar (K) </option>
                            <option value="Narkoba"> Narkoba (N) </option>
                            <option value="Indigo"> Indigo (O) </option>
                            <option value="Down Syndrom"> Down Syndrom (P) </option>
                            <option value="Autis"> Autis (Q) </option>
                            <option value="Lainnya"> Lainnya </option>
                        </select>
                        <span class="warning"><?php echo $error_berkebutuhan_khusus; ?></span>
                    </div>
                </div>

                <br>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>