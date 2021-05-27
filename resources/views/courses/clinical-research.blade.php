

		  	<div class="ctm-tab-cont">
			  	<div class="row offer_tab_cont_row">
			  		<div class="col_auto_set">
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_head">Phd programs <span>Aviation Management</span></div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_main_dis">2 Year<br><span> UGC</span> Program Full-Time</div>
			  		</div>
			  		<div class="col_auto_set">
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi"><span>Graduate or Postgraduate in Life Sciences</span></div>

                          @if(count($phdeligibilityaviationmanagements) > 0)	
	@foreach($phdeligibilityaviationmanagements as $phdeligibilityaviationmanagement

			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">{{$phdeligibilityaviationmanagement>eligibility}}</div>
			  			@endforeach
                      @endif 

			  		</div>
			  		<div class="col_auto_set">

                      @if(count($phdcurriculumaviationmanagements) > 0)	
	@foreach($phdcurriculumaviationmanagements as $phdcurriculumaviationmanagement

			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">{{$phdcurriculumaviationmanagement>curriculum}}</div>
			  			@endforeach
                      @endif 

			  		</div>
			  		<div class="col_auto_set">
					  @if(count($phdcareerprospectaviationmanagements) > 0)	
	@foreach($phdcareerprospectaviationmanagements as $phdcareerprospectaviationmanagement
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_carre">{{$phdcareerprospectaviationmanagement>career_prospect}}</div>

                          @endforeach
                      @endif  

			  		</div>
			  		<div class="col_auto_set campus_col">
					  @if(count($phdcampusaviationmanagements) > 0)	
	@foreach($phdcampusaviationmanagements as $phdcampusaviationmanagement
			  			<div class="offer_tab_cont_disc offer_tab_cont_campus"><img src="/icriindia/storage/app/public/{{$phdcampusaviationmanagement>image}}" class="campus_images"><span></span>{{$phdcampusaviationmanagement>campus_name}}</div>
                          @endforeach
                      @endif 

			  		</div>
			  	</div>
		  	</div>
          
