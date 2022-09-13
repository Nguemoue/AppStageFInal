<div class="border-end bg-white" id="sidebar-wrapper">
    <div class="sidebar-heading border-bottom bg-light"> <img src="{{ asset('assets/amoirie.jpg') }}" width="50" alt="">  〰〰 <img src="{{ asset('assets/amoirie.jpg') }}" width="50" alt=""></div>
    @php
        $links = [
            [
                'title' => 'Dashboard',
                'icon' => 'mdi-monitor-dashboard',
            ],
            [
                'title' => 'Elements',
                'icon' => 'mdi-account-tie',
            ],
            [
                'title' => 'Unites',
                'icon' => 'mdi-store',
            ],
        ];
    @endphp
    <div class="list-group list-group-flush">
        @if (Auth::check())
            @foreach ($links as $item)
            <x-navlink-component :icon="$item['icon']">{{ $item['title'] }}</x-navlink-component>
            @endforeach
            
            @else
            <x-navlink-component class="border mt-4" link="{{ route('login') }}" icon="mdi-login">Se Connecter</x-navlink-component>
            @endif
    </div>
</div>
`
