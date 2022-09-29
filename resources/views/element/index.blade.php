@extends('template')
@push('styles')
    @livewireStyles()
@endpush
@section('main')
    <h6 class="text-muted text-center">elements Rattache a l'unite</h6>
    <hr>
    <div class="card">
        <div class="card-header">
            <h6>Statistique des Elements </h6>
        </div>
        <div class="card-body">
            <div class="card p-4 w-25">
                Nombres d'Elements
                <strong>{{ $elements ? $elements->count() : 0 }} Elements</strong>
            </div>
        </div>

        <hr>
        <div class="card">
            <div class="card-header">
                <h6 class="text-center text-muted">Les Membres du elements</h6>
            </div>
            <div class="card">
                @if ($elements)
                    @foreach ($elements as $element)
                        @livewire('element-card')
                        
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    @livewireScripts()
@endpush
