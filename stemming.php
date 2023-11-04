<?php
// Mendefinisikan path file CSV yang akan dibaca
$data = 'datasets/bersih1.csv';

// Membuka file CSV untuk dibaca
$file = fopen($data, 'r');

// Membaca header (baris pertama) dari file CSV
$header = fgetcsv($file);

// Membuat array kosong untuk menyimpan data
$data = array();

// Membaca data dari file CSV dan menyimpannya dalam array
while (($row = fgetcsv($file)) !== false) {
    $data[] = $row;
}

// Menutup file CSV
fclose($file);

// Jumlah baris yang ditampilkan per halaman
$rowsPerPage = 10;

// Mendapatkan halaman yang sedang aktif
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

// Menghitung offset
$offset = ($currentPage - 1) * $rowsPerPage;

// Mengambil 10 dataset sesuai dengan halaman yang aktif
$dataset = array_slice($data, $offset, $rowsPerPage);

// Menghitung jumlah total halaman
$totalPages = ceil(count($data) / $rowsPerPage);

// Fungsi untuk menghasilkan tautan navigasi halaman dengan fungsi ellipsis
function generatePageLink($page, $text)
{
    return '<a href="' . $_SERVER['PHP_SELF'] . '?halaman=stemming&page=' . $page . '">' . $text . '</a> ';
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Proses Stemming</title>
    <link href="css/tabel.css" rel="stylesheet" />
</head>

<body>
    <h1>
        <center><b>Stemming</b></center>
    </h1> <br>
    <table>
        <tr>
            <center>
                <th>Normalization</th>
                <th>Stemming</th>
            </center>
        </tr>
        <?php foreach ($dataset as $row) : ?>
            <tr>
                <td><?php echo $row[7]; ?></td>
                <td><?php echo $row[8]; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <!-- Navigasi halaman -->
    <div class="pagination">
        <?php
        // Tampilkan tautan navigasi halaman awal jika tidak di halaman pertama
        if ($currentPage > 1) {
            echo generatePageLink(1, 'First');
        }

        // Tampilkan tautan navigasi halaman sebelumnya jika tidak di halaman pertama
        if ($currentPage > 1) {
            echo generatePageLink($currentPage - 1, 'Previous');
        }

        // Tampilkan tautan halaman saat ini dan beberapa halaman sebelumnya jika tidak di halaman awal
        for ($i = max(1, $currentPage - 2); $i <= $currentPage; $i++) {
            if ($i == $currentPage) {
                echo '<a class="active" href="#">' . $i . '</a> ';
            } else {
                echo generatePageLink($i, $i);
            }
        }

        // Tampilkan tautan halaman saat ini dan beberapa halaman setelahnya jika tidak di halaman akhir
        for ($i = $currentPage + 1; $i <= min($currentPage + 2, $totalPages); $i++) {
            if ($i == $currentPage) {
                echo '<a class="active" href="#">' . $i . '</a> ';
            } else {
                echo generatePageLink($i, $i);
            }
        }

        // Tampilkan tautan navigasi halaman berikutnya jika tidak di halaman terakhir
        if ($currentPage < $totalPages) {
            echo generatePageLink($currentPage + 1, 'Next');
        }

        // Tampilkan tautan navigasi halaman akhir jika tidak di halaman terakhir
        if ($currentPage < $totalPages) {
            echo generatePageLink($totalPages, 'Last');
        }
        ?>
    </div>
</body>

</html>