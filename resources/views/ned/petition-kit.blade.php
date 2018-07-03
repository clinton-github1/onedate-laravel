@extends('layouts/ned.header')

@section('content')
<div class="content">


<h2>Petitie Kit</h2>
<p>U kan verder helpen de OneDate Petitie bekend te maken door de petitie kit onderaan af te drukken en handtekeningen verzamelen in uw parochiekerk/gemeenschap.</p>

<p>Wanneer u de handtekeningen verzameld hebt moet u deze inbrengen op de <a href="{!! url('ned-sign-petition') !!}" class="pg-links"> Kies voor Een Datum </a> pagina.</p>

<p>Eens u de petitie kit hebt afgedrukt kan het nuttig zijn om een groter aantal af te drukken dan juist de laatste pagina met het handtekeningen blad.</p>

<a href="#" class="pg-links">Klik hier om de petitie kit af te drukken.</a>

</div>
@include('layouts/share.fb_link')
@include('layouts/ned.footer')
@endsection