@extends('layouts/deu.header')
@section('content')
<div class="content">
    
<h2>Sendet euren Freunden ein Email</h2>
<p>Helft uns diese Online-Petition zu verbreiten, indem Ihr sie an eure Freunde weiterleitet.</p>

<p>Mögliche Betreffzeile: Eure Stimme zählt - zur gemeinsamen Feier des Osterfestes</p>

<p>Text:</p>
<p>Hallo ! ,</p>

<p>IIch habe diese Online-Petition auf dem Internet entdeckt. Sie ist für Christen aller Denominationen, die sich für ein gemeinsames Osterfest am selben Tag einsetzen möchten.. Gehe zu <a href="http://www.onedate.org" class="pg-links">http://www.onedate.org/de/</a> so könnt ihr mehr darüber erfahren und ein Zeichen setzen und online Eure ‚Unterschrift" (Name, Stadt, Land) für dieses wichtige Anliegen abgeben.. </p>

<p>Herzlichen Dank!</p>

<p><a href="mailto:?subject=RE:Eure Stimme zählt - zur gemeinsamen Feier des Osterfestes&body=Hallo !%0D%0A %0D%0A ch habe diese Online-Petition auf dem Internet entdeckt. Sie ist für Christen aller Denominationen die sich für ein gemeinsames Osterfest am selben Tag einsetzen möchten.. Gehe zu http://www.onedate.org/de/ so könnt ihr mehr darüber erfahren und ein Zeichen setzen und online Eure%0D%0A%0D%0AHerzlichen Dank!&cc=&bcc=" class="pg-links">Hier klicken</a> damit euer übliches E-Mail-Programm mit dem obenerwähnten Betreff und Textteil geöffnet wird.</p>

<h2>Gemeinde-Bulletin</h2>
<p>Fragt Euren Priester/Pfarrer ob er diese Petition während der Messe/dem Gottesdienst bekanntgeben kann und falls möglich auch im Pfarr- oder Gemeindeblatt veröffentlichen kann.</p>

</div>
@include('layouts/share.fb_link')
@include('layouts/deu.footer')
@endsection