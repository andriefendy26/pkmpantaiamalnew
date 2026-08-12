<footer class="text-white border-t border-gray-900 bg-neutral-950 mt-0">
    <div class="container mx-auto max-w-7xl px-4 py-12">

        {{-- Main content --}}
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
            {{-- Brand --}}
            <div>
                <div class="flex items-center space-x-2 mb-4">
                    <span class="text-3xl font-bold text-black dark:text-white">Puskesmas Pantai Amal</span>
                </div>
                <p class="text-sm text-gray-500">
                    Melayani dengan sepenuh hati untuk kesehatan masyarakat
                </p>
            </div>

            {{-- Profil --}}
            <div>
                <h3 class="font-semibold mb-4 text-xl text-black dark:text-white">Profil</h3>
                <ul class="space-y-2 text-sm text-gray-500">
                    <li><a href="{{ url('/profil/tentang') }}" class="hover:text-white transition-colors">Tentang Kami</a></li>
                    <li><a href="{{ url('/profil/visi-misi') }}" class="hover:text-white transition-colors">Visi &amp; Misi</a></li>
                    <li><a href="{{ url('/profil/struktur-organisasi') }}" class="hover:text-white transition-colors">Struktur Organisasi</a></li>
                </ul>
            </div>

            {{-- Layanan --}}
            <div>
                <h3 class="font-semibold mb-4 text-xl text-black dark:text-white">Layanan</h3>
                <ul class="space-y-2 text-sm text-gray-500">
                    <li><a href="{{ url('/layanan/poli') }}" class="hover:text-white transition-colors">Layanan Poli</a></li>
                    <li><a href="{{ url('/jadwal/dokter') }}" class="hover:text-white transition-colors">Jadwal Dokter</a></li>
                    <li><a href="{{ url('/daftar-online') }}" class="hover:text-white transition-colors">Daftar Online</a></li>
                </ul>
            </div>

            {{-- Kontak --}}
            <div>
                <h3 class="font-semibold mb-4 text-xl text-black dark:text-white">Kontak</h3>
                <ul class="space-y-2 text-sm text-gray-500">
                    <li>📞 62 851-7966-3858</li>
                    <li>✉️ pkm.pantaiamal@gmail.com</li>
                    <li>📍 Jl. Sei Kayan, Kelurahan Pantai Amal Tarakan</li>
                </ul>
            </div>
        </div>

        {{-- Bottom --}}
        <div class="pt-8 border-t border-gray-900 flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-gray-500">
            <div>© {{ date('Y') }} UPTD Puskesmas. All rights reserved.</div>
            <div class="flex gap-6">
                <a href="{{ url('/privacy') }}" class="hover:text-white transition-colors">Privacy</a>
                <a href="{{ url('/terms') }}" class="hover:text-white transition-colors">Terms</a>
                <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors">Instagram</a>
                <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors">Facebook</a>
            </div>
        </div>
    </div>
</footer>