<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container px-5">
        <a class="navbar-brand">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                @if(Session::get('userId'))
                @foreach($categories as $category)
                
                <li class="nav-item dropdown" ><a class="nav-link" href="{{route('category-blog',['id'=>$category->id,'name'=>$category->category_name])}}">{{$category->category_name}}</a></li>
                @endforeach
               
                <li class="nav-item">

                <img class="rounded-circle me-3" src="{{asset(Session::get('userImg'))}}" style="height: 30px;" alt=" " /> 
                    
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="">{{Session::get('userName')}}</a>
                <ul class="dropdown-menu dropdown-menu-end" >
                    <li><a href="" onclick="event.preventDefault(); document.getElementById('LogoutForm').submit()" class="dropdown-item">Logout </a></li>
                </ul>
                <form id="LogoutForm" action="{{route('user-logout')}}" method="post">
                    @csrf
                      
                  </form>
                </li>
                    
                @else
                <li class="nav-item"><a class="nav-link" href="{{route('sign-up')}}">Sign-Up</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('sign-in')}}">Login</a></li>
                @endif
                
                

            </ul>
        </div>
    </div>
</nav>