<?php
$pageTitle = "RD MUHAMMAD JOVAN | Portofolio Profesional";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="animated-bg text-gray-100">

<header class="fixed w-full top-0 z-50 transition-all duration-300 animate-slideDown" id="navbar">
    
    <!-- Latar Belakang Glassmorphism dengan Border Gradient Bergerak di Bawah -->
    <div class="absolute inset-0 glass-effect border-b border-white/5"></div>
    <div class="absolute bottom-0 left-0 w-full h-[1px] bg-gradient-to-r from-transparent via-teal-500 to-transparent opacity-70 animate-pulse"></div>

    <nav class="container mx-auto px-6 py-4 flex justify-between items-center relative z-10">
        
        <!-- LOGO: Gradient Text + Icon Spin Hover -->
        <a href="#home" class="group flex items-center gap-2 text-2xl font-extrabold tracking-wide transition duration-300">
            <!-- Ikon Logo (Bracket) -->
            <span class="text-teal-400 transform group-hover:rotate-180 transition-transform duration-700 ease-in-out">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
            </span>
            <!-- Teks Logo -->
            <span class="bg-clip-text text-transparent bg-gradient-to-r from-white via-teal-200 to-teal-400 group-hover:from-teal-400 group-hover:to-white transition-all duration-500">
                Portofolio
            </span>
        </a>
        
        <!-- DESKTOP MENU: Glowing Pill Effect -->
        <div class="hidden md:flex items-center space-x-1">
            <?php
            $navLinks = ['Tentang' => '#tentang', 'Proyek' => '#proyek', 'Kontak' => '#kontak'];
            foreach ($navLinks as $text => $href) {
                echo '<a href="' . $href . '" 
                         class="relative px-5 py-2 text-sm font-medium uppercase tracking-wider text-gray-300 transition-all duration-300 rounded-full group hover:text-white overflow-hidden">
                        
                        <!-- Latar Belakang Hover (Glow) -->
                        <span class="absolute inset-0 w-full h-full bg-teal-500/10 scale-0 group-hover:scale-100 rounded-full transition-transform duration-300 ease-out"></span>
                        
                        <!-- Efek Border Halus -->
                        <span class="absolute inset-0 w-full h-full border border-teal-500/30 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                        
                        <!-- Teks -->
                        <span class="relative z-10 group-hover:drop-shadow-[0_0_8px_rgba(45,212,191,0.8)]">' . $text . '</span>
                      </a>';
            }
            ?>
            
            <!-- Tombol CTA Kecil di Header (Opsional) -->
            <a href="assets/docs/cv.pdf" target="_blank" class="ml-6 px-5 py-2 text-xs font-bold text-gray-900 bg-teal-400 rounded-full hover:bg-teal-300 hover:shadow-[0_0_20px_rgba(45,212,191,0.6)] transition-all duration-300 transform hover:-translate-y-0.5">
                RESUME
            </a>
        </div>
        
        <!-- MOBILE MENU BUTTON: Animated Hamburger -->
        <button class="md:hidden text-teal-400 focus:outline-none group relative w-10 h-10 flex items-center justify-center border border-white/10 rounded-lg bg-white/5 hover:bg-white/10 transition-colors">
            <div class="relative flex overflow-hidden items-center justify-center rounded-full w-[50px] h-[50px] transform transition-all bg-slate-700 ring-0 ring-gray-300 hover:ring-8 group-focus:ring-4 ring-opacity-30 duration-200 shadow-md">
                <div class="flex flex-col justify-between w-[20px] h-[20px] transform transition-all duration-300 origin-center overflow-hidden">
                    <div class="bg-white h-[2px] w-7 transform transition-all duration-300 origin-left group-focus:rotate-[42deg]"></div>
                    <div class="bg-white h-[2px] w-1/2 rounded transform transition-all duration-300 group-focus:-translate-x-10"></div>
                    <div class="bg-white h-[2px] w-7 transform transition-all duration-300 origin-left group-focus:-rotate-[42deg]"></div>
                </div>
            </div>
        </button>
    </nav>
