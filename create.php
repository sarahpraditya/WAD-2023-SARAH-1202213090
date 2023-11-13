<?php
    include("connect.php"); // Sertakan file koneksi

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil data dari form
        $nama_mobil = $_POST['nama_mobil'];
        $brand_mobil = $_POST['brand_mobil'];
        $warna_mobil = $_POST['warna_mobil'];
        $tipe_mobil = $_POST['tipe_mobil'];
        $harga_mobil = $_POST['harga_mobil'];

        // Query untuk menambahkan data
        $sql = "INSERT INTO showroom_mobil (nama_mobil, brand_mobil, warna_mobil, tipe_mobil, harga_mobil) VALUES ('$nama_mobil', '$brand_mobil', '$warna_mobil', '$tipe_mobil', $harga_mobil)";

        if ($koneksi->query($sql) === TRUE) {
            echo "
                <script>
                    alert('Data berhasil ditambahkan');
                    document.location.href = 'form_create_mobil.php';
                </script>
            ";
        } else {
            echo "
            <script>
                alert('Data gagal ditambahkan');
                document.location.href = 'form_create_mobil.php';
            </script>
            ";
        }
    }
    $koneksi->close();
?>