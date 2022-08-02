@props(['post'])
<x-layout>
<article {{ $attributes-> merge(['class' =>"transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl"]) }}>
    <div class="px-5 py-6">
        <div>
            <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="Blog Post illustration" class="rounded-xl" width="300" height="300">
        </div>

        <div class="flex flex-col justify-between mt-8">
            <header>

                <div class="mt-4">
                    <a href="/posts/{{ $post->id }}">
                        <h1 class="text-3xl text-black">
                            {{ $post->title }}
                        </h1>
                    </a>

                    <span class="block mt-2 text-xs text-gray-400">
                        {{ $post->created_at->diffForHumans() }}
                    </span>
                    </span>
                </div>
            </header>



            <footer class="flex items-center justify-between mt-8">
                <div class="flex items-center text-sm">
                    <img src="/images/lary-avatar.svg" alt="Lary avatar">
                    <div class="ml-3">
                        <h5 class="font-bold text-black"><a href="/?author={{ $post->company->name }}">{{ $post->company->name }}</a></h5>
                    </div>
                </div>

                <div>
                    <a href="/student/apply/{{ $post->id }}" class="px-8 py-2 text-xs font-semibold transition-colors duration-300 bg-gray-200 rounded-full hover:bg-gray-300">
                        Apply
                    </a>
                </div>
            </footer>
        </div>
    </div>
</article>
</x-layout>
