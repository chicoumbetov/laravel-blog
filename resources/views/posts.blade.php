<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Blog</title>
        <link rel="stylesheet" href="/app.css"/>
        <script src="/app.js"></script>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
    </head>
    <body class="antialiased">
        <section class="px-6 py-8">
            <nav class="md:flex md:justify-between md:items-center">
                <div>
                    <a href="/">
                        <img src="./images/logo.svg" alt="Laracasts Logo" width="165" height="16">
                    </a>
                </div>
    
                <div class="mt-8 md:mt-0">
                    <a href="/" class="text-xs font-bold uppercase">Home Page</a>
    
                    <a href="#" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                        Subscribe for Updates
                    </a>
                </div>
            </nav>
    
            <header class="max-w-xl mx-auto mt-20 text-center">
                <h1 class="text-4xl">
                    Latest <span class="text-blue-500">Laravel From Scratch</span> News
                </h1>
    
                <h2 class="inline-flex mt-2">By Lary Laracore <img src="./images/lary-head.svg"
                                                                   alt="Head of Lary the mascot"></h2>
    
                <p class="text-sm mt-14">
                    Another year. Another update. We're refreshing the popular Laravel series with new content.
                    I'm going to keep you guys up to speed with what's going on!
                </p>
    
                <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">
                    <!--  Category -->
                    <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
                        <select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">
                            <option value="category" disabled selected>Category
                            </option>
                            <option value="personal">Personal</option>
                            <option value="business">Business</option>
                        </select>
    
                        <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22"
                             height="22" viewBox="0 0 22 22">
                            <g fill="none" fill-rule="evenodd">
                                <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                </path>
                                <path fill="#222"
                                      d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                            </g>
                        </svg>
                    </div>
    
                    <!-- Other Filters -->
                    <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
                        <select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">
                            <option value="category" disabled selected>Other Filters
                            </option>
                            <option value="foo">Foo
                            </option>
                            <option value="bar">Bar
                            </option>
                        </select>
    
                        <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22" height="22" viewBox="0 0 22 22"><g fill="none" fill-rule="evenodd"><path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z"></path><path fill="#222" d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path></g></svg>
                    </div>
    
                    <!-- Search -->
                    <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
                        <form method="GET" action="#">
                            <input type="text" name="search" placeholder="Find something"
                                   class="bg-transparent placeholder-black font-semibold text-sm">
                        </form>
                    </div>
                </div>
            </header>
    
            <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
                <article
                    class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                    <div class="py-6 px-5 lg:flex">
                        <div class="flex-1 lg:mr-8">
                            <img src="./images/illustration-1.png" alt="Blog Post illustration" class="rounded-xl">
                        </div>
    
                        <div class="flex-1 flex flex-col justify-between">
                            <header class="mt-8 lg:mt-0">
                                <div class="space-x-2">
                                    <a href="#"
                                       class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                       style="font-size: 10px">Techniques</a>
    
                                    <a href="#"
                                       class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                                       style="font-size: 10px">Updates</a>
                                </div>
    
                                <div class="mt-4">
                                    <h1 class="text-3xl">
                                        This is a big title and it will look great on two or even three lines. Wooohoo!
                                    </h1>
    
                                    <span class="mt-2 block text-gray-400 text-xs">
                                            Published <time>1 day ago</time>
                                        </span>
                                </div>
                            </header>
    
                            <div class="text-sm mt-2">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
    
                                <p class="mt-4">
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </p>
                            </div>
    
                            <footer class="flex justify-between items-center mt-8">
                                <div class="flex items-center text-sm">
                                    <img src="./images/lary-avatar.svg" alt="Lary avatar">
                                    <div class="ml-3">
                                        <h5 class="font-bold">Lary Laracore</h5>
                                        <h6>Mascot at Laracasts</h6>
                                    </div>
                                </div>
    
                                <div class="hidden lg:block">
                                    <a href="#"
                                       class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                                    >Read More</a>
                                </div>
                            </footer>
                        </div>
                    </div>
                </article>
    
                <div class="lg:grid lg:grid-cols-2">
                    <article
                        class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                        <div class="py-6 px-5">
                            <div>
                                <img src="./images/illustration-1.png" alt="Blog Post illustration" class="rounded-xl">
                            </div>

                        <a href="/post">First blog post</a>
    
                            <div class="mt-8 flex flex-col justify-between">
                                <header>
                                    <div class="space-x-2">
                                        <a href="#"
                                           class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                           style="font-size: 10px">Techniques</a>
    
                                        <a href="#"
                                           class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                                           style="font-size: 10px">Updates</a>
                                    </div>
    
                                    <div class="mt-4">
                                        <h1 class="text-3xl">
                                            This is a big title and it will look great on two or even three lines. Wooohoo!
                                        </h1>
    
                                        <span class="mt-2 block text-gray-400 text-xs">
                                            Published <time>1 day ago</time>
                                        </span>
                                    </div>
                                </header>
    
                                <div class="text-sm mt-4">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                        ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>
    
                                    <p class="mt-4">
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    </p>
                                </div>
    
                                <footer class="flex justify-between items-center mt-8">
                                    <div class="flex items-center text-sm">
                                        <img src="./images/lary-avatar.svg" alt="Lary avatar">
                                        <div class="ml-3">
                                            <h5 class="font-bold">Lary Laracore</h5>
                                            <h6>Mascot at Laracasts</h6>
                                        </div>
                                    </div>
    
                                    <div>
                                        <a href="#"
                                           class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                                        >
                                            Read More
                                        </a>
                                    </div>
                                </footer>
                            </div>
                        </div>
                    </article>
    
                    <article
                        class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                        <div class="py-6 px-5">
                            <div>
                                <img src="./images/illustration-2.png" alt="Blog Post illustration" class="rounded-xl">
                            </div>
    
                            <div class="mt-8 flex flex-col justify-between">
                                <header>
                                    <div class="space-x-2">
                                        <a href="#"
                                           class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                           style="font-size: 10px">Techniques</a>
    
                                        <a href="#"
                                           class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                                           style="font-size: 10px">Updates</a>
                                    </div>
    
                                    <div class="mt-4">
                                        <h1 class="text-3xl">
                                            This is a big title and it will look great on two or even three lines. Wooohoo!
                                        </h1>
    
                                        <span class="mt-2 block text-gray-400 text-xs">
                                            Published <time>1 day ago</time>
                                        </span>
                                    </div>
                                </header>
    
                                <div class="text-sm mt-4">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                        ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>
    
                                    <p class="mt-4">
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    </p>
                                </div>
    
                                <footer class="flex justify-between items-center mt-8">
                                    <div class="flex items-center text-sm">
                                        <img src="./images/lary-avatar.svg" alt="Lary avatar">
                                        <div class="ml-3">
                                            <h5 class="font-bold">Lary Laracore</h5>
                                            <h6>Mascot at Laracasts</h6>
                                        </div>
                                    </div>
    
                                    <div>
                                        <a href="#"
                                           class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                                        >
                                            Read More
                                        </a>
                                    </div>
                                </footer>
                            </div>
                        </div>
                    </article>
                </div>
    
                <div class="lg:grid lg:grid-cols-3">
                    <article
                        class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                        <div class="py-6 px-5">
                            <div>
                                <img src="./images/illustration-3.png" alt="Blog Post illustration" class="rounded-xl">
                            </div>
    
                            <div class="mt-8 flex flex-col justify-between">
                                <header>
                                    <div class="space-x-2">
                                        <a href="#"
                                           class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                           style="font-size: 10px">Techniques</a>
                                        <a href="#"
                                           class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                                           style="font-size: 10px">Updates</a>
                                    </div>
    
                                    <div class="mt-4">
                                        <h1 class="text-3xl">
                                            This is a big title and it will look great on two or even three lines. Wooohoo!
                                        </h1>
    
                                        <span class="mt-2 block text-gray-400 text-xs">
                                            Published <time>1 day ago</time>
                                        </span>
                                    </div>
                                </header>
    
                                <div class="text-sm mt-4">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                        ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>
    
                                    <p class="mt-4">
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    </p>
                                </div>
    
                                <footer class="flex justify-between items-center mt-8">
                                    <div class="flex items-center text-sm">
                                        <img src="./images/lary-avatar.svg" alt="Lary avatar">
                                        <div class="ml-3">
                                            <h5 class="font-bold">Lary Laracore</h5>
                                            <h6>Mascot at Laracasts</h6>
                                        </div>
                                    </div>
    
                                    <div>
                                        <a href="#"
                                           class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                                        >Read More</a>
                                    </div>
                                </footer>
                            </div>
                        </div>
                    </article>
    
                    <article
                        class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                        <div class="py-6 px-5">
                            <div>
                                <img src="./images/illustration-4.png" alt="Blog Post illustration" class="rounded-xl">
                            </div>
    
                            <div class="mt-8 flex flex-col justify-between">
                                <header>
                                    <div class="space-x-2">
                                        <a href="#"
                                           class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                           style="font-size: 10px">Techniques</a>
    
                                        <a href="#"
                                           class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                                           style="font-size: 10px">Updates</a>
                                    </div>
    
                                    <div class="mt-4">
                                        <h1 class="text-3xl">
                                            This is a big title and it will look great on two or even three lines. Wooohoo!
                                        </h1>
    
                                        <span class="mt-2 block text-gray-400 text-xs">
                                            Published <time>1 day ago</time>
                                        </span>
                                    </div>
                                </header>
    
                                <div class="text-sm mt-4">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                        ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>
    
                                    <p class="mt-4">
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    </p>
                                </div>
    
                                <footer class="flex justify-between items-center mt-8">
                                    <div class="flex items-center text-sm">
                                        <img src="./images/lary-avatar.svg" alt="Lary avatar">
                                        <div class="ml-3">
                                            <h5 class="font-bold">Lary Laracore</h5>
                                            <h6>Mascot at Laracasts</h6>
                                        </div>
                                    </div>
    
                                    <div>
                                        <a href="#"
                                           class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                                        >
                                            Read More
                                        </a>
                                    </div>
                                </footer>
                            </div>
                        </div>
                    </article>
    
                    <article
                        class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                        <div class="py-6 px-5">
                            <div>
                                <img src="./images/illustration-5.png" alt="Blog Post illustration" class="rounded-xl">
                            </div>
    
                            <div class="mt-8 flex flex-col justify-between">
                                <header>
                                    <div class="space-x-2">
                                        <a href="#"
                                           class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                           style="font-size: 10px">Techniques</a>
                                        <a href="#"
                                           class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                                           style="font-size: 10px">Updates</a>
                                    </div>
    
                                    <div class="mt-4">
                                        <h1 class="text-3xl">
                                            This is a big title and it will look great on two or even three lines. Wooohoo!
                                        </h1>
    
                                        <span class="mt-2 block text-gray-400 text-xs">
                                            Published <time>1 day ago</time>
                                        </span>
                                    </div>
                                </header>
    
                                <div class="text-sm mt-4">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                        ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>
    
                                    <p class="mt-4">
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    </p>
                                </div>
    
                                <footer class="flex justify-between items-center mt-8">
                                    <div class="flex items-center text-sm">
                                        <img src="./images/lary-avatar.svg" alt="Lary avatar">
                                        <div class="ml-3">
                                            <h5 class="font-bold">Lary Laracore</h5>
                                            <h6>Mascot at Laracasts</h6>
                                        </div>
                                    </div>
    
                                    <div>
                                        <a href="#"
                                           class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                                        >
                                            Read More
                                        </a>
                                    </div>
                                </footer>
                            </div>
                        </div>
                    </article>
                </div>
            </main>
    
            <footer class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
                <img src="./images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
                <h5 class="text-3xl">Stay in touch with the latest posts</h5>
                <p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p>
    
                <div class="mt-10">
                    <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">
    
                        <form method="POST" action="#" class="lg:flex text-sm">
                            <div class="lg:py-3 lg:px-5 flex items-center">
                                <label for="email" class="hidden lg:inline-block">
                                    <img src="./images/mailbox-icon.svg" alt="mailbox letter">
                                </label>
    
                                <input id="email" type="text" placeholder="Your email address"
                                       class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
                            </div>
    
                            <button type="submit"
                                    class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8"
                            >
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>
            </footer>
        </section>
    </body>
</html>
