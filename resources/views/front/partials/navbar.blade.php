<div class="h-16 flex justify-between px-6 border-b-2 border-purple fixed top-0 left-0 w-full bg-white main-nav">
    <a href="/" class="link flex justify-center items-center ma2">
        @include('svg.new_logo_icon', ['classes' => 'h-10 text-navy hover:text-teal-mid'])
    </a>
    <nav class="hidden md:flex justify-end items-center type-h2 text-purple">
        <a class="mx-3 hover:text-teal-mid @activeclass('services')" href="/services">Services</a>
        <a class="mx-3 hover:text-teal-mid @activeclass('about')" href="/about">About</a>
        <a class="mx-3 hover:text-teal-mid @activeclass('testimonials')" href="/testimonials">Testimonials</a>
        <a class="mx-3 hover:text-teal-mid @activeclass('blog')" href="/blog">Blog</a>
        <a class="mx-3 hover:text-teal-mid @activeclass('contact')" href="/contact">Contact</a>
    </nav>
    <nav class="flex flex-col bg-purple text-white md:hidden absolute w-full top-16 left-0 mobile-subnav type-h2 py-16">
        <a class="px-4 hover:text-teal-mid py-2 @activeclass('services')" href="/services">Services</a>
        <a class="px-4 hover:text-teal-mid py-2 @activeclass('about')" href="/about">About</a>
        <a class="px-4 hover:text-teal-mid py-2 @activeclass('testimonials')" href="/testimonials">Testimonials</a>
        <a class="px-4 hover:text-teal-mid py-2 @activeclass('blog')" href="/blog">Blog</a>
        <a class="px-4 hover:text-teal-mid py-2 @activeclass('contact')" href="/contact">Contact</a>
    </nav>
    <button class="block md:hidden focus:outline-none" id="nav-trigger">
        <svg class="menu-open h-8 fill-current text-navy" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M16.4 9H3.6c-.552 0-.6.447-.6 1 0 .553.048 1 .6 1h12.8c.552 0 .6-.447.6-1 0-.553-.048-1-.6-1zm0 4H3.6c-.552 0-.6.447-.6 1 0 .553.048 1 .6 1h12.8c.552 0 .6-.447.6-1 0-.553-.048-1-.6-1zM3.6 7h12.8c.552 0 .6-.447.6-1 0-.553-.048-1-.6-1H3.6c-.552 0-.6.447-.6 1 0 .553.048 1 .6 1z"/></svg>
        <svg class="menu-close h-6 fill-current text-navy" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"/></svg>
    </button>
</div>