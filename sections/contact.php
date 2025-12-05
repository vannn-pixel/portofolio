<section id="kontak" class="py-16 border-t border-gray-800 mb-20">
    <h2 class="text-4xl font-bold text-center mb-12 text-gray-100">Hubungi Saya</h2>
    
    <div class="max-w-xl mx-auto p-8 bg-gray-800 rounded-xl shadow-2xl border border-teal-500/30">
        
        <p class="text-center text-xl font-medium text-gray-300 mb-6">
            Tertarik untuk berdiskusi tentang proyek atau peluang kerja? Saya siap membantu.
        </p>
        
        <form action="submit_form.php" method="POST" class="space-y-6">
            
            <div>
                <label for="name" class="block text-sm font-medium text-gray-400 mb-1">Nama Lengkap</label>
                <input type="text" id="name" name="name" placeholder="Nama Anda" 
                       class="w-full p-3 bg-gray-700 border border-gray-600 rounded-lg 
                              focus:ring-teal-500 focus:border-teal-500 text-gray-100 placeholder-gray-400" 
                       required>
            </div>
            
            <div>
                <label for="email" class="block text-sm font-medium text-gray-400 mb-1">Alamat Email</label>
                <input type="email" id="email" name="email" placeholder="email@contoh.com" 
                       class="w-full p-3 bg-gray-700 border border-gray-600 rounded-lg 
                              focus:ring-teal-500 focus:border-teal-500 text-gray-100 placeholder-gray-400" 
                       required>
            </div>
            
            <div>
                <label for="message" class="block text-sm font-medium text-gray-400 mb-1">Pesan</label>
                <textarea id="message" name="message" placeholder="Jelaskan kebutuhan Anda..." rows="5" 
                          class="w-full p-3 bg-gray-700 border border-gray-600 rounded-lg 
                                 focus:ring-teal-500 focus:border-teal-500 text-gray-100 placeholder-gray-400" 
                          required></textarea>
            </div>
            
            <button type="submit" 
                    class="w-full bg-teal-500 hover:bg-teal-600 text-white font-bold py-3 rounded-lg 
                           transition duration-300 shadow-lg transform hover:scale-[1.01] flex items-center justify-center">
                Kirim Pesan Sekarang
            </button>
            
        </form>

        <div class="mt-10 pt-6 border-t border-gray-700 text-center">
            <h4 class="text-xl font-semibold text-teal-400 mb-4">Atau Temukan Saya di:</h4>
            
            <div class="flex justify-center space-x-6 text-2xl">
                <a href="rdmuhammadjovan@gmail.com" class="text-gray-400 hover:text-teal-400 transition duration-300" aria-label="Email">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                </a>
                
                <a href="https://www.linkedin.com/in/rd-muhammad-jovan" target="_blank" class="text-gray-400 hover:text-teal-400 transition duration-300" aria-label="LinkedIn">
                    <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.567-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                </a>
                
                <a href="https://github.com/namaanda" target="_blank" class="text-gray-400 hover:text-teal-400 transition duration-300" aria-label="GitHub">
                    <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.082-.743.082-.729.082-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.833 2.807 1.304 3.492.997.107-.775.418-1.304.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.305-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.046.138 3.003.404 2.292-1.552 3.3-1.23 3.3-1.23.653 1.652.242 2.871.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.923.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.79 24 17.29 24 12c0-6.627-5.373-12-12-12z"/></svg>
                </a>
            </div>
            
        </div>
    </div>
</section>