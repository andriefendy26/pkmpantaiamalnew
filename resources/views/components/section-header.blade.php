@props([
    'label' => '',
    'title' => '',
    'subtitle' => '',
    'align' => 'center',
])

<div @class([
    'mb-12',
    'text-center' => $align === 'center',
    'text-left' => $align === 'left',
])>
    @if ($label)
        <span class="mb-3 inline-block rounded-full border border-emerald-200 bg-emerald-50 px-4 py-1 text-xs font-semibold uppercase tracking-widest text-emerald-700 dark:border-emerald-800 dark:bg-emerald-950 dark:text-emerald-300">
            {{ $label }}
        </span>
    @endif

    @if ($title)
        <h2 class="edu-vic-wa-nt-hand text-3xl font-bold text-slate-800 dark:text-slate-100 md:text-4xl">
            {{ $title }}
        </h2>
    @endif

    @if ($subtitle)
        <p class="mx-auto mt-3 max-w-xl text-sm text-neutral-500 dark:text-neutral-400">
            {{ $subtitle }}
        </p>
    @endif
</div>
