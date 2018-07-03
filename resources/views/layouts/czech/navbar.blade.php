<div class="topnav" id="myTopnav">
   <div class="dropdown">
    <button class="dropbtn">Czech 
      <i class="ion-chevron-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="{!! url('index') !!}">English</a>
      <a href="{!! url('ch-index')  !!}">Chinese</a>
      <a href="{!! url('dan-index') !!}">Danish</a>
      <a href="{!! url('deu-index')  !!}">Deutsch</a>
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
  <a href="{!! url('cz-index') !!}">Domovská stránka</a>  
  <a href="{!! url('cz-diff-dates') !!}">Různá data?</a>
  <a href="{!! url('cz-why-one-date') !!}">Proč jedno datum Velikonoc?</a>
  <a href="{!! url('cz-what-can-we-do') !!}">Co můžeme udělat?</a>
  <a href="{!! url('cz-endorsement') !!}">Endorsements</a>
  <a href="{!! url('cz-inspiration') !!}">Inspirace</a>
  <a href="{!! url('cz-sign-petition') !!}">Hlasujte pro jednotné datum</a>
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