<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyCashier - Login</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.2/cdn.min.js" defer></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

        html,
        body {
            font-family: 'Inter', sans-serif;
            height: 100%;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .login-bg {
            background-image: url('https://sb.kaleidousercontent.com/67418/1920x1100/2ed9107761/bg.png');
            background-size: cover;
            background-position: center;
        }

        .glass-effect {
            backdrop-filter: blur(8px);
            background: rgba(255, 255, 255, 0.85);
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .gradient-border {
            position: relative;
            border-radius: 0.75rem;
        }

        .gradient-border::before {
            content: "";
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(120deg, #6366f1, #8b5cf6, #ec4899);
            border-radius: 0.85rem;
            z-index: -1;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .input-field:focus-within .gradient-border::before {
            opacity: 1;
        }

        .input-field:hover .gradient-border::before {
            opacity: 0.5;
        }

        /* Consistent border styling for all input fields */
        .input-field input {
            border: 1px solid rgba(209, 213, 219, 0.5);
            transition: all 0.3s ease;
        }

        .input-field input:focus {
            border-color: transparent;
            box-shadow: 0 0 0 1px transparent;
        }

        .blob {
            position: absolute;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            filter: blur(80px);
            z-index: 0;
            pointer-events: none;
        }

        /* Custom scrollbar if needed */
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: rgba(243, 244, 246, 0.1);
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background-color: rgba(107, 114, 128, 0.3);
            border-radius: 20px;
        }
    </style>
</head>

<body class="bg-gray-50" x-data="{ loading: false, showPassword: false }">
    <!-- Decorative blobs -->
    <div class="blob bg-blue-300/40 -top-96 -left-32 opacity-50"></div>
    <div class="blob bg-indigo-300/40 bottom-0 right-0 opacity-60"></div>
    <div class="blob bg-purple-300/30 top-1/2 left-1/3 opacity-40"></div>

    <div class="flex h-screen">
        <!-- Left panel - Image and Brand -->
        <div class="hidden lg:block lg:w-1/2 login-bg relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-indigo-600/90 via-purple-600/80 to-pink-500/70"></div>

            <!-- Floating graphics -->
            <div class="absolute h-32 w-32 bg-white/20 rounded-xl top-20 left-20 backdrop-blur-sm animate-float"></div>
            <div class="absolute h-24 w-24 bg-white/10 rounded-full top-40 right-10 backdrop-blur-sm animate-float"
                style="animation-delay: 1s;"></div>
            <div class="absolute h-40 w-40 bg-white/10 rounded-xl bottom-32 left-1/3 backdrop-blur-sm animate-float"
                style="animation-delay: 2s;"></div>

            <div class="relative h-full flex flex-col justify-between p-12 text-white z-10">
                <div>
                    <div class="flex items-center space-x-3">
                        <div class="bg-white/20 backdrop-blur-sm p-3 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h1 class="text-4xl font-bold tracking-tight">EasyCashier</h1>
                    </div>
                    <p class="mt-3 text-lg font-light tracking-wide ml-12">Sistem Kasir Modern untuk Bisnis Anda</p>
                </div>

                <div class="space-y-8 mb-8">
                    <h2 class="text-3xl font-bold mb-4 max-w-md leading-tight">
                        Kelola Bisnis Anda dengan Lebih Efisien dan Modern
                    </h2>

                    <div class="space-y-4">
                        <div class="flex items-start space-x-4">
                            <div class="bg-white/20 backdrop-blur-sm p-2 rounded-lg mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-medium text-lg">Manajemen Produk</h3>
                                <p class="text-white/80 text-sm mt-1">Kelola stok dan kategori produk secara mudah dan
                                    efisien</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="bg-white/20 backdrop-blur-sm p-2 rounded-lg mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-medium text-lg">Transaksi Cepat</h3>
                                <p class="text-white/80 text-sm mt-1">Proses pembayaran yang cepat dengan perhitungan
                                    otomatis</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="bg-white/20 backdrop-blur-sm p-2 rounded-lg mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-medium text-lg">Loyalitas Pelanggan</h3>
                                <p class="text-white/80 text-sm mt-1">Kelola data pelanggan dan tingkatkan loyalitas
                                    dengan sistem poin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right panel - Login Form -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-8 relative">
            <div class="w-full max-w-md z-10">
                <!-- Mobile Brand - Only visible on mobile -->
                <div class="lg:hidden text-center mb-10">
                    <div class="inline-flex items-center justify-center space-x-3 mb-4">
                        <div class="bg-gradient-to-r from-indigo-600 to-purple-600 p-3 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h1 class="text-3xl font-bold text-gray-800">EasyCashier</h1>
                    </div>
                    <p class="text-gray-600">Sistem Kasir Modern untuk Bisnis Anda</p>
                </div>

                <!-- Login Form Container -->
                <div class="glass-effect rounded-2xl shadow-2xl border border-white/30 p-8 md:p-10 mx-auto">
                    <div class="text-center mb-8">
                        <h2 class="text-2xl font-bold text-gray-800">Selamat Datang Kembali</h2>
                        <p class="text-gray-500 mt-2">Silakan masuk untuk mengakses dashboard Anda</p>
                    </div>

                    <form class="space-y-6" action="{{ route('loginProses') }}" method="POST">
                        <!-- Username Field -->
                        @csrf
                        <div class="input-field">
                            <label for="username" class="block text-sm font-medium text-gray-700 mb-2">Username</label>
                            <div class="relative gradient-border">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <input type="text" id="username" name="username"
                                    class="bg-white/70 backdrop-blur-sm pl-12 pr-4 py-3 block w-full rounded-lg text-sm"
                                    placeholder="Masukkan username Anda" required>
                            </div>
                        </div>

                        <!-- Password Field -->
                        <div class="input-field">
                            <div class="flex justify-between mb-2">
                                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                                <a href="#"
                                    class="text-xs text-indigo-600 hover:text-indigo-800 font-medium">Lupa
                                    password?</a>
                            </div>
                            <div class="relative gradient-border">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                    </svg>
                                </div>
                                <input :type="showPassword ? 'text' : 'password'" id="password" name="password"
                                    class="bg-white/70 backdrop-blur-sm pl-12 pr-12 py-3 block w-full rounded-lg text-sm"
                                    placeholder="Masukkan password Anda" required>
                                <div class="absolute inset-y-0 right-0 pr-4 flex items-center">
                                    <button type="button" @click="showPassword = !showPassword"
                                        class="text-gray-400 hover:text-gray-600 focus:outline-none">
                                        <svg x-show="!showPassword" xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                        <svg x-show="showPassword" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Remember Me & Additional Security -->
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <input id="remember" name="remember" type="checkbox"
                                    class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                                <label for="remember" class="ml-2 block text-sm text-gray-700">Ingat saya</label>
                            </div>
                            <button type="button"
                                class="text-xs text-indigo-600 hover:text-indigo-800 font-medium">Gunakan 2FA</button>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit"
                            class="w-full bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white py-3 px-4 rounded-xl transition duration-300 flex items-center justify-center shadow-lg shadow-indigo-500/30 font-medium mt-6"
                            :class="{ 'opacity-80 cursor-not-allowed': loading }" :disabled="loading">
                            <span x-show="loading" class="flex items-center">
                                <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10"
                                        stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor"
                                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                    </path>
                                </svg>
                                Memproses...
                            </span>
                            <span x-show="!loading">
                                Masuk ke Dashboard
                            </span>
                        </button>

                    </form>
                    @if (session('error'))
                        <div class="mt-4 text-red-500 text-sm text-center">
                            {{ session('error') }}
                        </div>
                    @endif
                </div>

                <!-- Footer -->
                <div class="text-center mt-6 text-sm text-gray-500">
                    &copy; 2025 EasyCashier. <span class="hidden sm:inline">Hak cipta dilindungi.</span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
