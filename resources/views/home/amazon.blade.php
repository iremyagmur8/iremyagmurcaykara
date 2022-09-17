@foreach($amazon["ItemsResult"]["Items"] as $key=>$val)

        <div class="col-md-6">
            @include("inc.amazonBox",['bVal'=>$val,"title"=>1,"height"=>200,'desc'=>1])
        </div>
@endforeach
{{dd($amazon)}}
