<?php
include('koneksi.php');
require '../vendor/autoload.php';

$no = 1;
$data_list = [];
$select = mysqli_query($connect, "SELECT * FROM guru");

// Mengumpulkan data dari tabel guru dan kriteria
while ($data_nilai = mysqli_fetch_array($select)) {
    $vector_sums = [];
    $select_bobot = mysqli_query($connect, "SELECT * FROM kriteria");

    while ($data_bobot = mysqli_fetch_array($select_bobot)) {
        $total_bobot = $data_bobot['pm'] + $data_bobot['ab'] + $data_bobot['pre'] + $data_bobot['tj'] + $data_bobot['dis'];
        $bobot_1 = $data_bobot['pm'] / $total_bobot;
        $bobot_2 = $data_bobot['ab'] / $total_bobot;
        $bobot_3 = $data_bobot['pre'] / $total_bobot;
        $bobot_4 = $data_bobot['tj'] / $total_bobot;
        $bobot_5 = $data_bobot['dis'] / $total_bobot;

        $vector = pow($data_nilai['pm'], $bobot_1) *
            pow($data_nilai['ab'], $bobot_2) *
            pow($data_nilai['pre'], $bobot_3) *
            pow($data_nilai['tj'], $bobot_4) *
            pow($data_nilai['dis'], $bobot_5);

        $vector_sums[] = $vector;
    }
    $total_vector_s = array_sum($vector_sums);
    $data_list[] = [
        'no' => $no,
        'nama_guru' => $data_nilai['nama_guru'],
        'pm' => $data_nilai['pm'],
        'ab' => $data_nilai['ab'],
        'pre' => $data_nilai['pre'],
        'tj' => $data_nilai['tj'],
        'dis' => $data_nilai['dis'],
        'vector_s' => number_format($total_vector_s, 2, '.', ''),
    ];
    $no++;
}

// Menghitung Vector V setelah Vector S diketahui
foreach ($data_list as &$data) {
    $vector_s = floatval($data['vector_s']);
    $vector_v = $vector_s / array_sum(array_column($data_list, 'vector_s'));
    $data['vector_v'] = number_format($vector_v, 2, '.', '');
}

// Urutkan array berdasarkan vector_v
usort($data_list, function ($a, $b) {
    return $b['vector_v'] <=> $a['vector_v'];
});

// reference the Dompdf namespace
use Dompdf\Dompdf;
// instantiate and use the dompdf class
$dompdf = new Dompdf();

// Encode images to base64
$logo1_path = '../images/logo1.png'; // Ubah path ini sesuai lokasi gambar
$logo2_path = '../images/logo2.png'; // Ubah path ini sesuai lokasi gambar

if (file_exists($logo1_path) && file_exists($logo2_path)) {
    $logo1 = base64_encode(file_get_contents($logo1_path));
    $logo2 = base64_encode(file_get_contents($logo2_path));
} else {
    die('Gambar tidak ditemukan. Pastikan path gambar benar.');
}

$days = [
    'Sunday' => 'Minggu',
    'Monday' => 'Senin',
    'Tuesday' => 'Selasa',
    'Wednesday' => 'Rabu',
    'Thursday' => 'Kamis',
    'Friday' => 'Jumat',
    'Saturday' => 'Sabtu'
];

// Array untuk nama bulan dalam bahasa Indonesia
$months = [
    'January' => 'Januari',
    'February' => 'Februari',
    'March' => 'Maret',
    'April' => 'April',
    'May' => 'Mei',
    'June' => 'Juni',
    'July' => 'Juli',
    'August' => 'Agustus',
    'September' => 'September',
    'October' => 'Oktober',
    'November' => 'November',
    'December' => 'Desember'
];

// Mendapatkan tanggal saat ini
$date = new DateTime();

// Mendapatkan hari, bulan, dan tahun dalam bahasa Inggris
$day = $days[$date->format('l')]; // Mengambil nama hari dan konversi ke bahasa Indonesia
$dayNumber = $date->format('d'); // Mengambil nomor hari
$month = $months[$date->format('F')]; // Mengambil nama bulan dan konversi ke bahasa Indonesia
$year = $date->format('Y'); // Mengambil tahun

