<header>
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="collapse navbar-collapse" id="navbar">
        <a href="/" class="navbar-brand">
            <img src="{{ asset('img/rbeventos.png')}}" alt="Logo Rb Eventos">
        </a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="/" class="nav-link">Eventos</a>
            </li>
            <li class="nav-item">
                <a href="/events/create" class="nav-link">Novo Evento</a>
            </li>
            @auth
            <li class="nav-item">
                <a href="/dashboard" class="nav-link">Meus Eventos</a>
            </li>
            <li class="nav-item">
                <form action="/logout" method="POST">
                  @csrf 
                  <a href="/logout" class="nav-link" onclick="event.preventDefault(); this.closest('form').submit()">Sair</a>
                </form>
            </li>
            @endauth
            @guest
              <li class="nav-item">
                 <a href="/login" class="nav-link">Entrar</a>
              </li>
              <li class="nav-item">
                 <a href="/register" class="nav-link">Cadastrar</a>
              </li>
            @endguest
        </ul>
    </div>
  </nav> 
</header>