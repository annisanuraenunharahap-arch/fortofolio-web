document.addEventListener('DOMContentLoaded', () => {

    // --- 1. Variabel dan Tipe Data ---
    const nama = "Annisa Nuraenun Harahap";
    let status = "Informatics Engineering Student";

    console.log("Name: " + nama);
    console.log("Status: " + status);

    // --- 2. Fungsi (Greeting) ---
    // (Fungsi ini otomatis muncul saat halaman selesai dimuat)
    function sapaPengunjung() {
        alert("Hello! Welcome to the portfolio of " + nama);
    }
    sapaPengunjung();

    // --- 3. DOM Manipulation (Interaksi Judul & Hover) ---
    const judul = document.querySelector('h1');
    
    // Memberikan efek interaktif: Mengubah warna saat judul diklik
    judul.addEventListener('click', () => {
        judul.style.color = '#1304e2'; 
        judul.style.transition = '0.5s';
    });

    // Memberikan efek hover pada gallery-item
    const items = document.querySelectorAll('.gallery-item');
    items.forEach(item => {
        item.addEventListener('mouseenter', () => {
            item.style.border = '2px solid #1304e2';
        });
        item.addEventListener('mouseleave', () => {
            item.style.border = '2px solid transparent';
        });
    });

    // --- 4. Logika Tab / Tombol ---
    const buttons = document.querySelectorAll('.tab-btn');
    const sections = document.querySelectorAll('.content-section');

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            // A. Hapus class 'active' dari semua tombol & section
            buttons.forEach(btn => btn.classList.remove('active'));
            sections.forEach(sec => sec.classList.remove('active'));

            // B. Tambahkan class 'active' ke tombol yang baru diklik
            button.classList.add('active');

            // C. Tampilkan section yang sesuai dengan data-target
            const target = button.getAttribute('data-target');
            document.getElementById(target).classList.add('active');
        });
    });
});