<x-layout>
    <x-nav />


    <main class="gap-5 m-16 mt-24 mb-8 lg:grid lg:grid-cols-2 gap-y-5">

        @foreach ($posts as $post)
        <x-cards.post-card :post="$post" />
        @endforeach

    </main>

    @include('components._footer')
</x-layout>
