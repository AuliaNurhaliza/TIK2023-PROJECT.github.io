// script.js

// Ketika DOM telah dimuat
document.addEventListener('DOMContentLoaded', function() {
    // Menampilkan pesan "Welcome to my page"
    alert("Welcome to my page");
});
// landingScript.js

// Menangkap tombol "Mulai"
const startButton = document.getElementById('startButton');

// Menambahkan event listener untuk mengarahkan ke halaman index saat tombol "Mulai" diklik
startButton.addEventListener('click', function() {
    // Mengarahkan ke halaman index
    window.location.href = 'index.html';
});
