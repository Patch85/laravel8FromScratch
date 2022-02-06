<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 8 From Scratch Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body style="font-family: Open Sans, sans-serif;">
    <section class="px-6 py-8">

        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="/">
                    <img src="/images/logo.svg" alt="Laracasts Logo" width="165px" height="16px">
                </a>
            </div>

            <div class="mt-8 md:mt-0">
                <a href="/" class="text-xs font-semi-bold uppercase">Home Page</a>

                <a href="#"
                    class="text-xs text-white font-semi-bold bg-blue-500 ml-3 rounded-full uppercase py-3 px-3">Subscribe
                    for Updates</a>
            </div>
        </nav>

        <header class="max-w-4xl mx-auto mt-10 text-center">
            <div class="max-w-xl mx-auto">
                <h1 class="text-4xl">Latest <span class="text-blue-500">Laravel From Scratch</span> News</h1>

                <h2 class="inline-flex mt-2">By Lary Laracore <img src="/images/lary-head.svg" alt="Lary Head"
                        class="ml-1"> </h2>

                <p class="text-sm mt-14">
                    Another year. Another update. We're refreshing the popular Laravel series with new content.
                    I'm going to keep you guys up to speed with what's going on!
                </p>

                <div class="tw-flex tw-justify-center mt-8 space-y-2 lg:space-y-0 lg:space-x-4">
                    <!-- Category -->
                    <span class="relative flex lg:inline-flex items-center bg-gray-300 rounded-xl">
                        <select class="flex-1 appearance-none bg-transparent pr-9 py-2 px-5 text-sm font-semibold">
                            <option value="category" disabled selected>Category</option>
                            <option value="personal">Personal</option>
                            <option value="business">Business</option>
                        </select>

                        <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22"
                            height="22" viewBox="0 0 22 22">
                            <g fill="none" fill-rule="evenodd">
                                <path fill="#222"
                                    d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                            </g>
                        </svg>
                    </span>

                    <!-- Other Filters -->
                    <span class="relative flex lg:inline-flex items-center bg-gray-300 rounded-xl">
                        <select class="flex-1 appearance-none bg-transparent py-2 pr-9 px-5 text-sm font-semibold">
                            <option value="category" disabled selected>Other Filters</option>
                            <option value="other">Other</option>
                            <option value="filters">Filters</option>
                        </select>

                        <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22"
                            height="22" viewBox="0 0 22 22">
                            <g fill="none" fill-rule="evenodd">
                                <path fill="#222"
                                    d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                            </g>
                        </svg>
                    </span>

                    <!-- Search -->
                    <span class="relative flex lg:inline-flex items-center bg-gray-300 rounded-xl px-3 py-2">
                        <form action="#" method="get">
                            <input type="text" name="search" placeholder="Find something"
                                class="bg-transparent placeholder-black font-semibold">
                        </form>
                    </span>
                </div>
            </div>
        </header>

        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
            <article
                class="transition-colors duration-300 hover:bg-gray-100 rounded-xl border border-black border-opacity-0 hover:border-opacity-5">
                <div class="py-6  px-4 lg:flex">
                    <div class="flex-1 lg:mr-8">
                        <img src="/images/illustration-1.png" alt="Blog post illustration 1" class="rounded-xl">
                    </div>

                    <div class="flex-1 flex flex-col justify-between">
                        <header class="mt-8 lg:mt-0">
                            <div class="space-x-2">
                                <a href="#"
                                    class="px-2 py-1 border border-blue-300 text-xs text-blue-300 rounded-full uppercase font-semibold">Techniques</a>

                                <a href="#"
                                    class="px-2 py-1 border border-red-300 text-xs text-red-300 rounded-full uppercase font-semibold">Updates</a>
                            </div>

                            <div class="mt-4">
                                <h1 class="text-3xl">This is a big title and it will look great on two or even
                                    three
                                    lines. Woohoo!</h1>
                                <span class="mt-2 block text-gray-400 text-xs">
                                    <time datetime="2020-11-17">November 17, 2020</time>
                                </span>
                            </div>
                        </header>

                        <div class="text-sm mt-2">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo neque maxime excepturi
                                reprehenderit. Et reiciendis dicta dignissimos dolor optio? Lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Amet alias sint suscipit ex accusantium eaque, accusamus
                                corporis expedita autem!</p>

                            <p class="mt-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et
                                reiciendis
                                dicta dignissimos dolor optio?</p>
                        </div>

                        <footer class="flex justify-between items-center mt-2">
                            <div class="flex items-center text-sm">
                                <img src="/images/lary-avatar.svg" alt="Lary avatar">
                                <div class="ml-3">
                                    <h5 class="font-bold">Lary Laracore</h5>
                                    <h6>Mascot at Laracasts</h6>
                                </div>
                            </div>

                            <div class="hidden lg:block">
                                <a href="#" class="text-sm font-semibold bg-gray-200 rounded-full py-2 px-6">Read
                                    More</a>
                            </div>
                        </footer>
                    </div>
                </div>
            </article>

            <div class="lg:grid lg:grid-cols-2">
                <article
                    class="transition-colors duration-300 hover:bg-gray-100 rounded-xl border border-black border-opacity-0 hover:border-opacity-5">
                    <div class="py-6 px-5">
                        <div class="mr-8">
                            <img src="/images/illustration-2.png" alt="Blog post illustration 1" class="rounded-xl">
                        </div>

                        <div class="mt-8 flex flex-col justify-between">
                            <header>
                                <div class="space-x-2">
                                    <a href="#"
                                        class="px-2 py-1 border border-blue-300 text-xs text-blue-300 rounded-full uppercase font-semibold">Techniques</a>

                                    <a href="#"
                                        class="px-2 py-1 border border-red-300 text-xs text-red-300 rounded-full uppercase font-semibold">Updates</a>
                                </div>

                                <div class="mt-4">
                                    <h1 class="text-3xl">This is a big title and it will look great on two or even
                                        three
                                        lines. Woohoo!</h1>
                                    <span class="mt- block text-gray-400 text-xs">
                                        <time datetime="2020-11-17">November 17, 2020</time>
                                    </span>
                                </div>
                            </header>

                            <div class="text-sm mt-4">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo neque maxime excepturi
                                    reprehenderit. Et reiciendis dicta dignissimos dolor optio? Lorem ipsum dolor sit
                                    amet consectetur adipisicing elit. Amet alias sint suscipit ex accusantium eaque,
                                    accusamus corporis expedita autem!</p>

                                <p class="mt-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et
                                    reiciendis
                                    dicta dignissimos dolor optio?</p>
                            </div>

                            <footer class="flex justify-between items-center mt-2">
                                <div class="flex items-center text-sm">
                                    <img src="/images/lary-avatar.svg" alt="Lary avatar">
                                    <div class="ml-3">
                                        <h5 class="font-bold">Lary Laracore</h5>
                                        <h6>Mascot at Laracasts</h6>
                                    </div>
                                </div>

                                <div>
                                    <a href="#" class="text-sm font-semibold bg-gray-200 rounded-full py-2 px-6">Read
                                        More</a>
                                </div>
                            </footer>
                        </div>
                    </div>
                </article>

                <article
                    class="transition-colors duration-300 hover:bg-gray-100 rounded-xl border border-black border-opacity-0 hover:border-opacity-5">
                    <div class="py-6 px-5">
                        <div class="mr-8">
                            <img src="/images/illustration-3.png" alt="Blog post illustration 1" class="rounded-xl">
                        </div>

                        <div class="mt-8 flex flex-col justify-between">
                            <header>
                                <div class="space-x-2">
                                    <a href="#"
                                        class="px-2 py-1 border border-blue-300 text-xs text-blue-300 rounded-full uppercase font-semibold">Techniques</a>

                                    <a href="#"
                                        class="px-2 py-1 border border-red-300 text-xs text-red-300 rounded-full uppercase font-semibold">Updates</a>
                                </div>

                                <div class="mt-4">
                                    <h1 class="text-3xl">This is a big title and it will look great on two or even
                                        three
                                        lines. Woohoo!</h1>
                                    <span class="mt- block text-gray-400 text-xs">
                                        <time datetime="2020-11-17">November 17, 2020</time>
                                    </span>
                                </div>
                            </header>

                            <div class="text-sm mt-4">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo neque maxime excepturi
                                    reprehenderit. Et reiciendis dicta dignissimos dolor optio? Lorem ipsum dolor sit
                                    amet consectetur adipisicing elit. Amet alias sint suscipit ex accusantium eaque,
                                    accusamus corporis expedita autem!</p>

                                <p class="mt-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et
                                    reiciendis
                                    dicta dignissimos dolor optio?</p>
                            </div>

                            <footer class="flex justify-between items-center mt-2">
                                <div class="flex items-center text-sm">
                                    <img src="/images/lary-avatar.svg" alt="Lary avatar">
                                    <div class="ml-3">
                                        <h5 class="font-bold">Lary Laracore</h5>
                                        <h6>Mascot at Laracasts</h6>
                                    </div>
                                </div>

                                <div>
                                    <a href="#" class="text-sm font-semibold bg-gray-200 rounded-full py-2 px-6">Read
                                        More</a>
                                </div>
                            </footer>
                        </div>
                    </div>
                </article>
            </div>

            <div class="lg:grid lg:grid-cols-3">
                <article
                    class="transition-colors duration-300 hover:bg-gray-100 rounded-xl border border-black border-opacity-0 hover:border-opacity-5">
                    <div class="py-6 px-5">
                        <div class="mr-8">
                            <img src="/images/illustration-1.png" alt="Blog post illustration 1" class="rounded-xl">
                        </div>

                        <div class="mt-8 flex flex-col justify-between">
                            <header>
                                <div class="space-x-2">
                                    <a href="#"
                                        class="px-2 py-1 border border-blue-300 text-xs text-blue-300 rounded-full uppercase font-semibold">Techniques</a>

                                    <a href="#"
                                        class="px-2 py-1 border border-red-300 text-xs text-red-300 rounded-full uppercase font-semibold">Updates</a>
                                </div>

                                <div class="mt-4">
                                    <h1 class="text-3xl">This is a big title and it will look great on two or even
                                        three
                                        lines. Woohoo!</h1>
                                    <span class="mt- block text-gray-400 text-xs">
                                        <time datetime="2020-11-17">November 17, 2020</time>
                                    </span>
                                </div>
                            </header>

                            <div class="text-sm mt-4">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo neque maxime excepturi
                                    reprehenderit. Et reiciendis dicta dignissimos dolor optio? Lorem ipsum dolor sit
                                    amet consectetur adipisicing elit. Amet alias sint suscipit ex accusantium eaque,
                                    accusamus corporis expedita autem!</p>

                                <p class="mt-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et
                                    reiciendis
                                    dicta dignissimos dolor optio?</p>
                            </div>

                            <footer class="flex justify-between items-center mt-2">
                                <div class="flex items-center text-sm">
                                    <img src="/images/lary-avatar.svg" alt="Lary avatar">
                                    <div class="ml-3">
                                        <h5 class="font-bold">Lary Laracore</h5>
                                        <h6>Mascot at Laracasts</h6>
                                    </div>
                                </div>

                                <div>
                                    <a href="#" class="text-sm font-semibold bg-gray-200 rounded-full py-2 px-6">Read
                                        More</a>
                                </div>
                            </footer>
                        </div>
                    </div>
                </article>

                <article
                    class="transition-colors duration-300 hover:bg-gray-100 rounded-xl border border-black border-opacity-0 hover:border-opacity-5">
                    <div class="py-6 px-5">
                        <div class="mr-8">
                            <img src="/images/illustration-4.png" alt="Blog post illustration 1"
                                class="rounded-xl">
                        </div>

                        <div class="mt-8 flex flex-col justify-between">
                            <header>
                                <div class="space-x-2">
                                    <a href="#"
                                        class="px-2 py-1 border border-blue-300 text-xs text-blue-300 rounded-full uppercase font-semibold">Techniques</a>

                                    <a href="#"
                                        class="px-2 py-1 border border-red-300 text-xs text-red-300 rounded-full uppercase font-semibold">Updates</a>
                                </div>

                                <div class="mt-4">
                                    <h1 class="text-3xl">This is a big title and it will look great on two or
                                        even three
                                        lines. Woohoo!</h1>
                                    <span class="mt- block text-gray-400 text-xs">
                                        <time datetime="2020-11-17">November 17, 2020</time>
                                    </span>
                                </div>
                            </header>

                            <div class="text-sm mt-4">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo neque maxime excepturi
                                    reprehenderit. Et reiciendis dicta dignissimos dolor optio? Lorem ipsum dolor sit
                                    amet consectetur adipisicing elit. Amet alias sint suscipit ex accusantium eaque,
                                    accusamus corporis expedita autem!</p>

                                <p class="mt-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et
                                    reiciendis
                                    dicta dignissimos dolor optio?</p>
                            </div>

                            <footer class="flex justify-between items-center mt-2">
                                <div class="flex items-center text-sm">
                                    <img src="/images/lary-avatar.svg" alt="Lary avatar">
                                    <div class="ml-3">
                                        <h5 class="font-bold">Lary Laracore</h5>
                                        <h6>Mascot at Laracasts</h6>
                                    </div>
                                </div>

                                <div>
                                    <a href="#" class="text-sm font-semibold bg-gray-200 rounded-full py-2 px-6">Read
                                        More</a>
                                </div>
                            </footer>
                        </div>
                    </div>
                </article>

                <article
                    class="transition-colors duration-300 hover:bg-gray-100 rounded-xl border border-black border-opacity-0 hover:border-opacity-5">
                    <div class="py-6 px-5">
                        <div class="mr-8">
                            <img src="/images/illustration-5.png" alt="Blog post illustration 1"
                                class="rounded-xl">
                        </div>

                        <div class="mt-8 flex flex-col justify-between">
                            <header>
                                <div class="space-x-2">
                                    <a href="#"
                                        class="px-2 py-1 border border-blue-300 text-xs text-blue-300 rounded-full uppercase font-semibold">Techniques</a>

                                    <a href="#"
                                        class="px-2 py-1 border border-red-300 text-xs text-red-300 rounded-full uppercase font-semibold">Updates</a>
                                </div>

                                <div class="mt-4">
                                    <h1 class="text-3xl">This is a big title and it will look great on two or
                                        even three
                                        lines. Woohoo!</h1>
                                    <span class="mt- block text-gray-400 text-xs">
                                        <time datetime="2020-11-17">November 17, 2020</time>
                                    </span>
                                </div>
                            </header>

                            <div class="text-sm mt-4">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo neque maxime excepturi
                                    reprehenderit. Et reiciendis dicta dignissimos dolor optio? Lorem ipsum dolor sit
                                    amet consectetur adipisicing elit. Amet alias sint suscipit ex accusantium eaque,
                                    accusamus corporis expedita autem!</p>

                                <p class="mt-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et
                                    reiciendis
                                    dicta dignissimos dolor optio?</p>
                            </div>

                            <footer class="flex justify-between items-center mt-2">
                                <div class="flex items-center text-sm">
                                    <img src="/images/lary-avatar.svg" alt="Lary avatar">
                                    <div class="ml-3">
                                        <h5 class="font-bold">Lary Laracore</h5>
                                        <h6>Mascot at Laracasts</h6>
                                    </div>
                                </div>

                                <div>
                                    <a href="#" class="text-sm font-semibold bg-gray-200 rounded-full py-2 px-6">Read
                                        More</a>
                                </div>
                            </footer>
                        </div>
                    </div>
                </article>

            </div>

        </main>

        <footer class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center px-10 py-16 mt-16">
            <img src="/images/lary-newsletter-icon.svg" alt="Lary newsletter icon" class="mx-auto">

            <h5 class="text-3xl">Stay in touch with the latest posts</h5>
            <p class="text-sm">Promise to keep the inbox clean. No bugs.</p>

            <div class="mt-10">
                <div class="relative mx-auto lg:bg-gray-200 rounded-full inline-block">

                    <form action="#" method="post" class="lg:flex text-sm">
                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:tw-inline-block">
                                <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                            </label>
                            <input type="text" id="email" name="email" placeholder="Your email address"
                                class="lg:bg-transparent pl-4">
                        </div>

                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-600 mt-4 lg:ml-3 lg:mt-0 rounded-full text-xs font-semibold text-white uppercase py-3 px-8">Subscribe</button>
                    </form>
                </div>
            </div>

        </footer>
    </section>
</body>

</html>
