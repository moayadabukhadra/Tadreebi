<x-layout>
    @include('components._header')
    <main class="bg-white">
        <div class="grid justify-center grid-flow-col grid-rows-4 gap-20" >
            <x-cards.post-card  />
            <x-cards.post-card />
            <x-cards.post-card />
            <x-cards.post-card />
            <x-cards.post-card />
            <x-cards.post-card />

        </div>
    </main>
</x-layout>
