<x-blog-layout>
    @if (count($posts))
        <section class="py-8 bg-image h-72">
            <header class="container mx-auto px-6 text-center">
                <h1
                    class="inherits-color pt-12 text-balance leading-tighter relative z-10 text-5xl font-semibold tracking-tight">
                    Welcome to <span
                        class="inherits-color pt-12 text-balance leading-tighter relative z-10 text-5xl font-semibold tracking-tight text-orange-500">Vokasi</span>
                    News
                </h1>
            </header>
        </section>
        <section class="py-8">
            <div class="container mx-auto">
                <div class="">
                    {{-- Hero Post      --}}
                    @foreach ($posts->take(1) as $post)
                        <div>
                            <x-blog-feature-card :post="$post" />
                        </div>
                    @endforeach
                    {{-- Hero Post      --}}
                </div>
            </div>
        </section>
        <section class="pb-16 pt-8">
            <div class="container mx-auto">
                <div class="grid sm:grid-cols-3 gap-x-14 gap-y-14">
                    @foreach ($posts->skip(1) as $post)
                        <x-blog-card :post="$post" />
                    @endforeach
                </div>
                <div class="flex justify-center pt-20">
                    <a href="{{ route('filamentblog.post.all') }}"
                        class="flex items-center justify-center md:gap-x-5 rounded-full bg-slate-100 px-20 py-4 text-sm font-semibold transition-all duration-300 hover:bg-slate-200">
                        <span>Show all blogs</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" d="M6 18L18 6m0 0H9m9 0v9" />
                        </svg>
                    </a>
                </div>
            </div>
        </section>
    @else
        <div class="container mx-auto">
            @session('error')
                <div class="p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50" role="alert">
                    {{ session('error') }}
                </div>
            @endsession
            <div class="flex justify-center">
                <p class="text-2xl font-semibold text-gray-300">No posts found</p>
            </div>
        </div>
    @endif

</x-blog-layout>

<style>
    .bg-image {
        background-image: url('ppp/img/bg2.png');
        /* Replace with the path to your background image */
        background-size: cover;
        /* background-position: center; */
        background-repeat: no-repeat;
        /* Ensures text is readable against the background image */
    }
</style>
