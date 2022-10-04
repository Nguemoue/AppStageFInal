@props(["personnel"])
<div  {{$attributes->merge([
    "class"=>"card" ])}} style="width: 45%;cursor:pointer;" onclick="location.assign({{route('login')}})">
    <div class="card-header d-flex justify-content-between">
        <h6><span class="badge bg-danger p-2">{{$personnel->grade}}</span></h6>
        @can("view",$personnel)
            <a href="#" class="btn btn-success mdi mdi-eye"></a>
        @endcan
    </div>
    <div class="card-body">
        <div class="card-text d-flex align-items-center justify-content-around ">
            @if($personnel->profile_photo_path)
                <img src="{{asset('storage/'.$personnel->profile_photo_path)}}" class="img-fluid" style="border-radius: 10%;width: 20%"   alt="">
            @else
                <span class="mdi mdi-account mdi-48px d-inline-block mr-2" ></span>

            @endif

            <span  style="border-left: 2px solid black;" class="ml-2"> &nbsp;&nbsp;{{$personnel->nom}}</span>
        </div>
    </div>
    <div class="card-footer">
        Contact: {{$personnel->telephone}}
    </div>
</div>
