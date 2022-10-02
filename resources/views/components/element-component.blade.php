@props(["personnel"])
<div  {{$attributes->merge([
    "class"=>"card" ])}} style="width: 45%;cursor:pointer;" onclick="location.assign({{route('login')}})">
    <div class="card-header">
        <h6><span class="badge bg-danger p-2">{{$personnel->grade}}</span></h6>
    </div>
    <div class="card-body">
        <div class="card-text d-flex align-items-center justify-content-around ">
            <span class="mdi mdi-account mdi-48px d-inline-block mr-2" ></span>
            <span  style="border-left: 2px solid black;" class="ml-2"> &nbsp;&nbsp;{{$personnel->nom}}</span>
        </div>
    </div>
    <div class="card-footer">
        Contact: {{$personnel->telephone}}
    </div>
</div>
