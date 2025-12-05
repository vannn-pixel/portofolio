<section id="tentang" class="py-16 border-t border-gray-800">
    <h2 class="text-4xl font-bold text-center mb-12 text-gray-100">Tentang Saya & Keahlian</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        
        <div class="md:col-span-1 p-6 bg-gray-800 rounded-lg shadow-xl hover:shadow-teal-500/30 transition duration-300">
            <h3 class="text-2xl font-semibold mb-4 text-teal-400">Ringkasan Profil</h3>
            <p class="text-gray-300 leading-relaxed mb-4">
                Saya adalah **Pengembang Web Full-Stack** yang bersemangat dengan pengalaman **3 tahun** dalam membangun aplikasi web yang berkinerja tinggi. Fokus utama saya adalah menciptakan pengalaman pengguna yang **bersih, intuitif, dan responsif**.
            </p>
            <p class="text-gray-300 leading-relaxed">
                Saya percaya pada praktik pengembangan yang tangguh dan selalu mengikuti tren teknologi terbaru. Siap menghadapi tantangan baru dalam proyek Anda.
            </p>
            <a href="#kontak" class="mt-4 inline-block text-teal-400 hover:text-teal-300 font-medium border-b border-teal-400 hover:border-teal-300 transition duration-300">Hubungi Saya untuk Kolaborasi &rarr;</a>
        </div>
        
        <div class="md:col-span-2 p-6 bg-gray-800 rounded-lg shadow-xl">
            <h3 class="text-2xl font-semibold mb-4 text-teal-400">Teknologi yang Saya Kuasai</h3>
            
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">

                <?php 
                // Data Keahlian menggunakan Array PHP
                $skills = [
                    'Frontend' => ['HTML5 & CSS3', 'JavaScript (ES6+)', 'React.js', 'Vue.js', 'Tailwind CSS', 'Bootstrap'],
                    'Backend' => ['PHP (Laravel/CodeIgniter)', 'Node.js (Express)', 'Python (Django/Flask)'],
                    'Database & Tools' => ['MySQL', 'PostgreSQL', 'Git & GitHub', 'Docker', 'AWS/GCP'],
                ];
                
                // Loop untuk menampilkan setiap kategori keahlian
                foreach ($skills as $category => $items) {
                    echo '<div class="mb-4">';
                    echo '<h4 class="text-lg font-bold mb-2 text-gray-200 border-b border-gray-700 pb-1">' . $category . '</h4>';
                    echo '<div class="flex flex-wrap gap-2">';
                    foreach ($items as $item) {
                        // Tailwind classes untuk badge skill
                        echo '<span class="px-3 py-1 bg-teal-500 bg-opacity-20 text-teal-400 text-sm font-medium rounded-full shadow-md">';
                        echo htmlspecialchars($item);
                        echo '</span>';
                    }
                    echo '</div>';
                    echo '</div>';
                }
                ?>
                
            </div>
            
        </div>
    </div>
</section>