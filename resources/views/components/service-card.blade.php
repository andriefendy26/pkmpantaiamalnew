@props([
    'title' => '',
    'excerpt' => '',
    'image' => null,
    'icon' => null,
    'url' => '#',
    'color' => 'emerald',
])

@php
    $warnaMap = [
        'emerald' => ['bg' => 'bg-emerald-50 dark:bg-emerald-950/40', 'icon' => 'bg-emerald-100 text-emerald-600 dark:bg-emerald-900 dark:text-emerald-400', 'border' => 'border-emerald-100 dark:border-emerald-900', 'hover' => 'hover:border-emerald-300 dark:hover:border-emerald-700'],
        'rose'    => ['bg' => 'bg-rose-50 dark:bg-rose-950/40', 'icon' => 'bg-rose-100 text-rose-600 dark:bg-rose-900 dark:text-rose-400', 'border' => 'border-rose-100 dark:border-rose-900', 'hover' => 'hover:border-rose-300 dark:hover:border-rose-700'],
        'sky'     => ['bg' => 'bg-sky-50 dark:bg-sky-950/40', 'icon' => 'bg-sky-100 text-sky-600 dark:bg-sky-900 dark:text-sky-400', 'border' => 'border-sky-100 dark:border-sky-900', 'hover' => 'hover:border-sky-300 dark:hover:border-sky-700'],
        'violet'  => ['bg' => 'bg-violet-50 dark:bg-violet-950/40', 'icon' => 'bg-violet-100 text-violet-600 dark:bg-violet-900 dark:text-violet-400', 'border' => 'border-violet-100 dark:border-violet-900', 'hover' => 'hover:border-violet-300 dark:hover:border-violet-700'],
        'amber'   => ['bg' => 'bg-amber-50 dark:bg-amber-950/40', 'icon' => 'bg-amber-100 text-amber-600 dark:bg-amber-900 dark:text-amber-400', 'border' => 'border-amber-100 dark:border-amber-900', 'hover' => 'hover:border-amber-300 dark:hover:border-amber-700'],
        'teal'    => ['bg' => 'bg-teal-50 dark:bg-teal-950/40', 'icon' => 'bg-teal-100 text-teal-600 dark:bg-teal-900 dark:text-teal-400', 'border' => 'border-teal-100 dark:border-teal-900', 'hover' => 'hover:border-teal-300 dark:hover:border-teal-700'],
    ];
    $w = $warnaMap[$color] ?? $warnaMap['emerald'];
@endphp

<a href="{{ $url }}" class="group flex flex-col rounded-2xl border {{ $w['border'] }} {{ $w['bg'] }} {{ $w['hover'] }} p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-lg">
    @if ($image)
        <div class="mb-4 aspect-video overflow-hidden rounded-xl bg-neutral-100 dark:bg-neutral-800">
            <img src="{{ asset('storage/' . $image) }}" alt="{{ $title }}" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy" />
        </div>
    @elseif ($icon)
        <div class="mb-4 inline-flex h-12 w-12 items-center justify-center rounded-xl {{ $w['icon'] }}">
            <i data-lucide="{{ $icon }}" class="w-[22px] h-[22px]"></i>
        </div>
    @endif

    <h3 class="mb-2 font-bold text-slate-800 dark:text-slate-100">{{ $title }}</h3>
    <p class="text-sm leading-relaxed text-neutral-500 dark:text-neutral-400">{{ $excerpt }}</p>
</a>
