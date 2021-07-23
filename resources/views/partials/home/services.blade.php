<!--4 Services -->
<div id="services" class="services">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center">
                <h2>{{ $home[0]->servicesTitle }}</h2>
                <hr>
            </div>
        </div>
        <div class="row">

            @foreach ($services as $service)
                
            <div class="col-md-4 text-center">
                <div class="service-item">
                    <i class="service-icon {{ $service->img }}"></i>
                    <h3>{{ $service->title }}</h3>
                    <p>{{ $service->text }}</p>
                    </div>
                </div>
                @endforeach

        </div>
    </div>
</div>
<!-- /Services -->
