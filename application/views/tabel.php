<html>
<header>
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>res/css/style.css"></script>
</header>
<body>
  <div class="col-md-5">
  <h3 class="h3 responsive text-xs-center">
  Form Bebas Tanggungan Jurusan Teknologi Informasi
</h3>
 <hr>
 <h4 class="text-left">
 <pre> NAMA 	:	<?= $mhs->nama_mahasiswa ?></pre>
 <pre> NIM	:  <?= $mhs->nim ?> </pre>
 <pre> PRODI 	: <?= $mhs->program_studi ?>	</pre>
 </h4>

  <table class="tg" align="" border="2">
	<colgroup>
	<col style="width: 44px">
	<col style="width: 240px">
	<col style="width: 358px">
	<col style="width: 158px">
	</colgroup>
  <tr>
    <th class="tg-hgcj">NO</th>
    <th class="tg-amwm" colspan="2">SUB BAGIAN</th>
    <th class="tg-amwm">ACTION</th>
  </tr>
  <tr>
    <td class="tg-yw4l" rowspan="8">1.</td>
    <td class="tg-9hbo" colspan="2">GUDANG DAN JURUSAN</td>
    <td class="tg-yw4l"></td>
  </tr>
  <tr>
    <td class="tg-y2tu" rowspan="2">ALAT DAN BHP<br><br></td>
    <td class="tg-yw4l">Kerusakan Komponen/Alat</td>
    <td class="tg-yw4l"><?= $data_tanggungan[0]->status ?></td>
  </tr>
  <tr>
    <td class="tg-yw4l">Peminjaman Komponen/Alat</td>
    <td class="tg-yw4l"><?= $data_tanggungan[1]->status ?></td>
  </tr>
  <tr>
    <td class="tg-y2tu" rowspan="2">TUGAS AKHIR</td>
    <td class="tg-yw4l">Distribusi CD Lap. Akhir</td>
    <td class="tg-yw4l"><?= $data_tanggungan[2]->status ?></td>
  </tr>
  <tr>
    <td class="tg-yw4l">Buku Petunjuk Operasional</td>
    <td class="tg-yw4l"><?= $data_tanggungan[3]->status ?></td>
  </tr>
  <tr>
    <td class="tg-yw4l" colspan="2">Penyerahan Alat/Buku Sumbangan</td>
    <td class="tg-yw4l"><?= $data_tanggungan[4]->status ?></td>
  </tr>
  <tr>
    <td class="tg-y2tu" rowspan="2">TATA TERTIB</td>
    <td class="tg-yw4l">Tanggungan Tatib</td>
    <td class="tg-yw4l"><?= $data_tanggungan[5]->status ?></td>
  </tr>
  <tr>
    <td class="tg-yw4l">Buku Tata Tertib</td>
    <td class="tg-yw4l"><?= $data_tanggungan[6]->status ?></td>
  </tr>
  <tr>
    <td class="tg-yw4l" rowspan="6">2.</td>
    <td class="tg-9hbo" colspan="2">PROGRAM STUDI</td>
    <td class="tg-yw4l"></td>
  </tr>
  <tr>
    <td class="tg-y2tu" rowspan="4">ADMINISTRASI PRODI</td>
    <td class="tg-yw4l">Distribusi Buku Lapangan Akhir</td>
    <td class="tg-yw4l"><?= $data_tanggungan[7]->status ?></td>
  </tr>
  <tr>
    <td class="tg-yw4l">Distribusi Laporan PKL</td>
    <td class="tg-yw4l"><?= $data_tanggungan[8]->status ?></td>
  </tr>
  <tr>
    <td class="tg-yw4l">Kompensasi</td>
    <td class="tg-yw4l"><?= $data_tanggungan[9]->status ?></td>
  </tr>
  <tr>
    <td class="tg-yw4l">KTM</td>
    <td class="tg-yw4l"><?= $data_tanggungan[10]->status ?></td>
  </tr>
  <tr>
    <td class="tg-y2tu">PUBLIKASI TUGAS AKHIR</td>
    <td class="tg-yw4l">Publikasi Seminar/Jurnal/Poster</td>
    <td class="tg-yw4l"><?= $data_tanggungan[11]->status ?></td>
  </tr>
  <tr>
    <td class="tg-yw4l" rowspan="3">3.</td>
    <td class="tg-9hbo" colspan="2">PERPUSTAKAAN POLITEKNIK NEGERI MALANG</td>
    <td class="tg-yw4l"></td>
  </tr>
  <tr>
    <td class="tg-yw4l" colspan="2">Peminjaman Buku</td>
    <td class="tg-yw4l"><?= $status_perpus ?></td>
  </tr>
  
</table>
<h5 class = "h5 responsive">
<br>Malang, ............ </br>
<br>Mahasiswa yang bersangkutan</br>
<br></br>
<br>_______________</br>
</h5>
</body>
</html>

<!-- <tr>
    <td class="tg-yw4l" colspan="2">Distribusi Buku Laporan Akhir</td>
    <td class="tg-yw4l"></td>
  </tr> -->
