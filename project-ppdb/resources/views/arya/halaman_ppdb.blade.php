<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Halaman Informasi PPDB</title>
    
    <link rel="stylesheet" href="{{ asset('halaman_ppdb.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>
<header class="navbar">
  <div class="nav-container">

    <div class="logo">
      <i class="fa-solid fa-graduation-cap"></i>
      <div>
        <h2>PPDB Online</h2>
        <span>2026</span>
      </div>
    </div>

    <nav class="nav-menu" style="display: flex; align-items: center; gap: 15px;">
      <a href="{{ url('/') }}" class="nav-link active"><i class="fa-solid fa-house"></i> Home</a>
    </nav>

  </div>
</header>
<main class="main-content">
  <div class="container">

    <div class="page-header">
      <h1 class="page-title">Selamat Datang di Portal Halaman Informasi PPDB</h1>
      <p class="page-subtitle">
        Informasi lengkap tentang Jadwal Pendaftaran, Persyaratan Pendaftaran, Jurusan yang tersedia, Jalur Pendaftaran Peserta Didik Baru untuk tahun ajaran 2026/2027.
      </p>
    </div>

   <section class="info-section">
      <div class="section-card">

        <h2 class="section-title">
          <i class="fa-solid fa-calendar-days"></i> Jadwal Pendaftaran
        </h2>

        <div class="jadwal-container">

          <div class="jadwal-item hijau">
            <i class="fa-regular fa-clock"></i>
            <div>
              <h3>Pendaftaran Online</h3>
              <p>1 Juni - 30 Juni 2026</p>
              <span>Pendaftaran dilakukan melalui website</span>
            </div>
          </div>

          <div class="jadwal-item biru">
            <i class="fa-solid fa-file-circle-check"></i>
            <div>
              <h3>Verifikasi Berkas</h3>
              <p>1 - 5 Juli 2026</p>
              <span>Verifikasi dokumen oleh panitia</span>
            </div>
          </div>

          <div class="jadwal-item ungu">
            <i class="fa-solid fa-circle-check"></i>
            <div>
              <h3>Pengumuman Hasil</h3>
              <p>5 Juli 2026</p>
              <span>Pengumuman melalui website</span>
            </div>
          </div>

          <div class="jadwal-item kuning">
            <i class="fa-solid fa-users"></i>
            <div>
              <h3>Daftar Ulang</h3>
              <p>10 - 15 Juli 2026</p>
              <span>Daftar ulang bagi siswa diterima</span>
            </div>
          </div>

        </div>

      </div>
    </section>

    <section class="info-section">
      <div class="section-card">
        <h2>Persyaratan Pendaftaran</h2>

        <div class="syarat-grid">

          <div>
            <h3>Dokumen yang Diperlukan:</h3>
            <ul>
              <li>Ijazah/SKHUN SMP/MTs (asli + fotokopi)</li>
              <li>Akta Kelahiran (asli + fotokopi)</li>
              <li>Kartu Keluarga (asli + fotokopi)</li>
              <li>Rapor SMP semester 1-5</li>
              <li>Pas foto 3x4 (3 lembar)</li>
              <li>Surat Keterangan Sehat dari Dokter</li>
            </ul>
          </div>

          <div>
            <h3>Ketentuan Umum:</h3>
            <ul>
              <li>Lulusan SMP/MTs tahun 2025/2026</li>
              <li>Usia maksimal 21 tahun</li>
              <li>Membawa dokumen asli saat verifikasi</li>
              <li>Mengisi formulir online dengan lengkap</li>
              <li>Tidak sedang terdaftar di sekolah lain</li>
              <li>Mengikuti seluruh tahapan seleksi</li>
            </ul>
          </div>

        </div>
      </div>
    </section>


    <section class="info-section">
     <div class="section-card jurusan-box">

    <h2 class="section-title">
      <i class="fa-solid fa-book"></i> Jurusan yang Tersedia
    </h2>

    <div class="jurusan-grid">

      <div class="jurusan-card ipa">
        <h3>IPA (Ilmu Pengetahuan Alam)</h3>
        <p>Kuota Tersisa: {{ $kuota_maksimal - $pendaftar_ipa }} / {{ $kuota_maksimal }} siswa</p>
      </div>

      <div class="jurusan-card ips">
        <h3>IPS (Ilmu Pengetahuan Sosial)</h3>
        <p>Kuota Tersisa: {{ $kuota_maksimal - $pendaftar_ips }} / {{ $kuota_maksimal }} siswa</p>
      </div>

      <div class="jurusan-card bahasa">
        <h3>Bahasa</h3>
        <p>Kuota Tersisa: {{ $kuota_maksimal - $pendaftar_bahasa }} / {{ $kuota_maksimal }} siswa</p>
      </div>

      <div class="jurusan-card tkj">
        <h3>TKJ (Teknik Komputer dan Jaringan)</h3>
        <p>Kuota Tersisa: {{ $kuota_maksimal - $pendaftar_tkj }} / {{ $kuota_maksimal }} siswa</p>
      </div>

      <div class="jurusan-card rpl">
        <h3>RPL (Rekayasa Perangkat Lunak)</h3>
        <p>Kuota Tersisa: {{ $kuota_maksimal - $pendaftar_rpl }} / {{ $kuota_maksimal }} siswa</p>
      </div>

      <div class="jurusan-card akuntansi">
        <h3>Akuntansi Dan Keuangan Lembaga</h3>
        <p>Kuota Tersisa: {{ $kuota_maksimal - $pendaftar_akuntansi }} / {{ $kuota_maksimal }} siswa</p>
      </div>

      <div class="jurusan-card multimedia">
        <h3>Multimedia</h3>
        <p>Kuota Tersisa: {{ $kuota_maksimal - $pendaftar_multimedia }} / {{ $kuota_maksimal }} siswa</p>
      </div>

      <div class="jurusan-card tkr">
        <h3>Teknik Kendaraan Ringan</h3>
        <p>Kuota Tersisa: {{ $kuota_maksimal - $pendaftar_tkr }} / {{ $kuota_maksimal }} siswa</p>
      </div>

    </div>

  </div>
