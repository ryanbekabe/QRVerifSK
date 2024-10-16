<?php
require('/assets/fpdf/FPDF.php');

// Membuat instance baru dari FPDF
class PDF extends FPDF
{
    function Header()
    {
        // Pengaturan font dan menambahkan judul
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, 'RS Islam PKU Muhammadiyah Palangka Raya', 0, 1, 'C');
        $this->SetFont('Arial', '', 10);
        $this->Cell(0, 10, 'Palangka Raya, Kalimantan Tengah', 0, 1, 'C');
        $this->Cell(0, 10, 'JL. RTA Milono KM 2.5 Telp: 0536 - 3244801', 0, 1, 'C');
        $this->Ln(10);
    }

    function Footer()
    {
        // Posisi 1.5 cm dari bawah
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        // Nomor halaman
        $this->Cell(0, 10, 'Page ' . $this->PageNo(), 0, 0, 'C');
    }
}

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 12);

// Konten PDF
$content = "
Palangka Raya, 19-09-2024

SURAT KETERANGAN SAKIT

Yang bertanda tangan dibawah ini menerangkan bahwa:
Nama Pasien: NN. MARINI NABABAN
Umur: 19 Tahun
Jenis Kelamin: Perempuan
Pekerjaan: Pelajar/Mahasiswa
Alamat: Sitabotabo Toruan, Siborong Borong, Tapanuli

Diagnosa:
Memerlukan istirahat selama 3 (tiga) hari karena sakit, terhitung dari tanggal 19-09-2024 sampai dengan 21-09-2024.

Demikian agar yang berkepentingan harap maklum.

Dokter Pemeriksa:
(dr. FARIDAH)
SIP. 503.2/0151/DPMPTSP/SIP.DOK/VI/2022
";

// Menambahkan teks ke PDF
$pdf->MultiCell(0, 10, $content);

// Output file PDF
$pdf->Output('D', 'SuratKeteranganSakitFPDF.pdf'); // 'D' untuk download
?>
