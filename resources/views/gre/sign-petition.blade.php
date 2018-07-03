@extends('layouts/gre.header')

@section('content')
<div class="content">
    

<section class="petition">

<div class="petition-address">
    
    <div class="petition-add">Προς την Αυτού Αγιότητα Πάπα Φραγκίσκο<br>
και όλους τους Αρχιερείς</div>
    
    </div>

    <p>Αγιότατε, Μακαριότατοι, Εκλαμπρότατοι, Εξοχότατοι και Σεβασμιότατοι Αξιωματούχοι όλων των Χριστιανικών Εκκλησιών, </p>

    <p>Με πνεύμα υιικής αγάπης, εμείς, ως μέλη του Λαού του Θεού από διάφορες χριστιανικές εκκλησίες με την ίδια επιθυμία για χριστιανική ενότητα, ταπεινά θέτουμε ενώπιόν σας την ανά χείρας παράκληση προκειμένου να εξασφαλίσουμε τον εορτασμό του Πάσχα σε κοινή ημερομηνία έτσι ώστε όλοι οι χριστιανοί να μπορούν να τιμούν αυτή την εορτή από κοινού. Την παράκληση συνοδεύουν οι θερμές προσευχές μας για την εκπλήρωσή της.</p> 

    <p>Πιστεύουμε ότι τα σημερινά σχίσματα μεταξύ των χριστιανικών εκκλησιών είναι αμαρτία ενώπιον του Χριστού, ο οποίος προσευχήθηκε στον Πατέρα: «Όμως δεν προσεύχομαι μονάχα γι’ αυτούς, μα και για εκείνους που θα πιστεύουν σε μένα με το κήρυγμα το δικό τους, έτσι ώστε όλοι να είναι ένα. Όπως εσύ, Πατέρα, είσαι με μένα κι εγώ με σένα, έτσι να είναι κι αυτοί ένα χάρη σε μας, για να πιστέψει ο κόσμος ότι εσύ με απέστειλες» (Κατά Ιωάννην 17:20-21). Πιστεύουμε ότι αυτή η έλλειψη εξωτερικής ενότητας προκαλεί απογοήτευση και έλλειψη σεβασμού για το χριστιανισμό και απομακρύνει πολλές ψυχές από τον Χριστό.</p> 

    <p>Πολλά εμπόδια αναστέλλουν αυτή την επανένωση, όμως πιστεύουμε ότι υπάρχει ένα σημαντικό βήμα που δεν θέτει ούτε ηθικά ούτε δογματικά εμπόδια, εν τούτοις θα είναι καίριο βήμα προς τη χαμένη ενότητα: η ενοποίηση των ημερομηνιών του Πάσχα. Πιστεύουμε ότι αυτή η ενέργεια θα αποτελέσει αποφασιστικό βήμα προς την επανένωση, μια επανένωση που θα κάνει πολλούς να πιστέψουν και θα φέρει ειρήνη σε έναν ταλανιζόμενο κόσμο.</p> 

    <p>Θα προσευχόμαστε θερμά στον Κύριο να έρθει αρωγός σε σας, τους αξιωματούχους των εκκλησιών, έτσι ώστε να βρείτε τον καλύτερο τρόπο για την πραγματοποίηση αυτού του σημαντικού βήματος και υποσχόμαστε να προσευχηθούμε για να μπορέσετε να το επιτύχετε.</p> 

    <p>Με βαθύτατο σεβασμό,</p>

</section>
<section class="petition2">

    <div class="petition-form">
    
        <form action="{!! url('petition') !!}" method="post">
            
             {{ csrf_field() }}
            
            
             @if (session()->has('message-petition'))
             <h3>{{ session('message-petition') }}</h3>
             @endif
            
             @if (session()->has('failed-petition'))
             <h3>{{ session('failed-petition') }}</h3>
             @endif
            
            <label for="name">Όνομα:</label><br>
            <input type="text" name="name" placeholder="enter full name" value="{{ old('Name') }}" required><br>
            <label for="email">Email:</label><br>
            <input type="email" name="email" placeholder="enter valid email address" value="{{ old('Email') }}" required><br>
            <label for="city">Πόλη:</label><br>
            <input type="text" name="city" placeholder="enter current city" value="{{ old('City') }}" required><br>
            <label for="country">Χώρα:</label><br>
            <input type="text" name="country" placeholder="enter your country" value="{{ old('Country') }}" required><br>
            <input type="checkbox" name="progress" value="checked" required checked> Παρακαλώ πατήστε σε αυτό το τετράγωνο εάν επιθυμείτε να είστε ενήμεροι για την πρόοδο αυτής της αίτησης<br><br>
<!--
            <label for="country">Verify:</label><br>
            <input type="text" name="verify" placeholder="enter contents of the image" required><br>
-->
            <input type="submit" name="submit" value="Υπογράψτε">
        
        </form>
    
    </div>
    
    
</section>
</div>
@include('layouts/share.fb_link')
@include('layouts/gre.footer')
@endsection