<div class="h-16 flex items-center justify-between px-8 bg-teal-hard text-white">
    <div class="flex items-center">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('images/logos/logo_icon.svg') }}" alt="logo" width="30px"/>
            </a>
        <a class="mx-4 hover:underline" href="/admin">Home</a>
        <a class="mx-4 hover:underline" href="/admin/articles">Blog</a>
        <a class="mx-4 hover:underline" href="/admin/testimonials">Testimonials</a>
    </div>

    <div class="flex items-center">
        <a class="mx-4 hover:underline" href="/admin/users">Users</a>

        <dropdown v-cloak
                  name="Mooz"
                  class="text-white hover:text-mustard h-12 flex items-center h-16 bg-deep-navy px-4">
            <div slot="dropdown_content"
                 class="py-3">
                <a class="text-purple hover:text-purple-soft" href="/admin/users/passwords">Reset Password</a>
                <form action="/admin/logout" method="POST" class="logout-form mt-4">
                    {!! csrf_field() !!}
                    <button class="text-purple hover:text-purple-soft" type="submit">Logout</button>
                </form>
            </div>
        </dropdown>
    </div>

</div>