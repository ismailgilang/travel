<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Travel</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <style>
        .slide {
            display: none;
        }

        .slide.active {
            display: block;
        }

        .progress {
            height: 5px;
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-900">
    <div class="container mx-auto px-4 py-10">
        <h1 class="text-3xl font-bold mb-6 text-center">Form Pembayaran</h1>

        <div class="relative mb-4">
            <div class="progress bg-gray-300 rounded-full">
                <div id="progress-bar" class="bg-blue-600 h-full rounded-full" style="width: 0;"></div>
            </div>
        </div>

        <form id="payment-form">
            <!-- Slide 1: Identitas Diri -->
            <div class="slide active" id="slide-1">
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h2 class="text-xl font-bold mb-4">Identitas Diri</h2>
                    <div class="mb-6">
                        <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                        <input type="text" id="name" name="name" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md" placeholder="Masukkan nama lengkap">
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md" placeholder="Masukkan email">
                    </div>
                    <div class="mb-6">
                        <label for="phone" class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
                        <input type="text" id="phone" name="phone" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md" placeholder="Masukkan nomor telepon">
                    </div>
                    <button type="button" class="next-button bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-500 transition duration-300">Berikutnya</button>
                </div>
            </div>

            <!-- Slide 2: Instansi (Optional) -->
            <div class="slide" id="slide-2">
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h2 class="text-xl font-bold mb-4">Instansi (Optional)</h2>
                    <div class="mb-6">
                        <label for="institution" class="block text-sm font-medium text-gray-700">Nama Instansi</label>
                        <input type="text" id="institution" name="institution" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" placeholder="Masukkan nama instansi (jika ada)">
                    </div>
                    <button type="button" class="prev-button bg-gray-600 text-white py-2 px-4 rounded-md hover:bg-gray-500 transition duration-300">Sebelumnya</button>
                    <button type="button" class="next-button bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-500 transition duration-300">Berikutnya</button>
                </div>
            </div>

            <!-- Slide 3: Pembayaran -->
            <div class="slide" id="slide-3">
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h2 class="text-xl font-bold mb-4">Pembayaran</h2>
                    <div class="mb-6">
                        <label for="amount" class="block text-sm font-medium text-gray-700">Jumlah Pembayaran (Rp)</label>
                        <input type="number" id="amount" name="amount" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md" placeholder="Masukkan jumlah pembayaran">
                    </div>
                    <div class="mb-6">
                        <label for="payment_method" class="block text-sm font-medium text-gray-700">Metode Pembayaran</label>
                        <select id="payment_method" name="payment_method" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                            <option value="">Pilih metode pembayaran</option>
                            <option value="bank_transfer">Transfer Bank</option>
                            <option value="credit_card">Kartu Kredit</option>
                        </select>
                    </div>
                    <button type="button" class="prev-button bg-gray-600 text-white py-2 px-4 rounded-md hover:bg-gray-500 transition duration-300">Sebelumnya</button>
                    <button type="button" class="next-button bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-500 transition duration-300">Berikutnya</button>
                </div>
            </div>

            <!-- Slide 4: Konfirmasi Pembayaran -->
            <div class="slide" id="slide-4">
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h2 class="text-xl font-bold mb-4">Konfirmasi Pembayaran</h2>
                    <p class="mb-6">Silakan periksa detail pembayaran Anda sebelum mengonfirmasi:</p>
                    <div class="mb-6">
                        <h3 class="font-medium">Detail:</h3>
                        <p id="confirmation-details"></p>
                    </div>
                    <button type="button" class="prev-button bg-gray-600 text-white py-2 px-4 rounded-md hover:bg-gray-500 transition duration-300">Sebelumnya</button>
                    <button type="button" class="confirm-button bg-green-600 text-white py-2 px-4 rounded-md hover:bg-green-500 transition duration-300">Konfirmasi Pembayaran</button>
                </div>
            </div>

            <!-- Slide 5: Bukti Pembayaran -->
            <div class="slide" id="slide-5">
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h2 class="text-xl font-bold mb-4">Bukti Pembayaran</h2>
                    <p class="mb-4">Terima kasih! Pembayaran Anda telah berhasil. Berikut adalah informasi rekening dan bukti pembayaran Anda:</p>
                    <div class="mb-6">
                        <h3 class="font-medium">Transfer ke Rekening:</h3>
                        <p class="font-bold">Rekening: 0000000000</p>
                    </div>
                    <div class="mb-6">
                        <label for="payment_proof" class="block text-sm font-medium text-gray-700">Upload Bukti Pembayaran</label>
                        <input type="file" id="payment_proof" name="payment_proof" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4 mb-4">
                        <h3 class="font-bold">Detail Pembayaran:</h3>
                        <p id="receipt-details"></p>
                    </div>
                    <button type="button" class="download-receipt bg-green-600 text-white py-2 px-4 rounded-md hover:bg-green-500 transition duration-300">Unduh Struk</button>
                    <button type="button" class="reset-button bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-500 transition duration-300">Pesan Lagi</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        $(document).ready(function() {
            let currentSlide = 0;
            const totalSlides = $('.slide').length;
            let orderID = generateOrderID(); // Generate ID Pesanan

            function showSlide(index) {
                $('.slide').removeClass('active');
                $('.slide').eq(index).addClass('active');
                updateProgressBar(index);
            }

            function updateProgressBar(index) {
                const percentage = ((index + 1) / totalSlides) * 100;
                $('#progress-bar').css('width', percentage + '%');
            }

            function generateOrderID() {
                return 'ORD-' + Math.floor(Math.random() * 1000000); // Menghasilkan ID pesanan
            }

            $('.next-button').on('click', function() {
                let inputs = $('.slide.active input, .slide.active select');
                let valid = true;

                inputs.each(function() {
                    if (!this.checkValidity()) {
                        valid = false;
                    }
                });

                if (valid) {
                    if (currentSlide === 0) { // Jika di slide identitas, tampilkan ID pesanan
                        $('#confirmation-details').html(`
                            ID Pesanan: ${orderID} <br>
                            Nama: ${$('#name').val()} <br>
                            Email: ${$('#email').val()} <br>
                            Nomor Telepon: ${$('#phone').val()} <br>
                            Jumlah: Rp ${$('#amount').val()} <br>
                            Metode Pembayaran: ${$('#payment_method').val()}
                        `);
                    }
                    currentSlide++;
                    showSlide(currentSlide);
                } else {
                    alert('Lengkapi data');
                }
            });

            $('.prev-button').on('click', function() {
                if (currentSlide > 0) {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            $('.confirm-button').on('click', function() {
                // Menyusun detail pembayaran
                $('#receipt-details').html(`
                    ID Pesanan: ${orderID} <br>
                    Nama: ${$('#name').val()} <br>
                    Email: ${$('#email').val()} <br>
                    Nomor Telepon: ${$('#phone').val()} <br>
                    Jumlah: Rp ${$('#amount').val()} <br>
                    Metode Pembayaran: ${$('#payment_method').val()}
                `);
                currentSlide++;
                showSlide(currentSlide);
            });

            $('.download-receipt').on('click', function() {
                const {
                    jsPDF
                } = window.jspdf;
                const doc = new jsPDF();
                doc.text("Struk Pembayaran", 10, 10);
                doc.text(`ID Pesanan: ${orderID}`, 10, 20);
                doc.text(`Nama: ${$('#name').val()}`, 10, 30);
                doc.text(`Email: ${$('#email').val()}`, 10, 40);
                doc.text(`Nomor Telepon: ${$('#phone').val()}`, 10, 50);
                doc.text(`Jumlah: Rp ${$('#amount').val()}`, 10, 60);
                doc.text(`Metode Pembayaran: ${$('#payment_method').val()}`, 10, 70);
                doc.save(`${orderID}.pdf`);
            });

            $('.reset-button').on('click', function() {
                currentSlide = 0;
                $('#payment-form')[0].reset();
                orderID = generateOrderID(); // Generate ID Pesanan baru
                $('#confirmation-details').empty();
                $('#receipt-details').empty();
                showSlide(currentSlide);
                $('#progress-bar').css('width', '0%');
            });
        });
    </script>
</body>

</html>