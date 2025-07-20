<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
</head>
<body class="bg-gray-50 min-h-screen">
    <main class="container mx-auto p-6 max-w-2xl">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">Pembayaran</h1>
            <p id="form-description" class="text-gray-600">Silakan lengkapi form pembayaran di bawah ini</p>
        </div>

        <!-- Alert Success -->
        <div id="success-alert" class="hidden bg-green-50 border border-green-200 rounded-lg p-4 mb-6">
            <div class="flex items-center">
                <svg class="w-5 h-5 text-green-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                <span class="text-green-800 font-medium">Pembayaran berhasil dikirim!</span>
            </div>
        </div>

        <!-- Payment Form Card -->
        <div class="bg-white rounded-xl shadow-lg border border-gray-200 overflow-hidden">
            <!-- Card Header -->
            <div class="bg-gradient-to-r from-blue-600 to-blue-700 px-6 py-4">
                <h2 class="text-xl font-semibold text-white flex items-center">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                    Detail Pembayaran
                </h2>
            </div>

            <!-- Card Body -->
            <div class="px-6 py-6">
                <!-- GANTI ACTION DENGAN ROUTE YANG BENAR -->
                <form action="{{ route('pembayaran.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    
                    <!-- Metode Pembayaran -->
                    <div class="space-y-2">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                            </svg>
                            Metode Pembayaran
                        </label>
                        <select name="metode" id="metode" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors" onchange="setNoRek()" required>
                            <option value="">-- Pilih Metode Pembayaran --</option>
                            <option value="transfer">🏦 Transfer Bank</option>
                            <option value="qris">📱 QRIS</option>
                        </select>
                    </div>

                    <!-- No Rekening / Referensi -->
                    <div class="space-y-2">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"/>
                            </svg>
                            No. Rekening / Referensi
                        </label>
                        <input type="text" name="no_rek" id="no_rek" class="w-full p-3 border border-gray-300 rounded-lg bg-gray-50 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors" placeholder="Nomor rekening / referensi akan muncul otomatis" readonly>
                    </div>

                    <!-- Gambar QRIS -->
                    <div id="qris-image-container" class="hidden">
                        <div class="bg-blue-50 rounded-lg p-6 text-center border border-blue-200">
                            <label class="block text-sm font-semibold text-gray-700 mb-4">
                                <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z"/>
                                </svg>
                                Scan QRIS untuk Pembayaran
                            </label>
                            <div class="bg-white rounded-lg p-4 inline-block shadow-sm border">
                                <img src="img/qris.jpg" alt="QRIS Code" class="w-48 h-48 object-cover rounded-lg mx-auto">
                                <p class="text-sm text-gray-600 mt-2">Scan QR Code untuk Pembayaran</p>
                            </div>
                        </div>
                    </div>

                    <!-- Upload Bukti Pembayaran -->
                    <div class="space-y-2">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                            </svg>
                            Upload Bukti Pembayaran
                        </label>
                        <div id="upload-area" class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-blue-400 transition-colors">
                            <!-- INPUT FILE YANG TIDAK HIDDEN DAN TETAP BISA DIAKSES -->
                            <input type="file" name="bukti" id="bukti" class="w-full p-2 border rounded mb-4" accept="image/*" onchange="previewImage(event)" required>
                            
                            <!-- Default Upload UI -->
                            <div id="upload-placeholder">
                                <label for="bukti" class="cursor-pointer">
                                    <svg class="w-12 h-12 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                    <p class="text-sm text-gray-600">
                                        <span class="font-medium text-blue-600">Klik untuk upload</span> atau pilih file di atas
                                    </p>
                                    <p class="text-xs text-gray-500 mt-1">PNG, JPG, JPEG (max. 5MB)</p>
                                </label>
                            </div>
                            
                            <!-- Preview UI -->
                            <div id="image-preview" class="hidden">
                                <img id="preview-img" class="max-w-xs max-h-48 mx-auto rounded-lg shadow-md mb-4">
                                <p class="text-sm text-green-600 font-medium mb-2">✓ Bukti pembayaran berhasil diupload</p>
                                <button type="button" onclick="resetUpload()" class="text-blue-600 hover:text-blue-800 text-sm underline">
                                    Ganti gambar
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-4 border-t border-gray-200">
                        <button type="submit" class="w-full bg-gradient-to-r from-green-600 to-green-700 text-white px-6 py-3 rounded-lg font-semibold hover:from-green-700 hover:to-green-800 focus:ring-4 focus:ring-green-300 transition-all duration-200 flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                            </svg>
                            Kirim Pembayaran
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Info Card -->
        <div class="mt-6 bg-blue-50 rounded-lg p-4 border border-blue-200">
            <div class="flex items-start">
                <svg class="w-5 h-5 text-blue-600 mr-3 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                </svg>
                <div>
                    <h3 class="font-semibold text-blue-800 mb-1">Informasi Pembayaran</h3>
                    <p class="text-sm text-blue-700">
                        Pastikan bukti pembayaran yang diupload jelas dan sesuai dengan metode pembayaran yang dipilih. 
                        Proses verifikasi akan dilakukan dalam 1x24 jam.
                    </p>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    
    <script>
        function setNoRek() {
            const metode = document.getElementById('metode').value;
            const noRekField = document.getElementById('no_rek');
            const qrisImageContainer = document.getElementById('qris-image-container');
            
            if (metode === 'transfer') {
                noRekField.value = '1234567890 - Bank BCA';
                qrisImageContainer.classList.add('hidden');
            } else if (metode === 'qris') {
                noRekField.value = 'QRIS-REF-001-2024';
                qrisImageContainer.classList.remove('hidden');
            } else {
                noRekField.value = '';
                qrisImageContainer.classList.add('hidden');
            }
        }

        function previewImage(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const uploadPlaceholder = document.getElementById('upload-placeholder');
                    const imagePreview = document.getElementById('image-preview');
                    const previewImg = document.getElementById('preview-img');
                    const uploadArea = document.getElementById('upload-area');
                    
                    // Set image source
                    previewImg.src = e.target.result;
                    
                    // Hide placeholder, show preview
                    uploadPlaceholder.classList.add('hidden');
                    imagePreview.classList.remove('hidden');
                    
                    // Change upload area style
                    uploadArea.classList.remove('border-dashed', 'hover:border-blue-400');
                    uploadArea.classList.add('border-solid', 'border-green-300', 'bg-green-50');
                };
                reader.readAsDataURL(file);
            }
            updateFormStatus();
        }
        
        function resetUpload() {
            const uploadPlaceholder = document.getElementById('upload-placeholder');
            const imagePreview = document.getElementById('image-preview');
            const buktiInput = document.getElementById('bukti');
            const uploadArea = document.getElementById('upload-area');
            
            // Reset file input
            buktiInput.value = '';
            
            // Show placeholder, hide preview
            uploadPlaceholder.classList.remove('hidden');
            imagePreview.classList.add('hidden');
            
            // Reset upload area style
            uploadArea.classList.add('border-dashed', 'hover:border-blue-400');
            uploadArea.classList.remove('border-solid', 'border-green-300', 'bg-green-50');
            
            updateFormStatus();
        }

        // HAPUS ATAU MODIFIKASI EVENT LISTENER YANG MENCEGAH FORM SUBMIT
        // Jika ingin tetap ada validasi, gunakan ini:
        document.querySelector('form').addEventListener('submit', function(e) {
            const metode = document.getElementById('metode').value;
            const bukti = document.getElementById('bukti').files[0];
            
            if (!metode) {
                e.preventDefault();
                alert('Silakan pilih metode pembayaran');
                return;
            }
            
            if (!bukti) {
                e.preventDefault();
                alert('Silakan upload bukti pembayaran');
                return;
            }
            
            // Jika validasi lolos, biarkan form submit normal ke server
            // JANGAN gunakan e.preventDefault() di sini
        });
        
        // Update description when form is being filled
        function updateFormStatus() {
            const metode = document.getElementById('metode').value;
            const bukti = document.getElementById('bukti').files[0];
            const description = document.getElementById('form-description');
            
            if (metode && bukti) {
                description.textContent = 'Form sudah lengkap, silakan klik "Kirim Pembayaran"';
                description.className = 'text-green-600 font-medium';
            } else if (metode || bukti) {
                description.textContent = 'Form sedang diisi, lengkapi data yang tersisa';
                description.className = 'text-yellow-600';
            } else {
                description.textContent = 'Silakan lengkapi form pembayaran di bawah ini';
                description.className = 'text-gray-600';
            }
        }
        
        // Add event listeners to track form changes
        document.getElementById('metode').addEventListener('change', updateFormStatus);
        document.getElementById('bukti').addEventListener('change', updateFormStatus);
    </script>
</body>
</html>