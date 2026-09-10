<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Akun Baru - Deep Space Theme</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Font (Poppins) -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                    colors: {
                        primaryPurple: '#3b1c8c',
                        primaryPurpleHover: '#2d146f',
                        inputBg: '#e5e7eb',
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #0d0614;
            overflow-x: hidden;
        }

        /* Outer frame geometric gradient background */
        .outer-frame {
            background: linear-gradient(135deg, #18092e 0%, #0d0614 50%, #220b3a 100%);
            box-shadow: inset 0 0 120px rgba(0, 0, 0, 0.85);
        }

        /* Galaxy Canvas */
        #galaxy-canvas {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
        }

        /* Glowing lens flare stars matching screenshot sparkles */
        .flare-star {
            position: absolute;
            pointer-events: none;
            z-index: 1;
            filter: drop-shadow(0 0 16px rgba(192, 132, 252, 0.9));
        }

        /* Smooth UI focus rings */
        .custom-input:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(139, 92, 246, 0.35);
            background-color: #ffffff;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-3 sm:p-6 outer-frame relative select-none">

    <!-- Background Animated Galaxy Canvas -->
    <canvas id="galaxy-canvas"></canvas>

    <!-- Visual Sparkle Flares -->
    <svg class="flare-star top-10 left-10 w-20 h-20 text-purple-300 opacity-80 animate-pulse" viewBox="0 0 100 100">
        <path d="M50 0 L53 47 L100 50 L53 53 L50 100 L47 53 L0 50 L47 47 Z" fill="currentColor" />
        <circle cx="50" cy="50" r="10" fill="#ffffff" />
    </svg>
    <svg class="flare-star top-1/4 right-8 sm:right-16 w-36 h-36 text-purple-300 opacity-90 animate-pulse" viewBox="0 0 100 100">
        <path d="M50 0 L54 46 L100 50 L54 54 L50 100 L46 54 L0 50 L46 46 Z" fill="currentColor" />
        <circle cx="50" cy="50" r="12" fill="#ffffff" />
    </svg>
    <svg class="flare-star bottom-10 left-12 w-32 h-32 text-purple-400 opacity-85" viewBox="0 0 100 100">
        <path d="M50 0 L53 47 L100 50 L53 53 L50 100 L47 53 L0 50 L47 47 Z" fill="currentColor" />
        <circle cx="50" cy="50" r="8" fill="#ffffff" />
    </svg>
    <svg class="flare-star bottom-8 right-12 w-20 h-20 text-white opacity-80" viewBox="0 0 100 100">
        <path d="M50 0 L52 48 L100 50 L52 52 L50 100 L48 52 L0 50 L48 48 Z" fill="currentColor" />
    </svg>

    <!-- Main Outer Glass Container Frame -->
    <div class="relative z-10 w-full max-w-4xl bg-black/40 backdrop-blur-md p-3 sm:p-8 rounded-3xl border border-purple-900/30 shadow-2xl flex justify-center items-center overflow-hidden my-4">
        
        <!-- Deep Space Nebula Glow overlay -->
        <div class="absolute inset-0 bg-gradient-to-tr from-purple-900/40 via-transparent to-purple-800/30 pointer-events-none"></div>

        <!-- REGISTRATION CARD CONTAINER -->
        <div id="registerCard" class="w-full max-w-[420px] bg-white rounded-[32px] px-6 sm:px-9 py-8 sm:py-9 shadow-2xl z-20 transition-all duration-300">
            
            <!-- Header Text -->
            <div class="text-center mb-6">
                <h1 class="text-2xl sm:text-3xl font-black text-gray-900 tracking-tight uppercase mb-1">
                    BUAT AKUN BARU
                </h1>
                <p class="text-xs sm:text-sm font-extrabold text-gray-900 tracking-wider uppercase">
                    DAFTAR UNTUK MEMULAI PERJALANAN ANDA
                </p>
            </div>

            <!-- Register Form -->
            <form id="registerForm" onsubmit="handleRegister(event)" class="space-y-4">
                
                <!-- Nama Lengkap Field -->
                <div class="space-y-1">
                    <label for="regNama" class="block text-xs font-black text-gray-900 uppercase pl-1 tracking-wide">
                        NAMA LENGKAP
                    </label>
                    <input 
                        type="text" 
                        id="regNama" 
                        required
                        placeholder="NAMA LENGKAP" 
                        class="custom-input w-full px-5 py-3 bg-gray-200/90 text-gray-800 placeholder-gray-500 rounded-2xl text-sm font-semibold transition-all"
                    />
                </div>

                <!-- Email Field -->
                <div class="space-y-1">
                    <label for="regEmail" class="block text-xs font-black text-gray-900 uppercase pl-1 tracking-wide">
                        EMAIL
                    </label>
                    <input 
                        type="email" 
                        id="regEmail" 
                        required
                        placeholder="nama@gmail.com" 
                        class="custom-input w-full px-5 py-3 bg-gray-200/90 text-gray-800 placeholder-gray-500 rounded-2xl text-sm font-semibold transition-all"
                    />
                </div>

                <!-- Password Field -->
                <div class="space-y-1">
                    <label for="regPassword" class="block text-xs font-black text-gray-900 uppercase pl-1 tracking-wide">
                        PASSWORD
                    </label>
                    <div class="relative flex items-center">
                        <input 
                            type="password" 
                            id="regPassword" 
                            required
                            placeholder="buat password" 
                            class="custom-input w-full pl-5 pr-12 py-3 bg-gray-200/90 text-gray-800 placeholder-gray-500 rounded-2xl text-sm font-semibold transition-all"
                        />
                        <button 
                            type="button" 
                            onclick="togglePassword('regPassword', 'eyeIconPass')" 
                            class="absolute right-4 text-gray-700 hover:text-gray-900 focus:outline-none p-1 transition-colors"
                            title="Tampilkan / Sembunyikan Password"
                        >
                            <i id="eyeIconPass" class="fa-regular fa-eye text-lg"></i>
                        </button>
                    </div>
                </div>

                <!-- Konfirmasi Password Field -->
                <div class="space-y-1">
                    <label for="regConfirmPassword" class="block text-xs font-black text-gray-900 uppercase pl-1 tracking-wide">
                        KONFIRMASI PASSWORD
                    </label>
                    <div class="relative flex items-center">
                        <input 
                            type="password" 
                            id="regConfirmPassword" 
                            required
                            placeholder="ULANGI PASSWORD" 
                            class="custom-input w-full pl-5 pr-12 py-3 bg-gray-200/90 text-gray-800 placeholder-gray-500 rounded-2xl text-sm font-semibold transition-all"
                        />
                        <button 
                            type="button" 
                            onclick="togglePassword('regConfirmPassword', 'eyeIconConfirm')" 
                            class="absolute right-4 text-gray-700 hover:text-gray-900 focus:outline-none p-1 transition-colors"
                            title="Tampilkan / Sembunyikan Password"
                        >
                            <i id="eyeIconConfirm" class="fa-regular fa-eye text-lg"></i>
                        </button>
                    </div>
                </div>

                <!-- Checkbox Row: Syarat & Ketentuan -->
                <div class="pt-1 pb-1">
                    <label class="flex items-center cursor-pointer select-none text-[11px] sm:text-xs text-gray-800 font-bold uppercase tracking-tight">
                        <input 
                            type="checkbox" 
                            id="termsCheckbox"
                            required
                            class="w-4 h-4 rounded border-gray-400 text-purple-700 focus:ring-purple-600 cursor-pointer accent-purple-800"
                        />
                        <span class="ml-2">SAYA SETUJU DENGAN <a href="#" onclick="showToast('Syarat & Ketentuan diklik!')" class="text-purple-700 hover:underline">SYARAT & KETENTUAN</a></span>
                    </label>
                </div>

                <!-- Submit Button -->
                <button 
                    type="submit" 
                    class="w-full py-3.5 bg-[#3b1c8c] hover:bg-[#2d146f] text-white font-black text-base rounded-2xl shadow-lg transition-all duration-200 transform active:scale-[0.98] uppercase tracking-wider"
                >
                    DAFTAR
                </button>

                <!-- Footer Switch Link -->
                <div class="text-center pt-2 text-xs sm:text-sm">
                    <span class="text-gray-900 font-black uppercase">SUDAH PUNYA AKUN?</span>
                    <button 
                        type="button"
                        onclick="switchView('login')" 
                        class="text-[#3b1c8c] font-black hover:underline ml-1"
                    >
                        MASUK di sini
                    </button>
                </div>
            </form>
        </div>

        <!-- LOGIN CARD CONTAINER (Initially Hidden) -->
        <div id="loginCard" class="hidden w-full max-w-[420px] bg-white rounded-[32px] px-6 sm:px-9 py-8 sm:py-9 shadow-2xl z-20 transition-all duration-300">
            <div class="text-center mb-6">
                <h1 class="text-2xl sm:text-3xl font-extrabold text-gray-900 tracking-tight mb-1">
                    Selamat datang kembali!
                </h1>
                <p class="text-gray-600 text-sm font-normal">
                    silakan masuk ke akun anda
                </p>
            </div>

            <form id="loginForm" onsubmit="handleLogin(event)" class="space-y-4">
                <div class="space-y-1">
                    <label for="loginEmail" class="block text-sm font-bold text-gray-900 pl-1">
                        email
                    </label>
                    <input 
                        type="email" 
                        id="loginEmail" 
                        required
                        placeholder="nama@gmail.com" 
                        class="custom-input w-full px-5 py-3 bg-gray-200/90 text-gray-800 placeholder-gray-500 rounded-2xl text-sm font-medium transition-all"
                    />
                </div>

                <div class="space-y-1">
                    <label for="loginPassword" class="block text-sm font-bold text-gray-900 pl-1">
                        password
                    </label>
                    <div class="relative flex items-center">
                        <input 
                            type="password" 
                            id="loginPassword" 
                            required
                            placeholder="masukan password" 
                            class="custom-input w-full pl-5 pr-12 py-3 bg-gray-200/90 text-gray-800 placeholder-gray-500 rounded-2xl text-sm font-medium transition-all"
                        />
                        <button 
                            type="button" 
                            onclick="togglePassword('loginPassword', 'eyeIconLogin')" 
                            class="absolute right-4 text-gray-600 hover:text-gray-900 focus:outline-none p-1 transition-colors"
                        >
                            <i id="eyeIconLogin" class="fa-regular fa-eye text-lg"></i>
                        </button>
                    </div>
                </div>

                <div class="flex items-center justify-between text-xs sm:text-sm pt-1 pb-1">
                    <label class="flex items-center cursor-pointer select-none text-gray-800 font-medium">
                        <input 
                            type="checkbox" 
                            class="w-4 h-4 rounded border-gray-400 text-purple-700 focus:ring-purple-600 cursor-pointer accent-purple-800"
                        />
                        <span class="ml-2">ingat saya</span>
                    </label>
                    <a href="#" onclick="showToast('Fitur Lupa Password diklik!')" class="text-gray-800 hover:text-purple-800 font-medium">
                        lupa password?
                    </a>
                </div>

                <button 
                    type="submit" 
                    class="w-full py-3.5 bg-[#3b1c8c] hover:bg-[#2d146f] text-white font-bold text-base rounded-2xl shadow-lg transition-all duration-200 transform active:scale-[0.98]"
                >
                    masuk
                </button>

                <div class="text-center pt-2 text-sm">
                    <span class="text-gray-900 font-bold">belum punya akun?</span>
                    <button 
                        type="button"
                        onclick="switchView('register')" 
                        class="text-[#3b1c8c] font-bold hover:underline ml-1"
                    >
                        daftar di sini
                    </button>
                </div>
            </form>
        </div>

    </div>

    <!-- Notification Toast Element -->
    <div id="toast" class="fixed bottom-5 right-5 bg-purple-900 text-white px-6 py-3 rounded-xl shadow-2xl transform translate-y-20 opacity-0 transition-all duration-300 z-50 flex items-center space-x-2 border border-purple-500/30">
        <i id="toastIcon" class="fa-solid fa-circle-check text-purple-300"></i>
        <span id="toastMessage" class="text-sm font-medium">Pesan Notifikasi</span>
    </div>

    <script>
        // Toggle Password Visibility Logic
        function togglePassword(inputId, iconId) {
            const input = document.getElementById(inputId);
            const icon = document.getElementById(iconId);
            
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }

        // Switch between Register and Login screens
        function switchView(target) {
            const registerCard = document.getElementById('registerCard');
            const loginCard = document.getElementById('loginCard');

            if (target === 'login') {
                registerCard.classList.add('hidden');
                loginCard.classList.remove('hidden');
            } else {
                loginCard.classList.add('hidden');
                registerCard.classList.remove('hidden');
            }
        }

        // Custom Toast Notification
        function showToast(message, isError = false) {
            const toast = document.getElementById('toast');
            const toastMessage = document.getElementById('toastMessage');
            const toastIcon = document.getElementById('toastIcon');
            
            toastMessage.textContent = message;
            if (isError) {
                toastIcon.className = 'fa-solid fa-triangle-exclamation text-red-400';
            } else {
                toastIcon.className = 'fa-solid fa-circle-check text-purple-300';
            }

            toast.classList.remove('translate-y-20', 'opacity-0');
            
            setTimeout(() => {
                toast.classList.add('translate-y-20', 'opacity-0');
            }, 3200);
        }

        // Handle Registration Form Submit
        function handleRegister(event) {
            event.preventDefault();
            const nama = document.getElementById('regNama').value;
            const pass = document.getElementById('regPassword').value;
            const confirmPass = document.getElementById('regConfirmPassword').value;

            if (pass !== confirmPass) {
                showToast('Password dan Konfirmasi Password tidak cocok!', true);
                return;
            }

            showToast(`Pendaftaran Berhasil! Selamat datang, ${nama}`);
        }

        // Handle Login Form Submit
        function handleLogin(event) {
            event.preventDefault();
            const email = document.getElementById('loginEmail').value;
            showToast(`Berhasil masuk sebagai ${email}`);
        }

        const canvas = document.getElementById('galaxy-canvas');
        const ctx = canvas.getContext('2d');

        let width = canvas.width = window.innerWidth;
        let height = canvas.height = window.innerHeight;

        window.addEventListener('resize', () => {
            width = canvas.width = window.innerWidth;
            height = canvas.height = window.innerHeight;
            initStars();
        });

        class Star {
            constructor() {
                this.reset();
            }

            reset() {
                this.x = Math.random() * width;
                this.y = Math.random() * height;
                this.size = Math.random() * 2.2 + 0.4;
                this.alpha = Math.random() * 0.8 + 0.2;
                this.speed = Math.random() * 0.012 + 0.004;
                this.growing = Math.random() > 0.5;
            }

            update() {
                if (this.growing) {
                    this.alpha += this.speed;
                    if (this.alpha >= 1) this.growing = false;
                } else {
                    this.alpha -= this.speed;
                    if (this.alpha <= 0.15) this.growing = true;
                }
            }

            draw() {
                ctx.fillStyle = `rgba(255, 255, 255, ${this.alpha})`;
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                ctx.fill();
            }
        }

        let stars = [];
        function initStars() {
            stars = [];
            const count = Math.floor((width * height) / 2800);
            for (let i = 0; i < count; i++) {
                stars.push(new Star());
            }
        }

        function drawPurpleNebula() {
            const grad1 = ctx.createRadialGradient(width * 0.25, height * 0.45, 50, width * 0.25, height * 0.45, width * 0.55);
            grad1.addColorStop(0, 'rgba(124, 58, 237, 0.38)');
            grad1.addColorStop(0.5, 'rgba(76, 29, 149, 0.22)');
            grad1.addColorStop(1, 'rgba(0, 0, 0, 0)');
            
            ctx.fillStyle = grad1;
            ctx.fillRect(0, 0, width, height);

            const grad2 = ctx.createRadialGradient(width * 0.78, height * 0.55, 50, width * 0.78, height * 0.55, width * 0.45);
            grad2.addColorStop(0, 'rgba(139, 92, 246, 0.28)');
            grad2.addColorStop(1, 'rgba(0, 0, 0, 0)');
            
            ctx.fillStyle = grad2;
            ctx.fillRect(0, 0, width, height);
        }

        function animateGalaxy() {
            ctx.clearRect(0, 0, width, height);
            drawPurpleNebula();
            
            stars.forEach(star => {
                star.update();
                star.draw();
            });

            requestAnimationFrame(animateGalaxy);
        }

        // Initialize background animation on window load
        window.onload = function() {
            initStars();
            animateGalaxy();
        };
    </script>
</body>
</html>