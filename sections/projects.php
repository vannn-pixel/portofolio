<section id="proyek" class="py-16 border-t border-gray-800">
    <h2 class="text-4xl font-bold text-center mb-12 text-gray-100">Proyek Pilihan Saya</h2>
    
    <?php
    // Data Proyek menggunakan Array PHP
    $projects = [
        [
            'title' => 'Sistem Manajemen Klinik',
            'description' => 'Aplikasi web untuk mengelola jadwal pasien, rekam medis, dan inventaris obat. Meningkatkan efisiensi administrasi hingga 40%.',
            'tech_stack' => ['Laravel', 'MySQL', 'Tailwind CSS'],
            'image_url' => 'assets/images/project-klinik.jpg', // Ganti dengan path gambar Anda
            'demo_link' => 'https://demo.klinik.com',
            'github_link' => 'https://github.com/user/klinik-app',
        ],
        [
            'title' => 'E-Commerce Fashion Minimalis',
            'description' => 'Platform belanja online dengan fokus pada kecepatan loading dan desain mobile-first. Mengintegrasikan Payment Gateway pihak ketiga.',
            'tech_stack' => ['React.js', 'Node.js', 'MongoDB'],
            'image_url' => 'assets/images/project-ecommerce.jpg',
            'demo_link' => 'https://demo.fashion.com',
            'github_link' => '#', // Jika repository private
        ],
        [
            'title' => 'Landing Page Startup Teknologi',
            'description' => 'Desain Landing Page yang sangat responsif dan berkonversi tinggi, dioptimalkan untuk SEO dan kecepatan (skor 95+ di Lighthouse).',
            'tech_stack' => ['HTML5', 'Tailwind CSS', 'JavaScript'],
            'image_url' => 'assets/images/project-landingpage.jpg',
            'demo_link' => 'https://demo.startup.com',
            'github_link' => 'https://github.com/user/startup-lp',
        ],
        // Tambahkan Proyek Lain di sini...
    ];
    ?>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
        
        <?php foreach ($projects as $project): ?>
            
            <div class="bg-gray-800 rounded-xl overflow-hidden shadow-2xl 
                        transform hover:scale-[1.02] hover:shadow-teal-500/50 
                        transition duration-500 group">
                
                <div class="h-48 overflow-hidden">
                    <img src="<?php echo htmlspecialchars($project['image_url']); ?>" 
                         alt="Proyek: <?php echo htmlspecialchars($project['title']); ?>" 
                         class="w-full h-full object-cover group-hover:opacity-80 transition duration-500"
                         loading="lazy">
                </div>

                <div class="p-6">
                    <h3 class="text-2xl font-semibold mb-2 text-teal-400">
                        <?php echo htmlspecialchars($project['title']); ?>
                    </h3>
                    <p class="text-gray-300 mb-4">
                        <?php echo htmlspecialchars($project['description']); ?>
                    </p>
                    
                    <div class="flex flex-wrap gap-2 mb-4">
                        <?php foreach ($project['tech_stack'] as $tech): ?>
                            <span class="px-3 py-1 text-xs text-gray-400 bg-gray-700 rounded-full font-medium">
                                <?php echo htmlspecialchars($tech); ?>
                            </span>
                        <?php endforeach; ?>
                    </div>
                    
                    <div class="flex gap-4">
                        <a href="<?php echo htmlspecialchars($project['demo_link']); ?>" 
                           target="_blank" 
                           class="text-teal-400 hover:text-teal-300 font-medium flex items-center transition duration-300">
                            Lihat Demo &rarr;
                        </a>
                        <?php if ($project['github_link'] !== '#'): ?>
                            <a href="<?php echo htmlspecialchars($project['github_link']); ?>" 
                               target="_blank" 
                               class="text-gray-400 hover:text-white flex items-center transition duration-300">
                                GitHub
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            
        <?php endforeach; ?>

    </div>
    
<div class="text-center mt-16">
    <p class="text-xl text-gray-300 mb-4">Ingin melihat lebih banyak proyek?</p>
    
    <a href="assets/docs/cv.pdf" 
       target="_blank" 
       type="application/pdf"
       class="bg-teal-500 hover:bg-teal-600 text-white font-bold py-3 px-8 rounded-lg shadow-lg transition duration-300 transform hover:scale-105 inline-block mr-4">
        CV
    </a>

    <a href="assets/docs/cv.pdf" 
       download="CV_RD_Muhammad_Jovan.pdf" 
       type="application/pdf"
       class="bg-gray-700 hover:bg-gray-600 text-teal-400 font-bold py-3 px-8 rounded-lg shadow-lg transition duration-300 transform hover:scale-105 inline-block">
        Unduh File PDF
    </a>
</div>
</section>