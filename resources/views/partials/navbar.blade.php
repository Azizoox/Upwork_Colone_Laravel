<header class="flex justify-between items-center py-5">
    <div class="">LOGO</div>
    <nav>
        <a href="{{ route('jobs.index') }}" class="mr-5 hover:text-green-500">Nos mission</a>
        <livewire:search/>
        @guest
            <a href="{{ route('login') }}" class="mr-5 hover:text-green-500">Se connecter</a>
            <a href="{{ route('register') }}" class="mr-5 hover:text-green-500">S'enregistrer</a>
        @else
            <a href="{{ route('conversations.index') }}" class="mr-5 hover:text-green-500">mes conversation</a>
            <a href="{{ route('home') }}" class="mr-5 hover:text-green-500">Tableau de bord</a>

             <form action="/logout" method="post" class="inline-block">
                @csrf
                <input type="submit" value="Se deconnecter" class=" hover:text-green-500">

            </form>
        @endguest
    </nav>
</header>
