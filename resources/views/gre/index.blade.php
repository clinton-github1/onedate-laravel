@extends('layouts/gre.header')

@section('content')
<div class="content">
    

<h1>Το αμάρτημα της διαίρεσης μας ως Χριστιανών</h1>
<p>Η Ανάσταση είναι η βάση της Χριστιανικής πίστης, χωρίς αυτήν δεν υπάρχει Χριστιανοσύνη, ωστόσο , <b>σχεδόν κάθε χρόνο οι Καθολικοί, οι Προτεστάντες και οι Ορθόδοξοι εορτάζουν το Πάσχα σε διαφορετικές ημερομηνίες </b>, κάποια χρόνια μέχρι και με πέντε μήνες διαφορά και άλλα χρόνια την ίδια ημερομηνία.</p>

<p>Η διαίρεση αυτή των Χριστιανών στο εορτασμό της Εορτής των Εορτών, είναι μεγάλο αμάρτημα και όλοι οι Χριστιανοί γνωρίζουν ότι η διαίρεση δεν προέρχεται από τον Θεό.</p>

<div class="read">
<div class="read-more">

    <h2>Διαβάστε Περισσότερα </h2>
    <a href="{!! url('gre-diff-dates') !!}" class="pg-links">Γιατί υπάρχουν διαφορετικές ημερομηνίες του Πάσχα?</a>
    
</div>
<div class="sign-now">

    <h2>Ψηφίστε τώρα</h2>
    <a href="{!! url('gre-sign-petition') !!}" class="pg-links">Ψηφίστε για κοινή ημερομηνία του εορτασμού του Πάσχα</a>
    
</div>
</div>

</div>
@include('layouts/share.fb_link')
@include('layouts/gre.footer')
@endsection