<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>DJOHN: {{ $title }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.9.0/dist/cdn.min.js"></script>
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

        {{ $content }}

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

    <x-flash />

</body>

</html>
