// ambil semua menu footer
document.querySelectorAll(".menu-btn").forEach(menu => {
  menu.addEventListener("click", function(e) {
    e.preventDefault();

    const text = this.textContent.trim();

    // kondisi tiap menu
    if (text === "Beranda") {
      window.scrollTo({
        top: 0,
        behavior: "smooth"
      });
    }

    else if (text === "Informasi PPDB") {
      document.querySelector(".info-section")
        ?.scrollIntoView({ behavior: "smooth" });
    }

    else if (text === "Login") {
      alert("Halaman login belum tersedia 😅");
    }

    else if (text === "Daftar Sekarang") {
      alert("Menuju halaman pendaftaran...");
    }
  });
});


// tombol daftar utama (yang di tengah)
document.getElementById("btnDaftar")
.addEventListener("click", function() {
  alert("Menuju halaman pendaftaran...");
});

// efek klik tombol 
document.querySelectorAll(".menu-btn").forEach(btn => {
  btn.addEventListener("click", function() {
    this.style.transform = "scale(0.9)";
    setTimeout(() => {
      this.style.transform = "";
    }, 150);
  });
}); 

// navbar click
document.querySelectorAll(".nav-link").forEach(link => {
  link.addEventListener("click", function(e) {
    const text = this.textContent.trim();

    // 1. Cek jika tombol yang diklik adalah "Home"
    if (text.includes("Home")) {
      // Biarkan fungsi bawaan <a> berjalan normal (pindah halaman)
      // Jangan gunakan e.preventDefault() di sini
      return; // Hentikan script untuk Home agar dia langsung pindah link
    }

    // 2. Untuk tombol selain Home, baru kita matikan href-nya
    e.preventDefault();

    // hapus active semua
    document.querySelectorAll(".nav-link")
      .forEach(l => l.classList.remove("active"));

    // tambah active ke yang diklik
    this.classList.add("active");

    // 3. Logika untuk tombol lainnya
    if (text.includes("Informasi")) {
      document.querySelector(".info-section")
        ?.scrollIntoView({ behavior: "smooth" });
    }

    else if (text.includes("Login")) {
      alert("Halaman login belum tersedia 😅");
    }

    else if (text.includes("Daftar")) {
      // Catatan: Jika tombol Daftar di navbar ini juga mau diarahkan ke datasiswa.php,
      // Anda bisa menghapus alert dan menggantinya dengan:
      // window.location.href = "../page.doeng/datasiswa.php";
      alert("Menuju halaman pendaftaran...");
    }
  });
});