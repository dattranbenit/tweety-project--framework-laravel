<ul>
    <li>
        <a
            class="font-bold text-lg mb-4 block"
            href="#"
        >
            Home
        </a>
    </li>

    <li>
        <a
            class="font-bold text-lg mb-4 block"
            href="#"
        >
            Explore
        </a>
    </li>

    @auth
        <li>
            <a
                class="font-bold text-lg mb-4 block"
                href="#"
            >
                Profile
            </a>
        </li>

        <li>
            <form method="POST" action="/logout">
                @csrf

                <button class="font-bold text-lg">Logout</button>
            </form>
        </li>
    @endauth
</ul>
