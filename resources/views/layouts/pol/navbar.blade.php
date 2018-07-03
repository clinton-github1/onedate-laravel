<div class="topnav" id="myTopnav">
   <div class="dropdown">
    <button class="dropbtn">Polska 
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
      <a href="{!! url('hung-index') !!}">Hungarian</a>
      <a href="{!! url('ita-index') !!}">Italiano</a>
      <a href="{!! url('jap-index') !!}">Japanese</a>
      <a href="{!! url('ned-index') !!}">Nederlands</a>
      <a href="{!! url('por-index') !!}">Portuguese</a>
      <a href="{!! url('rus-index') !!}">Russian</a>
    </div>
  </div>  
  <a href="{!! url('pol-index') !!}">Strona główna</a>  
  <a href="{!! url('pol-diff-dates') !!}">Różne daty?</a>
  <a href="{!! url('pol-why-one-date') !!}">Dlaczego wspólna data?</a>
  <a href="{!! url('pol-what-can-we-do') !!}">Co możemy zrobić?</a>
  <a href="{!! url('pol-endorsement') !!}">Endorsements</a>
  <a href="{!! url('pol-inspiration') !!}">Inspiracja</a>
  <a href="{!! url('pol-sign-petition') !!}">Głosuj za wspólną datą</a>
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
