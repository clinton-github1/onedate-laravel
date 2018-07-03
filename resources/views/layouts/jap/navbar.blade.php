<div class="topnav" id="myTopnav">
   <div class="dropdown">
    <button class="dropbtn">Japanese 
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
      <a href="{!! url('ned-index') !!}">Nederlands</a>
      <a href="{!! url('pol-index') !!}">Polska</a>
      <a href="{!! url('por-index') !!}">Portuguese</a>
      <a href="{!! url('rus-index') !!}">Russian</a>
    </div>
  </div>  
  <a href="{!! url('jap-index') !!}">ホーム</a>  
  <a href="{!! url('jap-diff-dates') !!}">日付が違う?</a>
  <a href="{!! url('jap-why-one-date') !!}">なぜ復活祭の日付を一つに?</a>
  <a href="{!! url('jap-what-can-we-do') !!}">私たちに何ができますか?</a>
  <a href="{!! url('jap-endorsement') !!}">推薦のことば</a>
  <a href="{!! url('jap-inspiration') !!}">霊感</a>
  <a href="{!! url('jap-sign-petition') !!}">署名する</a>
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