// Menggabungkan semua menjadi satu string
$formattedDate = "Bogor, $day $dayNumber $month $year";

// Generate HTML content
$html = '
<center>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .header {
            width: 100%;
            margin-bottom: 20px;
            border-bottom: 1px solid black;
            padding-bottom: 10px;
            text-align: center;
        }

        .header img {
            width: 100px;
        }

        .info {
            text-align: center;
        }

        .info h1 {
            font-size: 20px;
        }

        .info h2 {
            font-size: 19px;
        }

        .info p {
            margin: 5px 0;
            font-size: 13px;
        }

        .table-container {
            margin-top: 20px;
            width: 100%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .table-header {
            border: none;
        }

        .table-header td {
            border: none;
        }

        th, td {
            padding: 8px;
            text-align: center; /* Pusatkan teks dalam tabel */
            vertical-align: middle; /* Pusatkan vertikal */
        }

        .signature {
            width: 100%;
            display: flex;
            justify-content: flex-end;
            margin-top: 40px;
            margin-left: 200px; /* Kurangi margin untuk memindahkan ke kiri */
        }

        .signature div {
            left:20px;
        }

        .table-data tr, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <div class="header">
        <table class="table-header">
            <tr>
                <td><img src="data:image/png;base64,' . $logo1 . '" alt="Logo 1"></td>
                <td class="info">
                    <h1>YAYASAN PENDIDIKAN HAJI NOOR HASYIM</h1>
                    <h2>SMP WIRA BUANA</h2>
                    <p>Jl. Camat Kanas RT.05 RW.07 No.13 Ds. Pabuaran Kec. Bojonggede Kab. Bogor Jawa Barat 16920</p>
                    <p>NPSN: 20258398; Telepon: (021) 8798456 E-Mail: smpwirasbuana1@gmail.com</p>
                </td>
                <td><img src="data:image/png;base64,' . $logo2 . '" alt="Logo 2"></td>
            </tr>
        </table>
    </div>

    <div class="table-container" >
        <table class="table" style="margin-right=30px">
            <thead>
                 <tr class="bg-light">
                    <th class="border-top-0" rowspan="2">No</th>
                    <th class="border-top-0" rowspan="2">Nama Guru</th>
                    <th class="border-top-0" rowspan="2">Rangking</th>
                    <th class="border-top-0" colspan="5">Kriteria Penilaian</th>
                    <th class="border-top-0" rowspan="2">Vector S</th>
                    <th class="border-top-0" rowspan="2">Vector V</th>
                </tr>
                <tr class="bg-light">
                    <th class="border-top-0">Penyampaian Materi</th>
                    <th class="border-top-0">Absensi</th>
                    <th class="border-top-0">Prestasi</th>
                    <th class="border-top-0">Tanggung Jawab</th>
                    <th class="border-top-0">Disiplin</th>
                </tr>
            </thead>
            <tbody>
';

$ranking = 1;
foreach ($data_list as $data) {
    $html .= '
                <tr>
                    <td>' . $ranking . '</td>
                    <td>' . $data['nama_guru'] . '</td>
                    <td>' . $ranking . '</td>
                    <td>' . $data['pm'] . '</td>
                    <td>' . $data['ab'] . '</td>
                    <td>' . $data['pre'] . '</td>
                    <td>' . $data['tj'] . '</td>
                    <td>' . $data['dis'] . '</td>
                    <td>' . $data['vector_s'] . '</td>
                    <td>' . $data['vector_v'] . '</td>
                </tr>';
    $ranking++;
}

$html .= '
            </tbody>
        </table>
    </div>
    <div class="signature">
        <div>
            <p style="text-align:center;">' . $formattedDate . '</p>
            <p style="text-align:center;">Kepala Sekolah</p>
            <br><br><br><br>
            <p style="text-align:center;">Dhea Hanna, M.I.Kom</p>
        </div>
    </div>
</body>
</html>
';

// Load HTML content into Dompdf
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("hasil_penilaian_guru.pdf", ["Attachment" => false]);
