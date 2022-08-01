<x-layout>
    <x-nav/>
    <main class="mt-12 ">

            @foreach ($posts as $post)
                <x-cards.post-card :post="$post" />
            @endforeach


    </main>
    @include('components._footer')
</x-layout>
