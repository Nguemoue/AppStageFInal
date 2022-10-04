@extends("template")

@section("main")
    <h4 class="text-center my-2"><span class="text-decoration-underline">Listes Des Personnels</span></h4>
    <hr>
    <div class="container">
        @livewire("posts-table")
    </div>
@endsection
