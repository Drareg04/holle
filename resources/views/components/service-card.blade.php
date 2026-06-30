<div class="servicecard">
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
    <a href="/services/{{$service->seller->username}}/{{$service->slug}}"><img src=""></a>
    <div class="cardinfo">
        <a href="/services/{{$service->seller->username}}"><img src="{{$service->seller->pfp_url}}"><p><b>{{$service->seller->name}}</b></p></a>
        <a href="/services/{{$service->seller->username}}/{{$service->slug}}">
            <p>{{$service->title}}<br>{{$service->price}}€</p>
        </a>
    </div>
</div>