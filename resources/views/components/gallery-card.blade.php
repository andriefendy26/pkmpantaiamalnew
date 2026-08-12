@props([
    'title' => '',
    'description' => '',
    'cover_image' => null,
    'event_date' => null,
    'item_count' => 0,
    'url' => '#',
])

@php
    $imgSrc = $cover_image ? asset('storage/' . $cover_image) : null;
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
            <div class="flex h-full w-full items-center justify-center bg-gradient-to-br from-emerald-100 to-teal-100 dark:from-emerald-900/40 dark:to-teal-900/40">
                <i data-lucide="image" class="w-12 h-12 text-emerald-600/40 dark:text-emerald-400/40"></i>
            </div>
        @endif
        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 transition-opacity duration-300 group-hover:opacity-100"></div>
    </div>

    <div class="flex flex-1 flex-col p-5">
        <div class="mb-2 flex items-center justify-between gap-2">
            <h3 class="line-clamp-2 font-bold text-slate-800 transition-colors group-hover:text-emerald-700 dark:text-slate-100 dark:group-hover:text-emerald-400">
                {{ $title }}
            </h3>
        </div>

        <p class="mb-3 line-clamp-2 flex-1 text-sm leading-relaxed text-neutral-500 dark:text-neutral-400">
            {{ $description }}
        </p>

        <div class="mt-auto flex items-center gap-3 text-xs text-neutral-400">
            @if ($event_date)
                <span class="flex items-center gap-1">
                    <i data-lucide="calendar" class="w-3 h-3"></i>
                    {{ \Carbon\Carbon::parse($event_date)->format('d M Y') }}
                </span>
            @endif
            @if ($item_count)
                <span class="flex items-center gap-1">
                    <i data-lucide="image" class="w-3 h-3"></i>
                    {{ $item_count }} foto
                </span>
            @endif
        </div>
    </div>
</a>
