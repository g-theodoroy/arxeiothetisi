@extends('app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 ">
           <div class="panel panel-default">
                <div class="panel-heading h1 text-center">Αρχειοθέτηση</div>

                <div class="panel-body ">

                    <div class="panel panel-default col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1 ">
                        <div class="row bg-info">
                            <div class="form-control-static h4 text-center">Πληκτρολογείστε στα κουτιά για αναζήτηση</div>
                        </div>
                         <div class="row">
                            <div class="col-md-1 col-sm-1  form-control-static ">Φάκελος</div>
                            <div class="col-md-2 col-sm-2" id='fakelosdiv'>
                                <input id="fakelos" oninput="findData()" type="text" class="form-control text-center" name="fakelos" placeholder="Φ." value="" title='Φάκελος Φ.'>
                            </div>
                            <div class="col-md-1 col-sm-1  form-control-static ">Περιγραφή</div>
                            <div class="col-md-3 col-sm-3  " id='descriptiondiv'>
                                <input id="description" oninput="findData()" type="text" class="form-control text-center" name="description" placeholder="Περιγραφή" value="" title='Περιγραφή'>
                            </div>
                            <div class="col-md-1 col-sm-1  form-control-static ">Διατήρηση</div>
                            <div class="col-md-3 col-sm-3  " id='keepdiv'>
                                <input id="keep" oninput="findData()" type="text" class="form-control text-center" name="keep" placeholder="Διατήρηση" value="" title='Διατήρηση'>
                            </div>
                            <div class="col-md-1 col-sm-1  form-control-static text-center">
                                <a href="javascript:findData()"  class="" role="button" title="Αναζήτηση" > <img src="images/find.ico" height="20" /></a>
                                <a href="javascript:location.reload();$('#fakelos').val('');$('#description').val('');$('#keep').val('')"  class="" role="button" title="Καθάρισμα" > <img src="images/clear.ico" height="20" /></a>
                            </div>
                        </div>
                    </div>

                    <div id='showFindData' >
                                        
                        <div class="panel panel-defaultt col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1  " >
                         <h4 class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1 " >Η Αρχειοθέτηση διευκολύνει:
                        <ul class="list">
                            <li>τον χαρακτηρισμό του Φακέλου Φ. κάθε εγγράφου και</li>
                            <li>τον ορισμό του χρόνου Διατήρησης αυτού.</li>
                        </ul>
                        </h4>
                        <div id="linkdiv" class="col-md-2 col-sm-2 col-md-offset-10 col-sm-offset-10  "><a href="#" onclick="$('#morediv').removeClass('hidden');$('#linkdiv').addClass('hidden')">Περισσότερα ...</a></div>
                        <div id="morediv" class="hidden">
                        <p class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1 " >Δημιουργήθηκε σαν ένα συστατικό του <a href="https://github.com/g-theodoroy/electronic_protocol"  target="_blank">Ηλεκτρονικού Πρωτοκόλλου Σχολείου</a>. Η προφανής χρησιμότητά της επέβαλε να αυτονομηθεί...</p>
                        <h4 class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1 ">Νόμοι, Εγκύκλιοι</h4>
                        <p class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1 "><a href="http://gak.eyv.sch.gr/Drast/DD/DD_Legislation.htm" target="_blank">Π.Δ. 899/80</a>,&nbsp;
                        <a href="http://gak.eyv.sch.gr/Drast/DD/DD_Legislation.htm" target="_blank">Π.Δ. 104/79</a>,&nbsp;
                        <a href="https://edu.klimaka.gr/nomothesia/dioikhtika/1201-archeiothethsh-scholikwn-eggrafwn-fek-22-1981.html" target="_blank">ΠΕΡΙ ΑΡΧΕΙΟΘΕΤΗΣΕΩΣ ΣΧΟΛΙΚΩΝ ΕΓΓΡΑΦΩΝ ΦΕΚ 22/81</a>,&nbsp;
                        <a href="https://www.google.gr/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&ved=0ahUKEwi17M3Dss3WAhXFPxQKHSB5CCUQFggnMAA&url=http%3A%2F%2Fdide.kil.sch.gr%2Fsite%2Ffiles%2F2012_10_19_organograma_dnsis_kilkis_2012-2013_1.doc&usg=AOvVaw0fzgkYnYqqR-cG8sFsQfTU" target="_blank">ΑΡΧΕΙΟΘΕΤΗΣΗ ΕΓΓΡΑΦΩΝ</a></p>
                        <h4 class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1 ">Συντελεστές</h4>
                        <p class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1 ">Ζώτος Παναγιώτης (επιμέλεια Φακέλων & Διατήρησης), Θεοδώρου Γεώργιος (σχεδιασμός - υλοποίηση)</p>
                        <h4 class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1 ">Αποποίηση ευθυνών</h4>
                        <p class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1 ">Η παρούσα κατηγοριοποίηση είναι <strong>μόνο μια πρόταση</strong>. Η ευθύνη της Αρχειοθέτησης βαρύνει αποκλειστικά το χρήστη. Αν διαπιστώσετε λάθος ή έλλειψη παρακαλώ <a href="mailto:g.theodoroy@gmail.com?subject=Αρχειοθέτηση">ενημερώστε ...</a></p>
                        </div>
                        
                        </div>
                        <span class="col-md-1 col-sm-1 col-md-offset-11 col-sm-offset-11"><a href="mailto:g.theodoroy@gmail.com?subject=Αρχειοθέτηση">GΘ@2017</a></span>
                    
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<script>


function findData(){

    fakelos = $('#fakelos').val()
    description = $('#description').val()
    keep = $('#keep').val()
    if( ! fakelos && ! description && ! keep){
    $('#showFindData').html('')
    }else{
    querystr = '' 
    if (fakelos)  querystr = 'fakelos=' + fakelos
    if (description){
        if (querystr){
            querystr += '&description=' + description
        }else{
            querystr = 'description=' + description
        }
    }
    if (keep){
        if (querystr){
            querystr += '&keep=' + keep
        }else{
            querystr = 'keep=' + keep
        }
    }
    
    $('#showFindData').load("getFindData.php?" + querystr)
    }
}

</script>

@endsection
