@props(['post'])
<x-layout>
<article {{ $attributes-> merge(['class' =>"transition-colors duration-300 hover:bg-gray-200 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl bg-gray-100 mb-16"]) }}>
    <div class="px-5 py-6">
        <div class="flex">

            <a href="/company/dashboard/{{$post->company->id}}"><img src="{{ asset('storage/' . $post->thumbnail) }}" alt="Blog Post illustration" class="rounded-full" width="300" height="300"></a>
            <p class="m-16 text-gray-500 text-md">{{ $post->description }}</p>
        </div>

        <div class="flex flex-col justify-between mt-8 ">
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
                @if($post->company->logo)
                    <img src="{{ asset('storage/' . $post->company->logo) }}" class="rounded-full" alt="company logo" width="50">
                @else
                <img src="/images/company.png" alt="company logo" class="rounded-full" width="50">
                @endif
                    <div class="ml-3">
                        <h5 class="font-bold text-black"><a href="/company/dashboard/{{$post->company->id}}">{{ $post->company->name }}</a></h5>
                    </div>
                </div>

                <div>
                    <a href="/student/apply/{{ $post->id }}" class="px-8 py-2 text-xs font-semibold transition-colors duration-300 bg-gray-300 rounded-full hover:bg-gray-400">
                        Apply
                    </a>
                </div>
            </footer>
        </div>
    </div>
</article>
</x-layout>
