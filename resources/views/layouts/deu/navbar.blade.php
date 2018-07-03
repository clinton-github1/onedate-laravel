<div class="topnav" id="myTopnav">
   <div class="dropdown">
    <button class="dropbtn">Deutsch 
      <i class="ion-chevron-down"></i>
    </button>
    <div class="dropdown-content">
        <a href="{!! url('index') !!}">English</a>
      <a href="{!! url('ch-index')  !!}">Chinese</a>
      <a href="{!! url('cz-index') !!}">Czech</a>
      <a href="{!! url('dan-index')  !!}">Danish</a>
      <a href="{!! url('esp-index')  !!}">Espanol</a>
      <a href="{!! url('fr-index')  !!}">Francais</a>
      <a href="{!! url('gre-index')  !!}">Greek</a>
      <a href="{!! url('hung-index')  !!}">Hungarian</a>
      <a href="{!! url('ita-index')  !!}">Italiano</a>
      <a href="{!! url('jap-index')  !!}">Japanese</a>
      <a href="{!! url('ned-index')  !!}">Nederlands</a>
      <a href="{!! url('pol-index')  !!}">Polska</a>
      <a href="{!! url('por-index')  !!}">Portuguese</a>
      <a href="{!! url('rus-index')  !!}">Russian</a>
      
    </div>
  </div>  
  <a href="{!! url('deu-index') !!}">Hauptseite</a>  
  <a href="{!! url('deu-diff-dates') !!}">Verschiedene Osterdaten?</a>
  <a href="{!! url('deu-why-one-date') !!}">Weshalb "ein" Osterdatum?</a>
  <a href="{!! url('deu-what-can-we-do') !!}">Was können wir dazu beitragen?</a>
  <a href="{!! url('deu-endorsement') !!}">Endorsements</a>
  <a href="{!! url('deu-inspiration') !!}">Inspiration</a>
  <a href="{!! url('deu-sign-petition') !!}">Eure Stimme für ein einheitliches Osterdatum</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