</section>

  <section class="info-section">
  <div class="section-card">

    <h2 class="section-title">
      <i class="fa-solid fa-award"></i> Jalur Pendaftaran
    </h2>

    <div class="jalur-container">

      <div class="jalur-card nilai">
        <h3>Jalur Nilai</h3>
        <ul>
          <li>Rata-rata nilai rapor</li>
          <li>Nilai UN/Ujian Akhir</li>
          <li>Tes tertulis</li>
        </ul>
        <span>Kuota: 60 %</span>
      </div>

      <div class="jalur-card Prestasi">
        <h3>Jalur Prestasi</h3>
        <ul>
          <li>Prestasi yang diraih</li>
          <li>Tingkat prestasi (nasional/internasional)</li>
          <li>Surat keterangan prestasi</li>
        </ul>
        <span>Kuota: 40 %</span>
      </div>

    </div>

  </div>
</section>
  </div>
</main>

<div class="bantuan-box">
  <h2 style="text-align: center; font-size: 32px; margin-bottom: 40px; font-weight: 700; color: #ffffff;"><i class="fa-solid fa-route"></i> Alur Kilat Pendaftaran PPDB</h2>

  <div style="display: flex !important; flex-direction: row !important; justify-content: space-between !important; align-items: flex-start !important; gap: 50px !important; text-align: left !important;">
    
    <div style="flex: 1 !important; text-align: left !important;">
      <div style="margin-bottom: 25px; text-align: left !important;">
        <h4 style="font-size: 18px; font-weight: 600; margin-bottom: 10px; color: #ffffff; display: flex; align-items: center; gap: 12px;"><i class="fa-solid fa-circle-1" style="color: #bfdbfe; font-size: 1.4rem;"></i> 1. Buat Akun & Log In</h4>
        <p style="font-size: 14px; color: #e2e8f0; line-height: 1.6; margin: 6px 0 0 0; padding-left: 32px;">Akses halaman registrasi untuk membuat akun pendaftaran baru menggunakan email aktif Anda, kemudian masuk ke sistem portal PPDB.</p>
      </div>

      <div style="text-align: left !important;">
        <h4 style="font-size: 18px; font-weight: 600; margin-bottom: 10px; color: #ffffff; display: flex; align-items: center; gap: 12px;"><i class="fa-solid fa-circle-2" style="color: #bfdbfe; font-size: 1.4rem;"></i> 2. Pengisian Formulir</h4>
        <p style="font-size: 14px; color: #e2e8f0; line-height: 1.6; margin: 6px 0 0 0; padding-left: 32px;">Lengkapi formulir data diri siswa secara valid (NISN, NIK, TTL) beserta data profil orang tua/wali dengan lengkap.</p>
      </div>
    </div>

   <div style="flex: 1 !important; text-align: left !important;">
      <div style="margin-bottom: 25px; text-align: left !important;">
        <h4 style="font-size: 18px; font-weight: 600; margin-bottom: 10px; color: #ffffff; display: flex; align-items: center; gap: 12px;"><i class="fa-solid fa-circle-3" style="color: #bfdbfe; font-size: 1.4rem;"></i> 3. Pilih Jurusan & Berkas</h4>
        <p style="font-size: 14px; color: #e2e8f0; line-height: 1.6; margin: 6px 0 0 0; padding-left: 32px;">Tentukan program keahlian/jurusan yang diminati, lalu unggah dokumen kelengkapan berkas fisik yang diminta sistem.</p>
      </div>

      <div style="margin-top: 50px !important; text-align: left !important;">
        <h4 style="font-size: 18px; font-weight: 600; margin-bottom: 10px; color: #ffffff; display: flex; align-items: center; gap: 12px;"><i class="fa-solid fa-circle-4" style="color: #bfdbfe; font-size: 1.4rem;"></i> 4. Pantau Cek Status</h4>
        <p style="font-size: 14px; color: #e2e8f0; line-height: 1.6; margin: 6px 0 0 0; padding-left: 32px;">Pantau hasil verifikasi berkas kelulusan and sesi wawancara secara berkala melalui menu fitur "Cek Status Kelulusan".</p>
      </div>
    </div>

  </div>
