@props([
    'title' => '',
    'excerpt' => '',
    'image' => null,
    'url' => '#',
    'date' => null,
    'category' => null,
    'author' => null,
    'tags' => [],
])

@php
    $imgSrc = $image ? asset('storage/' . $image) : null;
    $fallbackBg = 'bg-gradient-to-br from-emerald-100 to-teal-100 dark:from-emerald-900/40 dark:to-teal-900/40';
@endphp

<a href="{{ $url }}" class="group flex flex-col overflow-hidden rounded-2xl border border-neutral-200 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-emerald-300 hover:shadow-md dark:border-neutral-700 dark:bg-neutral-900 dark:hover:border-emerald-700">
    <div class="relative aspect-[16/10] overflow-hidden bg-neutral-100 dark:bg-neutral-800">
        @if ($imgSrc)
            <img
                src="{{ $imgSrc }}"
                alt="{{ $title }}"
                class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                loading="lazy"
            />
        @else
            <div class="flex h-full w-full items-center justify-center {{ $fallbackBg }}">
                <i data-lucide="file-text" class="w-12 h-12 text-emerald-600/40 dark:text-emerald-400/40"></i>
            </div>
        @endif
    </div>

    <div class="flex flex-1 flex-col p-5">
        <div class="mb-2 flex flex-wrap items-center gap-2 text-xs text-neutral-400">
            @if ($date)
                <span class="flex items-center gap-1">
                    <i data-lucide="calendar" class="w-3 h-3"></i>
                    {{ $date }}
                </span>
            @endif
            @if ($category)
                <span class="rounded-full bg-emerald-50 px-2 py-0.5 text-emerald-700 dark:bg-emerald-950/50 dark:text-emerald-300">
                    {{ $category }}
                </span>
            @endif
        </div>

        <h3 class="mb-1.5 line-clamp-2 font-bold text-slate-800 transition-colors group-hover:text-emerald-700 dark:text-slate-100 dark:group-hover:text-emerald-400">
            {{ $title }}
        </h3>

        <p class="mb-3 line-clamp-2 flex-1 text-sm leading-relaxed text-neutral-500 dark:text-neutral-400">
            {{ $excerpt }}
        </p>

        <div class="mt-auto flex items-center gap-1 text-xs font-semibold text-emerald-600 transition-transform group-hover:translate-x-0.5 dark:text-emerald-400">
            Baca Selengkapnya
            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
        </div>
    </div>
</a>
