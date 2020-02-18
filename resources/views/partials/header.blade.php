<header>
<div class = "logoNom">

<img src = "{{ URL::to('/') }}/images/Logo_projet_web_2.svg" class="logo">
<div class="nom">AGLS</div>
</div>
<div class="inscConn">
<a href="{{ route('register') }}" class = "inscription">Inscription</a>
<a href="{{ route('login') }}"  class = "connexion">Connexion</a>
</div>
</header>