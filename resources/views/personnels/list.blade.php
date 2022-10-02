@extends("template")

@section("main")
    <h4 class="text-center my-2"><span class="text-decoration-underline">Listes Des Personnels</span></h4>
    <hr>
    <div class="container">
        <div class="d-flex flex-wrap justify-content-between">
            @foreach($users as $user)
                <x-element-component :key="$loop->index" class="mx-4 my-4" :personnel="$user"></x-element-component>
            @endforeach
        </div>
        <div class="card-footer">
            {{$users->links()}}
        </div>
    </div>
@endsection