</header>

<main class="relative overflow-hidden">

    <div class="fixed top-20 left-0 w-72 h-72 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl opacity-15 animate-blob z-0 pointer-events-none"></div>
    <div class="fixed top-20 right-0 w-72 h-72 bg-teal-500 rounded-full mix-blend-multiply filter blur-3xl opacity-15 animate-blob animation-delay-2000 z-0 pointer-events-none"></div>
    <div class="fixed -bottom-8 left-20 w-72 h-72 bg-blue-500 rounded-full mix-blend-multiply filter blur-3xl opacity-15 animate-blob animation-delay-4000 z-0 pointer-events-none"></div>

    <div class="container mx-auto px-6 relative z-10">
        
        <section id="home" class="min-h-screen flex flex-col justify-center py-20 relative">
            
            <div class="flex flex-col-reverse md:flex-row items-center w-full gap-12 md:gap-20">
                
                <div class="md:w-3/5 space-y-6 text-center md:text-left">
                    
                    <div data-aos="fade-down" data-aos-delay="100">
                        <span class="inline-block px-4 py-2 rounded-full bg-teal-500/10 border border-teal-500/30 text-teal-400 text-sm font-semibold tracking-wide">
                            👋 Halo, Selamat Datang
                        </span>
                    </div>
                    
                    <h1 class="text-5xl md:text-7xl font-extrabold leading-tight tracking-tight" data-aos="fade-right" data-aos-delay="200">
                        RD MUHAMMAD <br>
                        <span class="bg-clip-text text-transparent bg-gradient-to-r from-teal-400 via-blue-500 to-teal-400 animate-gradient-text">
                            JOVAN
                        </span>
                    </h1>
                    
                    <h2 class="text-2xl md:text-3xl text-gray-300 font-light flex items-center justify-center md:justify-start gap-3" data-aos="fade-right" data-aos-delay="300">
                        <span class="hidden md:inline-block w-8 h-[2px] bg-teal-500"></span>
                        Pengembang Web & Desainer
                    </h2>
                    
                    <p class="text-gray-400 leading-relaxed max-w-lg mx-auto md:mx-0 text-lg" data-aos="fade-up" data-aos-delay="400">
                        Saya merancang pengalaman digital yang imersif. Menggabungkan estetika <span class="text-white font-medium">UI/UX</span> dengan kode <span class="text-teal-400 font-mono">< /></span> yang bersih dan performa tinggi.
                    </p>
                    
                    <div class="pt-6 flex flex-col sm:flex-row gap-4 justify-center md:justify-start" data-aos="fade-up" data-aos-delay="500">
                        <a href="#proyek" class="group relative px-8 py-3 bg-teal-500 text-white font-bold rounded-full overflow-hidden shadow-[0_0_20px_rgba(20,184,166,0.5)] transition-all hover:scale-105">
                            <span class="absolute top-0 left-0 w-full h-full bg-white/20 transform -skew-x-12 -translate-x-full group-hover:translate-x-full transition-transform duration-700"></span>
                            Lihat Karya Saya
                        </a>
                        <a href="#kontak" class="px-8 py-3 border border-gray-600 hover:border-teal-400 text-gray-300 hover:text-teal-400 font-bold rounded-full transition-all duration-300 hover:bg-teal-500/10 backdrop-blur-sm">
                            Hubungi Saya
                        </a>
                    </div>
                </div>
                
                <div class="md:w-2/5 flex justify-center relative" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="absolute inset-0 bg-teal-500/20 blur-[60px] rounded-full transform scale-75 animate-pulse"></div>

                    <div class="relative w-72 h-72 md:w-96 md:h-96">
                        <div class="absolute inset-0 rounded-full border border-dashed border-gray-700 animate-[spin_20s_linear_infinite]"></div>
                        <div class="absolute -top-1 left-1/2 w-3 h-3 bg-teal-500 rounded-full blur-[2px] animate-[spin_20s_linear_infinite]"></div>
                        
                        <div class="absolute inset-4 rounded-full border-2 border-dashed border-teal-500/30 animate-[spin_15s_linear_infinite_reverse]"></div>
                        
                        <div class="absolute inset-8 rounded-full overflow-hidden border-4 border-gray-800 bg-gray-900 shadow-2xl group">
                            <img src="assets/images/fotoku.Jpeg" 
                                 alt="RD Muhammad Jovan" 
                                 class="w-full h-full object-cover object-top transform group-hover:scale-110 transition duration-700 filter grayscale group-hover:grayscale-0">
                        </div>
                        
                        <div class="absolute bottom-10 -left-2 bg-gray-900/90 backdrop-blur-md p-3 px-5 rounded-2xl border border-teal-500/30 shadow-lg flex items-center gap-3 animate-[bounce_3s_infinite]">
                            <span class="relative flex h-3 w-3">
                              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                              <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                            </span>
                            <div class="flex flex-col">
                                <span class="text-[10px] text-gray-400 uppercase tracking-wider">Status</span>
                                <span class="text-xs font-bold text-white leading-none">Open to Work</span>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </section>
        
        <div class="w-full h-[1px] bg-gradient-to-r from-transparent via-gray-700 to-transparent mb-20"></div>

        <div class="space-y-32 pb-20">
            
            <div id="about-wrapper" data-aos="fade-up" data-aos-duration="1000">
                <?php include 'sections/about.php'; ?>
            </div>
            
            <div class="flex items-center justify-center gap-4 opacity-50">
                <div class="h-[1px] w-24 bg-gray-700"></div>
                <div class="w-2 h-2 bg-teal-500 rounded-full"></div>
                <div class="h-[1px] w-24 bg-gray-700"></div>
            </div>
            
            <div id="projects-wrapper" data-aos="fade-up" data-aos-duration="1000">
                <?php include 'sections/projects.php'; ?>
            </div>
            
            <div class="flex items-center justify-center gap-4 opacity-50">
                <div class="h-[1px] w-24 bg-gray-700"></div>
                <div class="w-2 h-2 bg-teal-500 rounded-full"></div>
                <div class="h-[1px] w-24 bg-gray-700"></div>
            </div>
            
            <div id="contact-wrapper" data-aos="fade-up" data-aos-duration="1000">
                <?php include 'sections/contact.php'; ?>
            </div>

        </div>

    </div>

