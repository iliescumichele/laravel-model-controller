<header>
    <nav class="py-4">
        <ul class="nav nav-pills justify-content-center">
            <li class="nav-item">
              <a class="nav-link {{Route::currentRouteName() === 'home' ? 'active' : ''}}" href=" {{ route('home')}} ">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{Route::currentRouteName() === 'contatti' ? 'active' : ''}}" href=" {{ route('contatti')}} ">CONTATTI</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{Route::currentRouteName() === 'chi-siamo' ? 'active' : ''}}" href=" {{ route('chi-siamo')}} ">CHI SIAMO</a>
            </li>
        </ul>
    </nav>
</header>