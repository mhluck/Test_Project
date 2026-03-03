<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <!--
Install the "flowbite-typography" NPM package to apply styles and format the article content:

URL: https://flowbite.com/docs/components/typography/
-->

    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-primary-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-7xl ">
            <article
                class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <a href="/posts" class="font-medium text-xs text-blue-500 hover:underline">&laquo; Back to Posts</a>
                    <address class="flex items-center my-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-">
                            <img class="mr-4 w-16 h-16 rounded-full"
                                src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                alt="{{ $post->author->name }}" />
                            <div>
                                <a href="/authors/{{ $post->author->username }}" rel="author"
                                    class="text-xl font-bold text-primary-900 dark:text-primary-100 hover:underline">
                                    {{ $post->author->name }}
                                </a>
                                <p class="text-base text-gray-500 dark:text-primary-400 mb-2">
                                    <time>{{ $post->created_at->format('D d M Y') }}</time>
                                </p>
                                <div class="flex justify-between items-center mb-5 text-primary-500">
                                    <span
                                        class="bg-{{ $post->category->color }}-100 text-primary-800 text-l font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                        {{-- <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                                    </path>
                                </svg> --}}
                                        <a href="/categories/{{ $post->category->slug }}">
                                            {{ $post->category->name }}
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </address>
                    <h1 class="mb-4 text-3xl font-bold text-primary-900 lg:mb-6 lg:text-4xl dark:text-primary-100">
                        {{ $post->title }}</h1>
                </header>
                <p>
                    {{ $post->content }}
                </p>
            </article>
        </div>
    </main>

    {{-- <article class="py-8 max-w-3xl border-b border-gray-300">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
        <div>
            By
            <a href="/authors/{{ $post->author->username }}"
                class="text-base text-gray-500 hover:underline">{{ $post->author->name }}</a>
            in
            <a href="/categories/{{ $post->category->slug }}"
                class="text-base text-gray-500 hover:underline">{{ $post->category->name }}</a>
            | {{ $post->created_at->diffForHumans() }}
        </div>
        <p class="my-4 font-light">{{ $post['content'] }}</p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to Posts</a>
    </article> --}}

</x-layout>