</main>

    <footer class="bg-slate-950 border-t border-gray-800 py-10 mt-12 relative z-10">
        <div class="container mx-auto px-6 text-center">
            <h3 class="text-2xl font-bold text-white mb-2 tracking-wider">RD MUHAMMAD JOVAN</h3>
            <p class="text-gray-500 text-sm mb-6">Membangun masa depan digital, satu baris kode setiap kalinya.</p>
            
            <div class="flex justify-center space-x-6 mb-8">
                <a href="#" class="text-gray-400 hover:text-teal-400 transition transform hover:scale-110">
                    <span class="sr-only">GitHub</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.082-.743.082-.729.082-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.833 2.807 1.304 3.492.997.107-.775.418-1.304.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.305-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.046.138 3.003.404 2.292-1.552 3.3-1.23 3.3-1.23.653 1.652.242 2.871.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.923.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.79 24 17.29 24 12c0-6.627-5.373-12-12-12z"/></svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-teal-400 transition transform hover:scale-110">
                    <span class="sr-only">LinkedIn</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.567-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                </a>
            </div>
            
            <p class="text-gray-600 text-sm">&copy; <?php echo date("Y"); ?> All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Inisialisasi Animasi Scroll
        AOS.init({
            once: true, // Animasi hanya terjadi sekali saat scroll ke bawah
            offset: 50, // Offset trigger animasi sedikit dikurangi agar lebih responsif
            duration: 800,
            easing: 'ease-out-cubic',
        });
    </script>

</body>
</html>