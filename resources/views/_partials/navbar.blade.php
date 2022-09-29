<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom" >
    <div class="container-fluid">
        <button class="btn btn-primary" id="sidebarToggle" ><span class="mdi mdi-menu"></span></button>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">

                <li class="nav-item dropdown">
                    <a class="mdi mdi-24px mdi-bell nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item d-flex justify-content-between" href="#!">
                            <span>Notifications</span>
                            @auth
                                <span class="badge badge-pill bg-danger badge-info">{{ (auth()->user()->notifications->count()) }}</span>
                            @endauth
                        </a>
                        <a class="dropdown-item btn btn-success d-flex justify-content-between" href="{{ route('chat.index') }}">
                            <span>Messages</span>
                            <span class="badge  bg-success">{{ session('messages.count',0) }}</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('dashboard') }}">Tableu de bord</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6332bc9337898912e96b82c1/1gdv31cf4';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->