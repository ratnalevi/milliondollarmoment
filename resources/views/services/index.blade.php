@extends('layout')

@section('content')

<section class="body-wrapper">
	<div class="inner-page-wrapper">
			<div class="page-content container">
				<div class="row">
					<div class="col-md-12">
					  <h1>Services</h1>
              <ul class="list-inline text-center movie-list">
                <li><a href="javascript:void(0)" class="movie_category current" data-filter=".movie-showcase" data-id="movie-showcase">Surprise</a></li>
                <li><a href="javascript:void(0)" class="movie_category" data-filter=".upcoming" data-id="upcoming">Destination</a></li>
                <li><a href="javascript:void(0)" class="movie_category" data-filter=".bollywood" data-id="bollywood">Prank</a></li>
                <li><a href="javascript:void(0)" class="movie_category" data-filter=".classic" data-id="classic">Delivery</a></li>
              </ul>
              <div class="movie_div_list" style="position: relative; height: 900px;">
                <div class="movies_list  movie-showcase" style="position: absolute; left: 0px; top: 0px;">
                  <ul class="masonry isotope" style="position: relative; height: 840px;">                          
                    <li class="gallery-template">
                        <div class="wrapper item" style="position: absolute; left: 40px; top: 0px;">
                            <a href="/services/surprises/birthday/" class="img-popup">
                              <div class="img-wrapper">
                                 	<img width="230" height="409" src="{{ asset('img/services/surprises/birthday.jpg') }}" class="attachment-single-movie-thumbnail size-single-movie-thumbnail wp-post-image" alt="birthday">
                              </div>
															<div class="title">
															 <h4>Birthday</h4>
															 <div class="info">
																 <span>Event Type : Surprises</span>
																 <span>Min Price : 5000/-</span>
																 </div>
															 </div>
                            </a>
                        </div>
                    </li>
                    <li class="gallery-template">
                      <div class="wrapper item" style="position: absolute; left: 290px; top: 0px;">
                        <a href="/services/surprises/anniversary/" class="img-popup">
                            <div class="img-wrapper">
                              <img width="230" height="409" src="{{ asset('img/services/surprises/wedding.jpg') }}" class="attachment-single-movie-thumbnail size-single-movie-thumbnail wp-post-image" alt="Anniversary / Wedding">                               
                            </div>
														<div class="title">
															<h4>Anniversary / Wedding</h4>
															<div class="info">
																<span>Event Type : Surprises</span>
                                 <span>Min Price : 5000/-</span>
															</div>
														 </div>
                        </a>
                      </div>
                    </li>
                
                    <li class="gallery-template">
                      <div class="wrapper item" style="position: absolute; left: 540px;">
                        <a href="/services/surprises/bon-voyage/" class="img-popup">
                            <div class="img-wrapper">
                              <img width="230" height="409" src="{{ asset('img/services/surprises/birthday.jpg') }}" class="attachment-single-movie-thumbnail size-single-movie-thumbnail wp-post-image" alt="Bon Voyage">                               
                            </div>
                            <div class="title">
                              <h4>Bon Voyage</h4>
                              <div class="info">
                                <span>Event Type : Surprises</span>
                                 <span>Min Price : 5000/-</span>
                              </div>
                             </div>
                        </a>
                      </div>
                    </li>
                    <li class="gallery-template">
                      <div class="wrapper item" style="position: absolute; left: 790px;">
                        <a href="/services/surprises/proposal/" class="img-popup">
                            <div class="img-wrapper">
                              <img width="230" height="409" src="{{ asset('img/services/surprises/proposal.jpg') }}" class="attachment-single-movie-thumbnail size-single-movie-thumbnail wp-post-image" alt="Proposal">                               
                            </div>
                            <div class="title">
                              <h4>Proposal</h4>
                              <div class="info">
                                <span>Event Type : Surprises</span>
                                 <span>Min Price : 5000/-</span>
                              </div>
                             </div>
                        </a>
                      </div>
                    </li>
                    <li class="gallery-template">
                      <div class="wrapper item" style="position: absolute; left: 40px; top: 410px;">
                        <a href="/services/surprises/get-well-soon/" class="img-popup">
                            <div class="img-wrapper">
                              <img width="230" height="409" src="{{ asset('img/services/surprises/birthday.jpg') }}" class="attachment-single-movie-thumbnail size-single-movie-thumbnail wp-post-image" alt="Get well soon">                               
                            </div>
                            <div class="title">
                              <h4>Get well soon</h4>
                              <div class="info">
                                <span>Event Type : Surprises</span>
                                 <span>Min Price : 5000/-</span>
                              </div>
                             </div>
                        </a>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="movies_list  upcoming" style="position: absolute; left: 0px; top: 0px;">
                  <ul class="masonry isotope" style="position: relative; height: 1640px;">      
                    <li class="gallery-template">
                        <div class="wrapper item" style="position: absolute; left: 40px; top: 0px;">
                            <a href="/services/destination/" class="img-popup">
                              <div class="img-wrapper">
                                  <img width="230" height="409" src="{{ asset('img/services/surprise.jpg') }}" class="attachment-single-movie-thumbnail size-single-movie-thumbnail wp-post-image" alt="birthday">
                              </div>
                              <div class="title">
                               <h4>Destination Surprises</h4>
                               <div class="info">
                                 <span>Event Type : Destination Surprises</span>
                                 <span>Min Price : 5000/-</span>
                                 </div>
                               </div>
                            </a>
                        </div>
                    </li>                  
                  </ul>
                </div>
                <div class="movies_list  bollywood" style="position: absolute; left: 0px; top: 0px;">
                  <ul class="masonry isotope" style="position: relative; height: 1640px;">     
                    <li class="gallery-template">
                        <div class="wrapper item" style="position: absolute; left: 40px; top: 0px;">
                            <a href="/services/destination/" class="img-popup">
                              <div class="img-wrapper">
                                  <img width="230" height="409" src="{{ asset('img/services/prank.jpg') }}" class="attachment-single-movie-thumbnail size-single-movie-thumbnail wp-post-image" alt="Prank">
                              </div>
                              <div class="title">
                               <h4>Prank</h4>
                               <div class="info">
                                 <span>Event Type : Prank</span>
                                 <span>Min Price : 5000/-</span>
                                 </div>
                               </div>
                            </a>
                        </div>
                    </li>
                  </ul>
                </div>
                <div class="movies_list  classic" style="position: absolute; left: 0px; top: 0px;">
                  <ul class="masonry isotope" style="position: relative; height: 1640px;">
                    <li class="gallery-template">
                        <div class="wrapper item" style="position: absolute; left: 40px; top: 0px;">
                            <a href="/services/destination/" class="img-popup">
                              <div class="img-wrapper">
                                  <img width="230" height="409" src="{{ asset('img/services/delivery.jpg') }}" class="attachment-single-movie-thumbnail size-single-movie-thumbnail wp-post-image" alt="Delivery">
                              </div>
                              <div class="title">
                               <h4>Delivery</h4>
                               <div class="info">
                                 <span>Event Type : Delivery</span>
                                 <span>Min Price : 5000/-</span>
                                 </div>
                               </div>
                            </a>
                        </div>
                    </li>
                  </ul>
                </div>
                <div class="clear" style="position: absolute; display: none;"></div>
                <div class="clear" style="position: absolute; display: none;"></div>
              </div>					
            </div>
				</div>
			</div>
			</div>
</section>

<script type="text/javascript">
  $('.movie_category').click();
</script>
@endsection