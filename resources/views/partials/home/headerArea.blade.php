<!-- 1 Header Area -->
<div id="top" class="header">
    <div class="vert-text">
        <img class="img-rounded" alt="Company Logo" src="{{ asset('img/' . $home[0]->headerAreaImg) }}" />
        <h2><em>{{ $home[0]->headerAreaTitle }}</em></h2>
        <ul class="list-inline">
            <li><i class="fa {{ $home[0]->headerAreaFacebook }}"></i></li>
            <li><i class="{{ $home[0]->headerAreaTwitter }}"></i></li>
            <li><i class="{{ $home[0]->headerAreaGooglePlus }}"></i></li>
            <li><i class="{{ $home[0]->headerAreaLinkedin }}"></i></li>
            <li><i class="{{ $home[0]->headerAreaPinterest }}"></i></li>
        </ul>
        <br>
        <a href="#about" class="btn btn-top">{{ $home[0]->headerAreaButton}}</a>
    </div>
</div>
<!-- /Header Area -->
