<ul>
    <li><a
            class="font-bold text-lg mb-4 block"
            href="{{ route('home') }}"
        >Home</a></li>
    <!--<li><a
            class="font-bold text-lg mb-4 block"
            href="/"
        >Explore</a></li>
    <li><a
            class="font-bold text-lg mb-4 block"
            href="/"
        >Notifications</a></li>
    <li><a
            class="font-bold text-lg mb-4 block"
            href="/"
        >Messages</a></li>
    <li><a
            class="font-bold text-lg mb-4 block"
            href="/"
        >Bookmarks</a></li>
    <li><a
            class="font-bold text-lg mb-4 block"
            href="/"
        >Lists</a></li>-->
    <li><a
            class="font-bold text-lg mb-4 block"
            href="{{ route('profile', auth()->user() )}}"
        >Profile</a></li>
    <li><a
            class="font-bold text-lg mb-4 block"
            href="{{ url('/logout') }}"
            onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                Logout
            </a></li>
        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
</ul>
