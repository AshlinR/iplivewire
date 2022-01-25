<x-app-layout>
    <x-slot name="header">
        Actors
    </x-slot>


    <div class="mr-10">
        {{-- <livewire:entity.entity-table /> --}}
        {{-- <livewire:entity.index /> --}}
        {{-- <livewire:entity-table /> --}}
        {{-- <livewire:entity-table-view /> --}}
        {{-- <livewire:entity.entity.index /> --}}
        {{-- <livewire:entity.modal /> --}}

        <livewire:actor.index />
    </div>

</x-app-layout>
