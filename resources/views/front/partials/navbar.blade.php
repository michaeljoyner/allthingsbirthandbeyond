<div class="main-navbar flex justify-between items-center bb bw2 colour-p fixed w-100 top-0 z-999">
    <a href="/" class="link flex justify-center items-center ma2">
        @include('svg.logo_icon', ['classes' => 'hov-p icon'])
    </a>
    <input type="checkbox" id="nav-trigger" class="dn">
    <nav class="nav-list flex justify-end pr2 items-center strong-type">
        <a class="ph4 f3 link ttu colour-p hov-s @activeclass('/')" href="/">Home</a>
        <a class="ph4 f3 link ttu colour-p hov-s @activeclass('about')" href="/about">About</a>
        <a class="ph4 f3 link ttu colour-p hov-s @activeclass('testimonials')" href="/testimonials">Testimonials</a>
        <a class="ph4 f3 link ttu colour-p hov-s @activeclass('contact')" href="/contact">Contact</a>
        <label class="dn-ns ph4 f3 link ttu colour-p" for="nav-trigger">Close</label>
    </nav>
    <label for="nav-trigger" class="strong-type db dn-ns link ttu colour-p pr3" id="nav-trigger">Menu</label>
</div>