</div>

<footer style="background-color: #0b1d33; color: #ffffff; padding: 40px 5%; font-family: sans-serif; font-size: 14px;">
    
    <div style="display: flex; justify-content: space-between; align-items: flex-start; gap: 20px; flex-wrap: wrap;">
        
        <div style="flex: 1; min-width: 250px; max-width: 320px; text-align: left;">
            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 15px;">
                <div style="background-color: #2563eb; width: 32px; height: 32px; border-radius: 6px; display: flex; align-items: center; justify-content: center;">
                    <span style="font-size: 16px;">🎓</span>
                </div>
                <h3 style="font-size: 18px; font-weight: bold; margin: 0;">PPDB Online 2026</h3>
            </div>
            <p style="color: #94a3b8; line-height: 1.6; margin: 0;">
                Sistem Penerimaan Peserta Didik Baru secara online untuk memudahkan calon siswa mendaftar di sekolah pilihan.
            </p>
        </div>

        <div style="flex: 1; min-width: 220px; text-align: center;">
            <h3 style="font-size: 16px; font-weight: bold; margin-top: 8px; margin-bottom: 18px; color: #ffffff; text-transform: uppercase; letter-spacing: 0.5px;">
                Status PPDB
            </h3>
            <ul style="display: inline-block; text-align: left; list-style: none; padding: 0; margin: 0; color: #94a3b8; line-height: 2;">
                <li><strong style="color: #ffffff;">Tahun Ajaran:</strong> 2026/2027</li>
                <li><strong style="color: #ffffff;">Kuota Utama:</strong> Terbatas</li>
                <li><strong style="color: #ffffff;">Jalur:</strong> Prestasi & Rapor / Nilai</li>
                <li><strong style="color: #ffffff;">Seleksi:</strong> Terbuka Umum</li>
            </ul>
        </div>

        <div style="flex: 1; min-width: 250px; max-width: 320px; text-align: left; margin-left: auto;">
            <h3 style="font-size: 16px; font-weight: bold; margin-top: 8px; margin-bottom: 18px; color: #ffffff; text-transform: uppercase; letter-spacing: 0.5px;">
                Kontak Kami
            </h3>
            <ul style="list-style: none; padding: 0; margin: 0; color: #94a3b8; line-height: 2;">
                <li style="display: flex; align-items: flex-start; gap: 10px; margin-bottom: 8px;">
                    <span style="color: #ef4444;">📍</span>
                    <span>Jl. Pendidikan No. 123, Jakarta Barat 11650</span>
                </li>
                <li style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                    <span style="color: #3b82f6;">📞</span>
                    <span>(021) 1234-5678</span>
                </li>
                <li style="display: flex; align-items: center; gap: 10px;">
                    <span style="color: #e2e8f0;">✉️</span>
                    <span>ppdb@sekolah.sch.id</span>
                </li>
            </ul>
        </div>

    </div>

    <div style="border-top: 1px solid #1e293b; margin-top: 40px; padding-top: 20px; text-align: center; color: #64748b; font-size: 12px;">
        &copy; 2026 PPDB - Penerimaan Peserta Didik Baru
    </div>

</footer>

<!-- <script src="{{ asset('halaman_ppdb.js') }}"></script> -->
</body>
</html>