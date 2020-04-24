<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative my-5" role="alert">
    <strong class="font-bold">{{ $title }}</strong>
    {{ $slot }}
    <span class="block sm:inline">{{ $body }}</span>
    {{ $slot }}
</div>
