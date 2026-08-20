<footer class="bg-white dark:bg-neutral-950 border-t border-neutral-200 dark:border-neutral-800 mt-0">
    <div class="container mx-auto max-w-7xl px-4 py-12">

        {{-- ── CTA: Mobile JKN & Lapor ──────────────────────── --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-12">
            <a href="https://play.google.com/store/apps/details?id=app.bpjs.mobile"
               target="_blank" rel="noopener noreferrer"
               class="group flex items-center gap-4 rounded-xl border border-blue-200 bg-blue-50/60 px-5 py-4 transition-colors hover:bg-blue-50 dark:border-blue-900 dark:bg-blue-950/30 dark:hover:bg-blue-950/50">
                <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-blue-600 text-white">
                    <i data-lucide="smartphone" class="w-5 h-5"></i>
                </span>
                <span class="flex-1 min-w-0">
                    <span class="block text-sm font-semibold text-slate-800 dark:text-slate-100">Mobile JKN</span>
                    <span class="block text-xs text-neutral-500 dark:text-neutral-400 truncate">Unduh aplikasi BPJS Kesehatan</span>
                </span>
                <i data-lucide="arrow-up-right" class="w-4 h-4 shrink-0 text-blue-600 transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5 dark:text-blue-400"></i>
            </a>

            <a href="https://www.lapor.go.id/"
               target="_blank" rel="noopener noreferrer"
               class="group flex items-center gap-4 rounded-xl border border-red-200 bg-red-50/60 px-5 py-4 transition-colors hover:bg-red-50 dark:border-red-900 dark:bg-red-950/30 dark:hover:bg-red-950/50">
                <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-red-600 text-white">
                    <i data-lucide="megaphone" class="w-5 h-5"></i>
                </span>
                <span class="flex-1 min-w-0">
                    <span class="block text-sm font-semibold text-slate-800 dark:text-slate-100">Lapor</span>
                    <span class="block text-xs text-neutral-500 dark:text-neutral-400 truncate">Sampaikan pengaduan &amp; aspirasi</span>
                </span>
                <i data-lucide="arrow-up-right" class="w-4 h-4 shrink-0 text-red-600 transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5 dark:text-red-400"></i>
            </a>
        </div>

        {{-- ── Main content ─────────────────────────────────── --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-8 mb-12">
            {{-- Brand --}}
            <div>
                <div class="flex items-center space-x-2 mb-4">
                    <span class="edu-vic-wa-nt-hand text-2xl font-bold text-slate-800 dark:text-white">Puskesmas Pantai Amal</span>
                </div>
                <p class="text-sm text-neutral-500 dark:text-neutral-400">
                    Melayani dengan sepenuh hati untuk kesehatan masyarakat
                </p>
            </div>

            {{-- Profil --}}
            <div>
                <h3 class="font-semibold mb-4 text-sm uppercase tracking-wide text-slate-800 dark:text-slate-100">Profil</h3>
                <ul class="space-y-2 text-sm text-neutral-600 dark:text-neutral-400">
                    <li><a href="{{ url('/profil/tentang') }}" class="hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors">Tentang Kami</a></li>
                    <li><a href="{{ url('/profil/visi-misi') }}" class="hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors">Visi &amp; Misi</a></li>
                    <li><a href="{{ url('/profil/struktur-organisasi') }}" class="hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors">Struktur Organisasi</a></li>
                </ul>
            </div>

            {{-- Layanan --}}
            <div>
                <h3 class="font-semibold mb-4 text-sm uppercase tracking-wide text-slate-800 dark:text-slate-100">Layanan</h3>
                <ul class="space-y-2 text-sm text-neutral-600 dark:text-neutral-400">
                    <li><a href="{{ url('/layanan/poli') }}" class="hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors">Layanan Poli</a></li>
                    <li><a href="{{ url('/jadwal/dokter') }}" class="hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors">Jadwal Dokter</a></li>
                    <li><a href="{{ url('/daftar-online') }}" class="hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors">Daftar Online</a></li>
                </ul>
            </div>

            {{-- Lainnya --}}
            <div>
                <h3 class="font-semibold mb-4 text-sm uppercase tracking-wide text-slate-800 dark:text-slate-100">Lainnya</h3>
                <ul class="space-y-2 text-sm text-neutral-600 dark:text-neutral-400">
                    <li><a href="{{ url('/portal') }}" class="hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors">Portal Sistem Informasi</a></li>
                    <li><a href="{{ url('/survey-kepuasan-masyarakat') }}" class="hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors">Survey Kepuasan Masyarakat</a></li>
                    <li><a href="https://sippn.menpan.go.id/instansi/uptd-puskesmas-pantai-amal-173699" target="_blank" rel="noopener noreferrer" class="hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors">SIPPN</a></li>
                    <li><a href="{{ url('/pengaduan') }}" class="hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors">Pengaduan</a></li>
                    <li><a href="{{ url('/galeri') }}" class="hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors">Galeri</a></li>
                </ul>
            </div>

            {{-- Kontak --}}
            <div>
                <h3 class="font-semibold mb-4 text-sm uppercase tracking-wide text-slate-800 dark:text-slate-100">Kontak</h3>
                <ul class="space-y-3 text-sm text-neutral-600 dark:text-neutral-400">
                    <li class="flex items-start gap-2">
                        <i data-lucide="phone" class="w-4 h-4 mt-0.5 shrink-0 text-emerald-600 dark:text-emerald-400"></i>
                        <span>62 851-7966-3858</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <i data-lucide="mail" class="w-4 h-4 mt-0.5 shrink-0 text-emerald-600 dark:text-emerald-400"></i>
                        <span>pkm.pantaiamal@gmail.com</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <i data-lucide="map-pin" class="w-4 h-4 mt-0.5 shrink-0 text-emerald-600 dark:text-emerald-400"></i>
                        <span>Jl. Sei Kayan, Kelurahan Pantai Amal Tarakan</span>
                    </li>
                </ul>
            </div>
        </div>

        {{-- ── Bottom ────────────────────────────────────────── --}}
        <div class="pt-8 border-t border-neutral-200 dark:border-neutral-800 flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-neutral-500 dark:text-neutral-400">
            <div>© {{ date('Y') }} UPTD Puskesmas. All rights reserved.</div>

            <div class="flex items-center gap-6">
                <a href="{{ url('/privacy') }}" class="hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors">Privacy</a>
                <a href="{{ url('/terms') }}" class="hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors">Terms</a>

                <div class="flex items-center gap-4 border-l border-neutral-200 pl-6 dark:border-neutral-800">
                    <a href="https://instagram.com/puskesmaspantaiamal" target="_blank" rel="noopener noreferrer" aria-label="Instagram" class="hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.88 1.44 1.44 0 0 0 0-2.88z"/>
                        </svg>
                    </a>
                    <a href="https://facebook.com/puskesmaspantaiamal" target="_blank" rel="noopener noreferrer" aria-label="Facebook" class="hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.101 23.691v-7.98H6.627v-3.667h2.474v-1.58c0-4.085 1.848-5.978 5.858-5.978.401 0 .955.042 1.468.103a8.68 8.68 0 0 1 1.141.195v3.325a8.623 8.623 0 0 0-.653-.036 26.805 26.805 0 0 0-.733-.009c-.707 0-1.259.096-1.675.309a1.686 1.686 0 0 0-.679.622c-.185.33-.284.827-.284 1.5v1.549h3.746l-.643 3.667h-3.103v7.98H9.101z"/>
                        </svg>
                    </a>
                    <a href="https://youtube.com/@puskesmaspantaiamal" target="_blank" rel="noopener noreferrer" aria-label="YouTube" class="hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                        </svg>
                    </a>
                    <a href="https://tiktok.com/@puskesmaspantaiamal" target="_blank" rel="noopener noreferrer" aria-label="TikTok" class="hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.6 5.82s.51.5 0 0A4.278 4.278 0 0 1 15.54 3h-3.09v12.4a2.59 2.59 0 0 1-2.59 2.5c-1.42 0-2.6-1.16-2.6-2.6 0-1.72 1.66-3.01 3.37-2.48V9.66c-3.45-.46-6.47 2.22-6.47 5.64 0 3.33 2.76 5.7 5.69 5.7 3.14 0 5.69-2.55 5.69-5.7V9.01a7.35 7.35 0 0 0 4.3 1.38V7.3s-1.88.09-3.24-1.48z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>