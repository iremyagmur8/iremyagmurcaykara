@extends('layouts.app-mobile')
@section('title',$cData->category->shortdescription)
@section('desc','')
@section('content')
    @foreach($cData->posts as $key=>$val)
        @include("inc.mobil-postBox",['bVal'=>$val,"title"=>1,"height"=>200])
        @if($loop->iteration % 2 == 0)
<div class="m-v-10">

            <!-- neuesmodelauto kare -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-8941717516585426"
                 data-ad-slot="7174824032"
                 data-ad-format="auto"
                 data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
</div>

        @endif
    @endforeach
@endsection
