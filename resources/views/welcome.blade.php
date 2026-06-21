@extends('layouts.main')
@section('content')
{{-- Event carousel --}}
<div class="carouseldiv">
    <div class="carouselimgdiv">
        <a class="carousel"><img src="/img/carousel/Valentains_discount.webp" alt="Valentains discount Up to 95% promotion"></a>
        <a class="carousel"><img src="/img/carousel/Wawelin.webp" alt="Halloween discount Up to 85% promotion"></a>
    </div>
    <a><img class="arrow" src="/img/carousel/leftarrow.svg" alt="leftarrow" onclick="carouselleft()"></a>
    <a><img class="arrow" src="/img/carousel/rightarrow.svg" alt="rightarrow" style="left: 94.5vw" onclick="carousel()"></a>
</div>
{{-- featured --}}
<div class="featureddiv">
    <h1>Featured</h1>
    <div class="featuredimgdiv">
        {{-- <a class="featured"><img src="/img/carousel/Valentains_discount.webp" alt="Valentains discount Up to 95% promotion"></a>
        <a class="featured"><img src="/img/carousel/Wawelin.webp" alt="Halloween discount Up to 85% promotion"></a>
    </div>
    <a><img class="featuredarrow" src="/img/carousel/leftarrow.svg" alt="leftarrow" onclick="carouselleft()"></a>
    <a><img class="featuredarrow" src="/img/carousel/rightarrow.svg" alt="rightarrow" style="left: 94.5vw" onclick="carousel()"></a> --}}
</div>
{{-- recommended --}}

{{-- viewed services? --}}
@endsection