<div class="w-full px-4 my-4">
    <div class="card shadow">
        <div class="card-header d-flex justify-content-between align-items-stretch">
            <h6 class="card-title text-center">Listes des Utilisateurs Authentifiees</h6>
            <input type="text" class="form-control w-25" wire:model="search">
            <button class="btn btn-secondary"><span class="mdi mdi-magnify"></span></button>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="bg-dark text-white">
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th colspan="2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td class="text-center">
                                <button class="btn btn-outline-secondary" wire:click="setEditId({{ $user->id }})">
                                    <span class="mdi mdi-pencil"></span> Editer</button>
                            </td>
                            <td>Supprimer</td>
                        </tr>
                        @if ($editId === $user->id)
                            <livewire:user-form :user="$user" :key="$user->id" />
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $users->links() }}
        </div>

    </div>
</div>
