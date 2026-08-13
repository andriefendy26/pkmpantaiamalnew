@if ($paginator->hasPages())
    <nav class="flex items-center justify-center gap-1.5" role="navigation" aria-label="Pagination">
        {{-- Previous --}}
        @if ($paginator->onFirstPage())
            <span class="inline-flex h-9 w-9 items-center justify-center rounded-lg border border-neutral-200 text-neutral-300 dark:border-neutral-800 dark:text-neutral-700">
                <i data-lucide="chevron-left" class="w-4 h-4"></i>
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="inline-flex h-9 w-9 items-center justify-center rounded-lg border border-neutral-200 text-neutral-600 transition-colors hover:border-emerald-300 hover:text-emerald-600 dark:border-neutral-700 dark:text-neutral-300 dark:hover:border-emerald-700 dark:hover:text-emerald-400">
                <i data-lucide="chevron-left" class="w-4 h-4"></i>
            </a>
        @endif

        {{-- Page numbers --}}
        @foreach ($elements as $element)
            @if (is_string($element))
                <span class="inline-flex h-9 w-9 items-center justify-center text-sm text-neutral-400">{{ $element }}</span>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="inline-flex h-9 w-9 items-center justify-center rounded-lg bg-emerald-600 text-sm font-semibold text-white">
                            {{ $page }}
                        </span>
                    @else
                        <a href="{{ $url }}" class="inline-flex h-9 w-9 items-center justify-center rounded-lg border border-neutral-200 text-sm font-medium text-neutral-600 transition-colors hover:border-emerald-300 hover:text-emerald-600 dark:border-neutral-700 dark:text-neutral-300 dark:hover:border-emerald-700 dark:hover:text-emerald-400">
                            {{ $page }}
                        </a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="inline-flex h-9 w-9 items-center justify-center rounded-lg border border-neutral-200 text-neutral-600 transition-colors hover:border-emerald-300 hover:text-emerald-600 dark:border-neutral-700 dark:text-neutral-300 dark:hover:border-emerald-700 dark:hover:text-emerald-400">
                <i data-lucide="chevron-right" class="w-4 h-4"></i>
            </a>
        @else
            <span class="inline-flex h-9 w-9 items-center justify-center rounded-lg border border-neutral-200 text-neutral-300 dark:border-neutral-800 dark:text-neutral-700">
                <i data-lucide="chevron-right" class="w-4 h-4"></i>
            </span>
        @endif
    </nav>
@endif