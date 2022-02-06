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

        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6 pt-10">
            <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">

                <div class="col-span-4 text-center">
                    <img src="/images/illustration-1.png" alt="Lary illustration" class="rounded-xl">

                    <p class="mt-4 block text-gray-400 text-xs">
                        Published <time datetime="2020-11-17">November 17, 2020</time>
                    </p>

                    <div class="flex items-center justify-center text-sm mt-4">
                        <img src="/images/lary-avatar.svg" alt="Lary avatar">
                        <div class="ml-3 text-left">
                            <h5 class="font-bold">Lary Laracore</h5>
                            <h6>Mascot at Laracasts</h6>
                        </div>
                    </div>
                </div>

                <div class="col-span-8">
                    <div class="flex justify-between mb-6 -mt-10">
                        <a href="/" class="relative inline-flex items-center text-lg hover:text-blue-500 transition-colors duration-200">
                            <svg class="mr-2" width="22" height="22" viewBox="0 0 22 22">
                                <g fill="none" fill-rule="evenodd">
                                    <path class="fill-current"
                                        d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                    </path>
                                </g>
                            </svg>
                            Back to Posts
                        </a>

                        <div class="space-x-2">
                            <a href="#"
                                class="px-2 py-1 border border-blue-300 text-xs text-blue-300 rounded-full uppercase font-semibold">
                                Techniques
                            </a>

                            <a href="#"
                                class="px-2 py-1 border border-red-300 text-xs text-red-300 rounded-full uppercase font-semibold">
                                Updates
                            </a>
                        </div>
                    </div>

                    <h1 class="font-bold text-4xl mb-10"> This is a big title and it will look great on two or even
                        three
                        lines. Woohoo!</h1>

                    <div class="space-y-6 text-lg">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa officiis ratione aperiam
                            soluta fugiat nam optio iste temporibus accusantium saepe! Modi corrupti quibusdam possimus
                            ab dignissimos vel sit amet accusamus! Lorem ipsum dolor, sit amet consectetur adipisicing
                            elit. Quis quibusdam ut quae earum laboriosam enim nostrum fugiat exercitationem, optio esse
                            amet fugit placeat neque, numquam impedit corporis consectetur quasi tenetur.</p>

                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum cumque et labore dicta quisquam
                            vero expedita inventore, nobis voluptates, at a odit incidunt! Animi quia minima, voluptas
                            perferendis doloremque magni!</p>

                        <h2 class="font-bold text-lg">Sed quia consectetur</h2>

                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa officiis ratione aperiam
                            soluta fugiat nam optio iste temporibus accusantium saepe! Modi corrupti quibusdam possimus
                            ab dignissimos vel sit amet accusamus! Lorem ipsum dolor, sit amet consectetur adipisicing
                            elit. Quis quibusdam ut quae earum laboriosam enim nostrum fugiat exercitationem, optio esse
                            amet fugit placeat neque, numquam impedit corporis consectetur quasi tenetur.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil magni assumenda animi nisi
                            praesentium labore debitis impedit, vitae cumque ipsum quibusdam accusamus laborum sed? Odit
                            laudantium nobis delectus explicabo neque.</p>


                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa officiis ratione aperiam
                            soluta fugiat nam optio iste temporibus accusantium saepe! Modi corrupti quibusdam possimus
                            ab dignissimos vel sit amet accusamus! Lorem ipsum dolor, sit amet consectetur adipisicing
                            elit. Quis quibusdam ut quae earum laboriosam enim nostrum fugiat exercitationem, optio esse
                            amet fugit placeat neque, numquam impedit corporis consectetur quasi tenetur.</p>
                    </div>
                </div>
            </article>
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
