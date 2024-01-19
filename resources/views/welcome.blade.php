<x-default-layout>
    <section class="flex items-center bg-stone-100 xl:h-screen font-poppins dark:bg-gray-800 ">
        <div class="justify-center flex-1 max-w-6xl py-4 mx-auto lg:py-6 md:px-6">
            <div class="flex flex-wrap ">
                <div class="w-full px-4 mb-10 lg:w-1/2 lg:mb-0">
                    <div class="relative lg:max-w-md">
                        <img src="https://cdn.timesmedia.co.id/images/2020/03/07/bikini-bottom.jpg" alt="aboutimage"
                            class="relative z-10 object-cover w-full rounded h-96">
                        <div
                            class="absolute bottom-0 right-0 z-10 p-8 bg-white border-4 border-blue-500 rounded shadow dark:border-blue-400 lg:-mb-8 lg:-mr-11 sm:p-8 dark:text-gray-300 dark:bg-gray-800 ">
                            <p class="text-lg font-semibold md:w-72">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    class="absolute top-0 left-0 w-16 h-16 text-blue-700 dark:text-gray-300 opacity-10"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z">
                                    </path>
                                </svg> Successfully Providing business solutions from 25 years
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full px-6 mb-10 lg:w-1/2 lg:mb-0 ">
                    <div class="pl-4 mb-6 border-l-4 border-blue-500 ">
                        <span class="text-sm text-gray-600 uppercase dark:text-gray-400">Who we are?</span>
                        <h1 class="mt-2 text-3xl font-black text-gray-700 md:text-5xl dark:text-gray-300">
                            About Us
                        </h1>
                    </div>
                    <p class="mb-6 text-base leading-7 text-gray-500 dark:text-gray-400">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam Lorem ipsum dolor sit
                        amet. labore et dolore magna aliqua. Ut enim ad minim veniam Lorem ipsum dolor sit
                        amet. amet. labore et dolore magna aliqua. Ut enim ad minim veniam Lorem ipsum dolor sit
                        amet.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        Lorem ipsum dolor sit amet.
                    </p>
                    <a href="/admin"
                        class="px-4 py-2 text-gray-100 bg-blue-500 rounded dark:bg-blue-400 dark:hover:bg-blue-500 hover:bg-blue-600">
                        Learn more
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="flex items-center bg-gray-100 lg:h-screen dark:bg-gray-800">
        <div class="p-4 mx-auto max-w-7xl">
            <div class="grid grid-cols-1 gap-4 lg:gap-8 sm:gap-4 sm:grid-cols-2 lg:grid-cols-3">
                @forelse ($posts as $post)
                <div class="mb-0 overflow-hidden bg-white rounded shadow dark:bg-gray-700">
                    <div class="relative overflow-hidden h-72">
                        {{-- <span class="absolute px-3 py-1 text-xs text-white bg-blue-500 rounded bottom-3 right-3">
                            {{ $post->slug }}
                        </span> --}}
                        <img class="object-cover w-full h-full transition-all hover:scale-110"
                            src="{{ $post->banner_url }}" alt="{{ $post->tittle }}">
                    </div>
                    <div class="relative z-20 p-8 -mt-16 ">
                        <div class="flex items-center">
                            <img class="object-cover w-20 h-20 mb-4 border-4 border-white rounded-full dark:border-gray-700"
                                src="{{ $post->author->photo_url }}"
                                alt="{{ $post->name }}">
                            <div class="flex flex-col items-center ml-2">
                                <span
                                    class="block mt-3 mb-2 text-xs font-semibold text-blue-700 uppercase dark:text-blue-300">
                                    {{ $post->author->name }} • {{ $post->created_at -> format('d, M Y H:i') }}
                                </span>
                            </div>
                        </div>
                        <h2 class="mb-3 text-2xl font-bold leading-9 text-blue-800 dark:text-white">
                            {{ $post->title }}
                        </h2>
                        <p class="mb-4 text-base leading-7 text-gray-400">
                            {{ $post->excerpt }}
                        </p>
                        <a class="flex items-center text-sm font-semibold" href="{{ route('posts.show', $post->slug) }}">
                            <div class="flex items-center px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">
                                More Details
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                                    class="ml-1" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                    </path>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
                @empty
                <h1 class="font-semibold italic text-sm text-gray-500">
                    There are no post to show.
                </h1>
                    
                @endforelse
            </div>
        </div>
    </section>
</x-default-layout>


