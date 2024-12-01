function validatePassword(event) {
    event.preventDefault(); // Mencegah form submit sebelum validasi
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm-password').value;

    if (password === confirmPassword) {
        alert("Pendaftaran berhasil!");
        // Lakukan tindakan seperti mengirimkan formulir
    } else {
        alert("Kata sandi dan konfirmasi kata sandi tidak cocok. Silakan coba lagi.");
    }
}
