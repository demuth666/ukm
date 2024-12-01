let currentStep = 1; // Menyimpan langkah yang aktif

// Fungsi untuk menampilkan step sesuai dengan nomor
function showStep(step) {
    const steps = document.querySelectorAll('.step'); // Mengambil semua elemen dengan kelas "step"

    // Menyembunyikan semua langkah dengan menambah kelas "hidden"
    steps.forEach(s => s.classList.add('hidden'));

    // Menampilkan langkah yang sesuai dengan menghapus kelas "hidden"
    const activeStep = document.querySelector(`.step-${step}`);
    if (activeStep) {
        activeStep.classList.remove('hidden');
    }
}

// Fungsi untuk memeriksa apakah semua input di step aktif telah terisi
function isStepValid(step) {
    const inputs = document.querySelectorAll(`.step-${step} input, .step-${step} select`);

    for (let input of inputs) {
        if (input.type === 'checkbox' || input.type === 'radio') {
            const isChecked = [...inputs].some(i => i.checked);
            if (!isChecked) return false;
        } else if (input.value.trim() === "") {
            return false;
        }
    }
    return true;
}

// Fungsi untuk pindah ke langkah berikutnya jika validasi terpenuhi
function nextStep() {
    if (currentStep < 3 && isStepValid(currentStep)) { // Pindah ke langkah berikutnya jika validasi berhasil
        currentStep++;
        showStep(currentStep);
    } else {
        alert("Harap isi semua data di langkah ini sebelum melanjutkan.");
    }
}

// Fungsi untuk pindah ke langkah sebelumnya
function prevStep() {
    if (currentStep > 1) { // Pindah ke langkah sebelumnya jika tidak di langkah pertama
        currentStep--;
        showStep(currentStep);
    }
}

// Event listener untuk tombol "Selanjutnya" di setiap step
document.querySelectorAll('.next-btn').forEach(button => {
    button.addEventListener('click', (e) => {
        e.preventDefault(); // Mencegah refresh halaman
        nextStep(); // Pindah ke langkah berikutnya
    });
});

// Event listener untuk tombol "Sebelumnya" di setiap step
document.querySelectorAll('.prev-btn').forEach(button => {
    button.addEventListener('click', (e) => {
        e.preventDefault(); // Mencegah refresh halaman
        prevStep(); // Pindah ke langkah sebelumnya
    });
});

// Menyembunyikan semua langkah selain langkah pertama pada saat halaman pertama kali dimuat
document.addEventListener('DOMContentLoaded', () => {
    showStep(currentStep);
});

// Fungsi untuk memeriksa apakah semua input di step aktif telah terisi dan valid
function isStepValid(step) {
    const inputs = document.querySelectorAll(`.step-${step} input, .step-${step} select`);
    let isValid = true; // Menyimpan status validasi

    inputs.forEach(input => {
        const errorMessage = input.parentElement.querySelector('.error-message');

        // Validasi untuk radio atau checkbox
        if (input.type === 'checkbox' || input.type === 'radio') {
            const isChecked = [...inputs].some(i => i.checked);
            if (!isChecked) isValid = false;

            // Validasi untuk email
        } else if (input.type === 'email') {
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(input.value.trim())) {
                isValid = false;
                if (errorMessage) errorMessage.style.display = 'block';
            } else if (errorMessage) {
                errorMessage.style.display = 'none';
            }

            // Validasi untuk input kosong (Kecuali CV yang opsional)
        } else if (input.type !== 'file' && input.value.trim() === "") {
            isValid = false;
            if (errorMessage) errorMessage.style.display = 'block';
        } else if (errorMessage) {
            errorMessage.style.display = 'none';
        }
    });

    return isValid;
}

// Mengambil elemen form dan input NPM
const npmInput = document.querySelector('#npm');
const npmError = document.querySelector('#npm-error');

// Fungsi untuk validasi NPM
npmInput.addEventListener('input', () => {
    if (npmInput.value.length < 8) {
        // Menampilkan pesan error jika NPM kurang dari 8 karakter
        npmError.style.display = 'block';
    } else {
        // Menyembunyikan pesan error jika NPM sudah memenuhi syarat
        npmError.style.display = 'none';
    }
});

// Anda juga bisa menambahkan validasi saat form disubmit
document.querySelector('form').addEventListener('submit', (e) => {
    if (npmInput.value.length < 8) {
        e.preventDefault(); // Mencegah form disubmit jika NPM tidak valid
        npmError.style.display = 'block';
    }
});


// document.querySelector('form').addEventListener('submit', function(e) {
//     const fileInput = document.querySelector('input[name="cv"]');
//     const file = fileInput.files[0];
//
//     // Periksa apakah file ada dan apakah formatnya PDF
//     if (file && file.type !== 'application/pdf') {
//         e.preventDefault(); // Mencegah pengiriman form
//         alert("Harap unggah file dengan format PDF.");
//     }
// });
