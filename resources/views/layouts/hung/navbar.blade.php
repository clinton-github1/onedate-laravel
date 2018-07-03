<div class="topnav" id="myTopnav">
   <div class="dropdown">
    <button class="dropbtn">Hungarian 
      <i class="ion-chevron-down"></i>
    </button>
    <div class="dropdown-content">
        
      <a href="{!! url('ch-index') !!}">Chinese</a>
      <a href="{!! url('cz-index') !!}">Czech</a>
      <a href="{!! url('dan-index') !!}">Danish</a>
      <a href="{!! url('deu-index') !!}">Deutsch</a>
      <a href="{!! url('esp-index') !!}">Espanol</a>
      <a href="{!! url('index') !!}">English</a>
      <a href="{!! url('gre-index') !!}">Greek</a>
      <a href="{!! url('fr-index') !!}">Francais</a>
      <a href="{!! url('ita-index') !!}">Italiano</a>
      <a href="{!! url('jap-index') !!}">Japanese</a>
      <a href="{!! url('ned-index') !!}">Nederlands</a>
      <a href="{!! url('pol-index') !!}">Polska</a>
      <a href="{!! url('por-index') !!}">Portuguese</a>
      <a href="{!! url('rus-index') !!}">Russian</a>
    </div>
  </div>  
  <a href="{!! url('hung-index') !!}">Kezdőoldal</a>  
  <a href="{!! url('hung-diff-dates') !!}">Miért tér el a Húsvét dátuma?</a>
  <a href="{!! url('hung-why-one-date') !!}">Miért fontos a közös Húsvéti dátum?</a>
  <a href="{!! url('hung-what-can-we-do') !!}">Mit tehetünk mi?</a>
  <a href="{!! url('hung-endorsement') !!}">Endorsements</a>
  <a href="{!! url('hung-inspiration') !!}">Lelki háttér</a>
  <a href="{!! url('hung-sign-petition') !!}">Szavazás az Egységes Húsvéti Dátumra</a>
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

