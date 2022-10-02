<div class="mt-4">
    <div class="card">
        <div class="card-header"><h3 class="text-center card-title">Vos Notifications</h3></div>
        <div class="card-body">
            @forelse($listNotifications as $notification)
                @livewire("notification-item-livewire")
            @empty
                <span class="badge bg-secondary p-2">Aucune notification pour le moment !</span>
            @endforelse
        </div>
    </div>

</div>
