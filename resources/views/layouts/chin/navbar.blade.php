<div class="topnav" id="myTopnav">
   <div class="dropdown">
    <button class="dropbtn">Chinese
      <i class="ion-chevron-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="{!! url('index') !!}">English</a>
      <a href="{!! url('cz-index')  !!}">Czech</a>
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
  <a href="{!! url('ch-index')!!}">首頁</a>  
  <a href="{!! url('ch-diff-dates') !!}">不同的日期?</a>
  <a href="{!! url('ch-why-one-date') !!}">為什麼要只有一個復活節?</a>
  <a href="{!! url('ch-what-can-we-do') !!}">我們能做什麼</a>
  <a href="{!! url('ch-endorsement') !!}">Endorsements</a>
  <a href="{!! url('ch-inspiration') !!}">靈感</a>
  <a href="{!! url('ch-sign-petition') !!}">簽請願書</a>
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

