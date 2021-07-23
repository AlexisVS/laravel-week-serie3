<div id="nav">
    <!--2 Navigation -->
    <nav class="navbar navbar-new" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mobilemenu">
                    <span class="sr-only">{{ $home[0]->navigationSrOnly }}</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">{{ $home[0]->navigationBrand }}</a>
            </div>
            <div class="collapse navbar-collapse" id="mobilemenu">

                <ul class="nav navbar-nav navbar-right text-center">
                    <li><a href="/#top"><i class="service-icon {{ $home[0]->navigationNavHomeI }}"></i>&nbsp;{{ $home[0]->navigationNavHomeText }}</a></li>
                    <li><a href="/#about"><i class="service-icon {{ $home[0]->navigationNavAboutI }}"></i>&nbsp;{{ $home[0]->navigationNavAboutText }}</a></li>
                    <li><a href="/#services"><i class=" service-icon {{ $home[0]->navigationNavServicesI }}"></i>&nbsp;{{ $home[0]->navigationNavServicesText }}</a></li>
                    <li><a href="/#portfolio"><i class="service-icon {{ $home[0]->navigationNavPortfolioI }}"></i>&nbsp;{{ $home[0]->navigationNavPortfolioText }}</a></li>
                    <li><a href="/#contact"><i class="service-icon {{ $home[0]->navigationNavContactI }}"></i>&nbsp;{{ $home[0]->navigationNavContactText }}</a></li>
                    <li class="text-success"><a class="text-success" href={{ route("lalaRoute") }}><i
                                class="service-icon {{ $home[0]->navigationNavRouteI }}"></i>&nbsp;{{ $home[0]->navigationNavRouteText }} suis une route</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
    <!-- /Navigation -->
</div>
