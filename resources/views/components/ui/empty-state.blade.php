@props([
    'icon' => 'users',
    'title' => 'No Data Found',
    'message' => 'There are currently no items to display.',
    'action' => null,
])

<div class="p-12 text-center bg-gray-50 border-2 border-black border-dashed flex flex-col items-center justify-center">
    <div class="bg-white p-4 rounded-full border-2 border-black shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] mb-6">
        <x-ui.icon :name="$icon" class="w-8 h-8 text-gray-800" />
    </div>
    <h3 class="text-xl font-black text-black uppercase tracking-tight mb-2">{{ $title }}</h3>
    <p class="font-bold text-gray-500 max-w-sm mx-auto mb-6">{{ $message }}</p>

    @if($action)
        <div>
            {{ $action }}
        </div>
    @endif
</div>
