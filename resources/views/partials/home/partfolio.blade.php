<!--5 Portfolio -->
<div id="portfolio" class="portfolio">
    <div class="container">
        <div class="row push50">
            <div class="col-md-4 col-md-offset-4 text-center">
                <h2>{{ $home[0]->portfolioTitle }}</h2>
                <h3>
                    <span class="filter label label-default" data-filter="all">{{ $home[0]->portfolioLabelAll }}</span>
                    <span class="filter label label-default" data-filter="bw">{{ $home[0]->portfolioLabelBW }}</span>
                    <span class="filter label label-default" data-filter="nature">{{ $home[0]->portfolioLabelNature }}</span>
                    <span class="filter label label-default" data-filter="portraits">{{ $home[0]->portfolioLabelPortraits }}</span>
                </h3>
                <hr>
            </div>
        </div>

        <div class="row">

            <div class="gallery">

                <ul id="Grid" class="gcontainer">



                    @foreach ($portfolios as $portfolio)
                    
                    <li class="col-md-4 col-sm-4 col-xs-12 mix bw portraits" data-cat="graphics">
                      <a data-toggle="modal" data-target="#portrait{{ $loop->iteration }}" class="mix-cover">
                        <img class="horizontal" src="{{ asset('img/' . $portfolio->img) }}" alt="placeholder">
                        <span class="overlay"><span class="valign"></span><span class="title">{{ $portfolio->title }}</span></span>
                        </a>
                      </li>
                      @endforeach
                      
                      
                      
                      
                    </ul>
                    
                    @foreach ($portfolios as $portfolio)
                    <!-- Load Photo in Modal -->
                    <div class="modal fade" id="portrait{{ $loop->iteration }}" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">&times;</button>
                            <h4 class="modal-title text-center">{{ $portfolio->modalTitle }}</h4>
                          </div>
                          <div class="modal-body">
                            <img class="thumbnail" alt="Portrait1" src="{{ asset('img/' . $portfolio->modalImg) }}" />
                          </div>
                        </div><!-- /.modal-content -->
                      </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    @endforeach

                


                <!-- /Load Photo in Modal -->
            </div>
        </div>
    </div>
</div>
<!-- /Portfolio -->
