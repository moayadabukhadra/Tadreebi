<x-layout>
    <x-nav/>
    @include('components._header')

    <main class="lg:grid lg:grid-cols-2">
            @foreach ($posts as $post)


                <x-cards.post-card :post="$post"/>







            @endforeach
            </main>


    @include('components._footer')
</x-layout>
