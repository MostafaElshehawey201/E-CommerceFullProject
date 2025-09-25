@include("master.header")
   <section class="ftco-section bg-light">
    	<div class="container">
				<div class="pb-3 mb-3 row justify-content-center">
          <div class="text-center col-md-12 heading-section ftco-animate">
            <h2 class="mb-4">All Departments</h2>
            <p>We Service For You All You Can Need In Any time</p>
          </div>
        </div>   		
    	</div>
    	<div class="container">
    		<div class="row">
				@foreach ($AllDepartments as $Department)
    			<div class="col-sm-12 col-md-6 col-lg-4 ftco-animate d-flex">
					<div class="product d-flex flex-column">
						<a href="PageShowCategories-{{$Department->id}}" class="img-prod"><img class="img-fluid" src="{{asset('uploads/images/'.$Department['image'])}}" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="px-3 py-3 pb-4 text">
							<div class="d-flex">
								<div class="cat">
									<span>MRonnA</span>
		    					</div>
		    					<div class="rating">
									<p class="mb-0 text-right">
										<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    							</p>
	    						</div>
	    					</div>
    						<h3><a href="#">{{$Department->name}}</a></h3>
    						<div class="pricing">
								<p class="price"><span>{{$Department->description}}</span></p>
	    					</div>
    					</div>
    				</div>
    			</div>
				@endforeach
    		</div>
    	</div>
    </section>
@include("master.footer")