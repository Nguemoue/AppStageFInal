@props(["message"])
<div {{$attributes->merge([
    "class"=>""
])}}>
<div class="p-2 border rounded-2">
    {{$message->message}}
    <br>
    <em class="text-muted"> {{$message->created_at->diffForHumans()}}</em>
</div>
</div>
