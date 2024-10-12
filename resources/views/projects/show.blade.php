<x-layouts.app>
    <div class="grid grid-cols-3 gap-6">
        <livewire:projects.show :$project/>
        <livewire:projects.proposals class="col-start-3 col-end-4" :$project/>
    </div>
</x-layouts.app>