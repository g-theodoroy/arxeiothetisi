<div class="panel panel-default col-md-12 col-sm-12 " id='showFindData' >
    @if($foundCount > 0)
    <div class="row bg-success">
        <div class="form-control-static  text-center" ><strong>Η αναζήτηση επέστρεψε {{$foundCount >1 ? $foundCount . ' αποτελέσματα' : ''}}{{$foundCount ==1 ? $foundCount . ' αποτέλεσμα' : ''}}.</strong></div>
    </div>
    <div class="row bg-primary">
        <div class="form-control-static col-md-1 col-sm-1  text-center " >Φάκελος</div>
        <div class="form-control-static col-md-7 col-sm-7  " >Περιγραφή</div>
        <div class="form-control-static col-md-2 col-sm-2  " >Διατήρηση</div>
        <div class="form-control-static col-md-2 col-sm-2  " >Παρατηρήσεις</div>
    </div>
    @php($i=0)
    @foreach($found as $data)
        @if($i % 2)
        <div class="row bg-info">
        @else
        <div class="row">
        @endif
            <div class="col-md-1 col-sm-1 text-center " >{{$data[1]}}</div>
            <div class="col-md-7 col-sm-7 " >{!! str_ireplace($searchData, "<mark><strong>$searchData</strong></mark>", $data[4]) !!}</div>
            <div class="col-md-2 col-sm-2 " >{{$data[2]>1 ? $data[2] . " χρόνια": ''}}{{$data[2]==1 ? $data[2] . " χρόνο": ''}}{{$data[3]}}</div>
            <div class="col-md-2 col-sm-2 " >{{$data[5]}}</div>
        </div>
        @php($i++)
    @endforeach
    @else
        <div class="row bg-warning">
            <div class="form-control-static  text-center"><strong>Δεν βρέθηκαν αποτελέσματα. Τροποποιήστε τα κριτήρια αναζήτησης.</strong></div>
        </div>
        @endif
</div>
