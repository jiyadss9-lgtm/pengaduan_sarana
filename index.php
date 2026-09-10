<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login - Selamat Datang Kembali</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Font (Inter / Poppins) -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                    colors: {
                        primaryPurple: '#3b1c8c',
                        primaryPurpleHover: '#2e1473',
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

        /* Outer frame geometric design matching screenshot background */
        .outer-frame {
            background: linear-gradient(135deg, #18092e 0%, #0d0614 50%, #220b3a 100%);
            box-shadow: inset 0 0 100px rgba(0, 0, 0, 0.8);
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

        /* Glowing lens flare stars matching image corner sparkles */
        .flare-star {
            position: absolute;
            pointer-events: none;
            z-index: 1;
            filter: drop-shadow(0 0 12px rgba(186, 134, 255, 0.8));
        }

        /* Smooth UI focus rings */
        .custom-input:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(139, 92, 246, 0.3);
            background-color: #ffffff;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4 md:p-8 outer-frame relative select-none">

    <!-- Background Animated Galaxy Canvas -->
    <canvas id="galaxy-canvas"></canvas>

    <!-- Visual Sparkle Flares (like in screenshot top right & bottom right) -->
    <svg class="flare-star top-8 right-8 w-24 h-24 text-purple-300 opacity-90 animate-pulse" viewBox="0 0 100 100">
        <path d="M50 0 L53 47 L100 50 L53 53 L50 100 L47 53 L0 50 L47 47 Z" fill="currentColor" />
        <circle cx="50" cy="50" r="10" fill="#ffffff" />
    </svg>
    <svg class="flare-star bottom-12 left-10 w-16 h-16 text-purple-400 opacity-80" viewBox="0 0 100 100">
        <path d="M50 0 L52 48 L100 50 L52 52 L50 100 L48 52 L0 50 L48 48 Z" fill="currentColor" />
    </svg>
    <svg class="flare-star bottom-8 right-12 w-28 h-28 text-white opacity-85" viewBox="0 0 100 100">
        <path d="M50 0 L53 47 L100 50 L53 53 L50 100 L47 53 L0 50 L47 47 Z" fill="currentColor" />
        <circle cx="50" cy="50" r="8" fill="#ffffff" />
    </svg>

    <!-- Main Outer Container Container Frame -->
    <div class="relative z-10 w-full max-w-4xl bg-black/40 backdrop-blur-md p-4 sm:p-8 rounded-3xl border border-purple-900/30 shadow-2xl flex justify-center items-center overflow-hidden">
        
        <!-- Deep Space Nebula Glow overlay -->
        <div class="absolute inset-0 bg-gradient-to-tr from-purple-900/40 via-transparent to-purple-800/30 pointer-events-none"></div>

        <!-- White Form Card -->
        <div class="w-full max-w-[420px] bg-white rounded-[32px] px-8 py-10 shadow-2xl z-20 transition-all duration-300 my-4">
            
            <!-- Header Text -->
            <div class="text-center mb-8">
                <h1 class="text-2xl sm:text-3xl font-extrabold text-gray-900 tracking-tight mb-1">
                    Selamat datang kembali!
                </h1>
                <p class="text-gray-600 text-sm sm:text-base font-normal">
                    silakan masuk ke akun anda
                </p>
            </div>

            <!-- Login Form -->
            <form id="loginForm" onsubmit="handleLogin(event)" class="space-y-5">
                
                <!-- Email Field -->
                <div class="space-y-1.5">
                    <label for="email" class="block text-sm font-bold text-gray-900 pl-1">
                        email
                    </label>
                    <input 
                        type="email" 
                        id="email" 
                        required
                        placeholder="nama@gmail.com" 
                        class="custom-input w-full px-5 py-3 bg-gray-200/90 text-gray-800 placeholder-gray-500 rounded-2xl text-sm font-medium transition-all"
                    />
                </div>

                <!-- Password Field -->
                <div class="space-y-1.5">
                    <label for="password" class="block text-sm font-bold text-gray-900 pl-1">
                        password
                    </label>
                    <div class="relative flex items-center">
                        <input 
                            type="password" 
                            id="password" 
                            required
                            placeholder="masukan password" 
                            class="custom-input w-full pl-5 pr-12 py-3 bg-gray-200/90 text-gray-800 placeholder-gray-500 rounded-2xl text-sm font-medium transition-all"
                        />
                        <button 
                            type="button" 
                            onclick="togglePasswordVisibility()" 
                            class="absolute right-4 text-gray-600 hover:text-gray-900 focus:outline-none p-1 transition-colors"
                            title="Tampilkan / Sembunyikan Password"
                        >
                            <i id="eyeIcon" class="fa-regular fa-eye text-lg"></i>
                        </button>
                    </div>
                </div>

                <!-- Options Row: Remember Me & Forgot Password -->
                <div class="flex items-center justify-between text-xs sm:text-sm pt-1 pb-2">
                    <label class="flex items-center cursor-pointer select-none text-gray-800 font-medium">
                        <input 
                            type="checkbox" 
                            id="remember"
                            class="w-4 h-4 rounded border-gray-400 text-purple-700 focus:ring-purple-600 cursor-pointer accent-purple-800"
                        />
                        <span class="ml-2">ingat saya</span>
                    </label>
                    
                    <a 
                        href="#" 
                        onclick="showToast('Fitur Lupa Password diklik!')" 
                        class="text-gray-800 hover:text-purple-800 font-medium transition-colors"
                    >
                        lupa password?
                    </a>
                </div>

                <!-- Submit Button -->
                <button 
                    type="submit" 
                    class="w-full py-3.5 bg-[#3b1c8c] hover:bg-[#2d146f] text-white font-bold text-base rounded-2xl shadow-lg transition-all duration-200 transform active:scale-[0.98]"
                >
                    masuk
                </button>

                <!-- Register Footer Text -->
                <div class="text-center pt-3 text-sm">
                    <span class="text-gray-900 font-bold">belum punya akun?</span>
                    <a 
                        href="view/register.php" 
                        onclick="showToast('Mengarahkan ke halaman pendaftaran...')" 
                        class="text-[#3b1c8c] font-bold hover:underline ml-1"
                    >
                        daftar di sini
                    </a>
                </div>
            </form>
        </div>
    </div>

    <!-- Notification Toast Element -->
    <div id="toast" class="fixed bottom-5 right-5 bg-purple-900 text-white px-6 py-3 rounded-xl shadow-2xl transform translate-y-20 opacity-0 transition-all duration-300 z-50 flex items-center space-x-2">
        <i class="fa-solid fa-circle-info text-purple-300"></i>
        <span id="toastMessage">Pesan Notifikasi</span>
    </div>

    <script>
        // Password Visibility Toggle Logic
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            }
        }

        // Custom Toast Notification
        function showToast(message) {
            const toast = document.getElementById('toast');
            const toastMessage = document.getElementById('toastMessage');
            
            toastMessage.textContent = message;
            toast.classList.remove('translate-y-20', 'opacity-0');
            
            setTimeout(() => {
                toast.classList.add('translate-y-20', 'opacity-0');
            }, 3000);
        }

        // Form Submission Handler
        function handleLogin(event) {
            event.preventDefault();
            const email = document.getElementById('email').value;
            showToast(`Berhasil masuk sebagai ${email}`);
        }

        // Dynamic Galaxy Background Canvas Effect
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
                this.size = Math.random() * 2 + 0.5;
                this.alpha = Math.random() * 0.8 + 0.2;
                this.speed = Math.random() * 0.01 + 0.005;
                this.growing = Math.random() > 0.5;
            }

            update() {
                if (this.growing) {
                    this.alpha += this.speed;
                    if (this.alpha >= 1) this.growing = false;
                } else {
                    this.alpha -= this.speed;
                    if (this.alpha <= 0.2) this.growing = true;
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
            const count = Math.floor((width * height) / 3000);
            for (let i = 0; i < count; i++) {
                stars.push(new Star());
            }
        }

        function drawPurpleNebula() {
            // Draw smooth purple nebula gradient swirls in background
            const grad1 = ctx.createRadialGradient(width * 0.2, height * 0.4, 50, width * 0.2, height * 0.4, width * 0.5);
            grad1.addColorStop(0, 'rgba(124, 58, 237, 0.35)');
            grad1.addColorStop(0.5, 'rgba(76, 29, 149, 0.2)');
            grad1.addColorStop(1, 'rgba(0, 0, 0, 0)');
            
            ctx.fillStyle = grad1;
            ctx.fillRect(0, 0, width, height);

            const grad2 = ctx.createRadialGradient(width * 0.8, height * 0.6, 50, width * 0.8, height * 0.6, width * 0.4);
            grad2.addColorStop(0, 'rgba(139, 92, 246, 0.25)');
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

        // Initialize background on load
        window.onload = function() {
            initStars();
            animateGalaxy();
        };
    </script>
</body>
</html>