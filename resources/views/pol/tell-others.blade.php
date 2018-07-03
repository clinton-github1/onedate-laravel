@extends('layouts/pol.header')

@section('content')
<div class="content">


<h2>Wyślij email do przyjaciela</h2>
<p>Pomóż rozprzestrzeniać się wiadomości o tej internetowej petycji poprzez wysłanie emaila do swoich przyjaciół.</p>

<p>Sugerowany Tytuł: Podpisz się pod petycją o wspólną datę Wielkanocy</p>

<p>Treść wiadomości:</p>
    <p>Witaj,</p>

<p>Znalazłem stronę, na której jest petycja za świętowaniem Wielkanocy w tym samym czasie. Przejdź na <a href="http://www.onedate.org" class="pg-links">http://www.onedate.org</a> eby dowiedzieć się więcej i żeby się zapisać. </p>

<p>Dzięki</p>

<p><a href="mailto:?subject=Podpisz się pod petycją o wspólną datę Wielkanocy&body=Witaj%0D%0A %0D%0A Znalazłem stronę na której jest petycja za świętowaniem Wielkanocy w tym samym czasie. Przejdź na http://www.onedate.org eby dowiedzieć się więcej i żeby się zapisać.%0D%0A%0D%0ADzięki&cc=&bcc=" class="pg-links">Kliknij tutaj</a> żeby otworzył się Twój domyślny program pocztowy z gotową do wysłanie powyższą wiadomością.</p>

<h2>Gazetka parafialna</h2>
<p>Poproś swojego księdza/pastora, żeby ogłosił informację o tej petycji podczas Mszy Świętej lub posługi i jeżeli to możliwe, żeby wspomniał o tym w gazetce parafialnej lub na tablicy ogłoszeń.</p>

</div>
@include('layouts/share.fb_link')
@include('layouts/pol.footer')
@endsection