<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">{{env('APP_NAME')}}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link @if(Request::route()->getName() == 'homepage') active @endif" aria-current="page" href="{{ route('homepage')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(Request::route()->getName() == 'train-list') active @endif" href="{{ route('train-list')}}">Train</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>