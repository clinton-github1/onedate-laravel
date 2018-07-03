@extends('layouts/fran.header')

@section('content')
<div class="content">
    
<h2>Envoyez un courriel (e-mail) à vos amis</h2>
<p>Contribuez à répandre cette pétition en la faisant connaître par un courriel à vos amis, en leur écrivant par exemple : .</p>

<p>Objet: Votez pour que nous célébrions tous Pâques à une seule et même date</p>

<p>Corps du message:</p>
    <p>Bonjour,</p>

<p>j’ai découvert ce site qui propose une pétition pour que les Chrétiens de toutes les confessions célèbrent tous Pâques à la même date. Voir <a href="http://www.onedate.org" class="pg-links">http://www.onedate.org</a> pour en savoir plus et pour signer la pétition..  </p>

<p>Merci</p>

<p><a href="mailto:?subject=Sign the Petition to Celebrate the Feast of Easter all in one date&body=Hi%0D%0A %0D%0A I found this site which has an online petition for Christians of all denomination to celebrate Easter all on the same date. Go to http://www.onedate.org to find out more and sign up.%0D%0A%0D%0AThanks&cc=&bcc=" class="pg-links">Cliquez ici</a> pour créer un courriel prêt à l’envoi avec l’exemple de message ci-dessus.</p>

<h2>Bulletin paroissial</h2>
<p>Proposez à votre Curé ou votre Pasteur d’annoncer cette pétition durant la messe ou le service religieux et qu’elle soit annoncée dans le bulletin paroissial.</p>
</div>
@include('layouts/share.fb_link')
@include('layouts/fran.footer')
@endsection