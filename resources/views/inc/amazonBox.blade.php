<div class="post-item border">
    <div class="post-item-wrap">
        <div class="post-image">
            <a href="{{$bVal["DetailPageURL"]}}">
                @isset($bVal["Images"]["Medium"]["URL"])<div class="mansetright" style="background:url('{{$bVal["Images"]["Medium"]["URL"]}}') center center; background-size:cover; height: {{$bVal["Images"]["Medium"]["Height"]}}px"></div>@endisset
            </a>
        </div>
        <div class="post-item-description">
            <h3 class="boxtitle1"><a href="{{$bVal["DetailPageURL"]}}">{{$bVal["ItemInfo"]["Title"]["DisplayValue"]}}</a></h3>
        </div>
    </div>
</div>
