@props(["errors"])
<div>
   @if ($errors->any())
       <div class="alert alert-danger">
            <h5 class="text-muted text-center">Opps ! des erreurs ont ete detecte .</h5>
            <ul class="list-unstyled">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
       </div>
   @endif
</div>