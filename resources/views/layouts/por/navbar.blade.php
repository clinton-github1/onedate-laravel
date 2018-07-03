<div class="topnav" id="myTopnav">
   <div class="dropdown">
    <button class="dropbtn">Português 
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
      <a href="{!! url('pol-index') !!}">Polska</a>
      <a href="{!! url('rus-index') !!}">Russian</a>
    </div>
  </div>  
  <a href="{!! url('por-tell-others') !!}">Home</a>  
  <a href="{!! url('por-diff-dates') !!}">Datas diferentes?</a>
  <a href="{!! url('por-why-one-date') !!}">Por que uma só data?</a>
  <a href="{!! url('por-what-can-we-do') !!}">O que podemos fazer?</a>
  <a href="{!! url('por-endorsement') !!}">Endorsements</a>
  <a href="{!! url('por-inspiration') !!}">Inspiração</a>
  <a href="{!! url('por-sign-petition') !!}">Assine</a>
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
