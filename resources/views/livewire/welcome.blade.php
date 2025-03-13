<div>
    <div class="hero mt-16">
        <div class="hero-content text-center">
            <div class="max-w-2xl">
                <h1
                    class="text-8xl font-sans font-thin mb-6 bg-gradient-to-r from-blue-500 to-purple-600 bg-clip-text text-transparent animate-gradient">
                    Bit7
                </h1>

                <h1 class="text-3xl md:3xl lg:text-5xl font-bold mb-6">Shorten Links, Expand Possibilities</h1>
                <div class="bg-base-100 rounded-xl p-5 mb-8">
                    <p class="text-lg">
                        Bit7 is your go-to URL shortener, designed to make sharing links simple and efficient.
                        Whether
                        you're sharing with friends, colleagues, or the world, Bit7 ensures your links are clean,
                        secure,
                        and easy to manage.
                    </p>
                </div>

                @auth
                    <a wire:navigate.hover href="{{ route('dashboard') }}" class="btn btn-wide btn-accent">Dashboard</a>
                @endauth

                @guest
                    <a wire:navigate.hover href="{{ route('login') }}" class="btn btn-wide btn-accent">Login</a>
                @endguest
            </div>
        </div>
    </div>


    <div class="flex justify-center items-center">
        <x-svgs.server />
    </div>

    <!-- Features Section -->
    <div class="container mx-auto px-6 py-16">
        <h2 class="text-3xl font-bold text-center mb-12">What We Offer</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="card bg-base-100 shadow-sm">
                <div class="card-body">
                    <div class="flex items-center mb-4 gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
                        </svg>
                        <h3 class="card-title text-xl font-bold">Fast & Reliable</h3>

                    </div>
                    <p class="text-base">
                        Our service ensures lightning-fast URL shortening with 99.9% uptime. No delays, no downtime.
                    </p>
                </div>
            </div>
            <!-- Feature 2 -->
            <div class="card bg-base-100 shadow-sm">
                <div class="card-body">
                    <div class="flex items-center mb-4 gap-1">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                        </svg>

                        <h3 class="card-title text-xl font-bold">Secure Links</h3>
                    </div>
                    <p class="text-base">
                        All shortened URLs are encrypted and safe to use. Protect your links with Bit7's advanced
                        security.
                    </p>
                </div>
            </div>
            <!-- Feature 3 -->
            <div class="card bg-base-100 shadow-sm">
                <div class="card-body">
                    <div class="flex items-center mb-4 gap-1">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                        </svg>

                        <h3 class="card-title text-xl font-bold ">Advanced Insights</h3>
                    </div>
                    <p class="text-base">
                        Track clicks, monitor performance, and view detailed analytics for all your shortened links.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-base-100 py-8 mt-16">
        <div class="container mx-auto px-6 text-center">
            <p class="text-base">
                &copy; 2025 Bit7. All rights reserved.
            </p>
        </div>
    </footer>

</div>
