<div
    @if($eventClickEnabled)
        wire:click.stop="onEventClick('{{ $event['id']  }}')"
    @endif
    class="border-green-200 text-green-800 bg-green-100 px-2 py-1 rounded-lg mt-1 overflow-hidden border cursor-pointer">

    <p class="text-sm truncate leading-tight">
        {{ $event['status'] }}
    </p>
</div>