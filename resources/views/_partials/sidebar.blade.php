<div class="border-end bg-white" id="sidebar-wrapper">
    <div class="sidebar-heading border-bottom bg-light">
        <img src="{{ asset('assets/amoirie.jpg') }}" width="50"
            alt=""/> 〰〰 <img src="{{ asset('assets/amoirie.jpg') }}" width="50" alt=""/>
    </div>
    @auth()
        <h5 class="mt-3 text-center mx-4 badge bg-dark p-2"> connecte en tant que {{ auth()->user()->getPersonnelName() }}.
        </h5>
    @endauth

    @auth
        <h6 class="text-muted text-center border   p-2 ml-2">
            Unite: {{ auth()->user()->getPersonnel()->unite->nom }}
        </h6>
    @endauth
    @guest
        <h5 class="mt-3 text-center mx-4 badge bg-dark p-2"> vous n'etes pas encore authentifie. </h5>
    @endguest
    <div class="list-group list-group-flush">
        @if (Auth::check())
            <x-navlink-component class="border mt-1" link="{{ route('dashboard') }}" icon="mdi-store">
               Tableau de bord
            </x-navlink-component>
            {{-- si il est chef --}}
            @if (auth()->user()->chef)
                @includeIf('_partials.sidebar.chef')
            @elseif (auth()->user()->element)
                @includeIf('_partials.sidebar.element')
            @endif
            <x-navlink-component link="{{ route('materiel.index') }}" icon='mdi mdi-store '>
                Materiels
            </x-navlink-component>
            <x-navlink-component link="{{ route('personnels.list') }}" icon='mdi mdi-account-multiple '>
                Personnels
            </x-navlink-component>
            <x-navlink-component class="border mt-1" link="{{ route('dashboard') }}" icon="mdi-cash-multiple">
                Pret Secours
            </x-navlink-component>
            {{-- je met le button de deconnexion --}}
            <form action="{{ route('logout') }}" method="POST" onclick="submit()">
                @csrf
                <x-navlink-component class="border bg-danger text-white mt-2"  link="#!" icon="mdi-logout">
                    Se Deconnecter
                </x-navlink-component>
            </form>
            @else
            <x-navlink-component class="border mt-4" link="{{ route('login') }}" icon="mdi-login">
                Se Connecter
            </x-navlink-component>
        @endif
    </div>
</div>

