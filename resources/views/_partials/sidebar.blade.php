<div class="border-end bg-white" id="sidebar-wrapper">
    <div class="sidebar-heading border-bottom bg-light"> <img src="{{ asset('assets/amoirie.jpg') }}" width="50"
            alt=""> 〰〰 <img src="{{ asset('assets/amoirie.jpg') }}" width="50" alt=""></div>
        @auth()
            <h5 class="mt-3 text-center mx-4 badge bg-dark p-2"> connecte en tant que {{ auth()->user()->getPersonnelName() }}. </h5>
        @endauth
        @guest
            <h5 class="mt-3 text-center mx-4 badge bg-dark p-2"> vous n'etes pas encore connecte. </h5>
        @endguest
        <div class="list-group list-group-flush">
        @if (Auth::check())
            <x-navlink-component class="border mt-1" link="{{ route('dashboard') }}" icon="mdi-store">
                Dashboard
            </x-navlink-component>
            {{-- si il est chef --}}
            @if (auth()->user()->chef)
                @includeIf('_partials.sidebar.chef')
            @elseif (auth()->user()->element)
                @includeIf('_partials.sidebar.element')
            @endif
            <x-navlink-component class="border mt-1" link="{{ route('dashboard') }}" icon="mdi-usd">
                Credit
            </x-navlink-component>
        @else
            <x-navlink-component class="border mt-4" link="{{ route('login') }}" icon="mdi-login">
                Se Connecter
            </x-navlink-component>
        @endif
    </div>
</div>
`
