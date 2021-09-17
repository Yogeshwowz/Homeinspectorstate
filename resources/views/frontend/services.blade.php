 @include('master.master')
 @foreach($page as $value)
 @if($value->section_title == 'service_banner')
     <style>
		.service1 {
		background-image: url('{{asset('public/uploads')}}/{{$value->data}}');
	     }
	</style>
@endif
@endforeach
			<section class = "service1">
				<div class = "services-head">
				@foreach($page as $value)
				@if($value->section_title == 'bannerhead')
				<h1><strong>{!! $value->data !!}</strong></h1>
				@endif
				
				@if($value->section_title == 'bannersub')
				<a class = "contact-incpector" href = "{{asset($value->data)}}" >CONTACT AN INCPECTOR</a>
				@endif
				@endforeach
				</div>
			</section>
			<section class = "service-section2">
				<div class = "container">
					<div class = "row">
						<div class = "col-8">
							<div class = "row">
								<div class = "col-4">
									<div class = "buyer-inspection">
										@foreach($page as $value)
				                        @if($value->section_title == 'buyer')
										<h2>{{$value->data}}</h2>
										@endif
										@endforeach
										<div class = "buyers-inspection-image">
											@foreach($page as $value)
											@if($value->section_title == 'buyer_image')
											<img src = "{{asset('public/uploads')}}/{{$value->data}}" alt = "buyers-inspections" />
											@endif
											@endforeach
											@foreach($page as $value)
											@if($value->section_title == 'buyer')
											<p>{{$value->data}}</p>
											@endif
											@endforeach
										</div>
									</div>
									<div class = "buyer-inspection">
										@foreach($page as $value)
										@if($value->section_title == 'seller')
										<h2>{{$value->data}}</h2>
										@endif
										@endforeach
										<div class = "buyers-inspection-image">
											@foreach($page as $value)
											@if($value->section_title == 'seller_image')
											<img src = "{{asset('public/uploads')}}/{{$value->data}}" alt = "Sellers Inspection" />
											@endif
											@endforeach
											@foreach($page as $value)
											@if($value->section_title == 'seller')
											<p>{{$value->data}}</p>
											@endif
											@endforeach
										</div>
									</div>
									<div class = "buyer-inspection construction-inspections">
										@foreach($page as $value)
											@if($value->section_title == 'construction')
										<h2 class = "construction">{{$value->data}}</h2>
										@endif
										@endforeach
										<div class = "buyers-inspection-image">
											@foreach($page as $value)
											@if($value->section_title == 'construction_image')
											<img src = "{{asset('public/uploads')}}/{{$value->data}}" alt = "Construction Inspection" />
											@endif
										    @endforeach
											@foreach($page as $value)
											@if($value->section_title == 'construction')
											<p>{{$value->data}}</p>
											@endif
										    @endforeach
										</div>
									</div>
								</div>
								<div class = "col-8 inspectionss">
									<div class = "buyers-inspections-content">
										@foreach($page as $value)
											@if($value->section_title == 'buyercontent')
											<p>{!! $value->data !!}</p>
											@endif
										@endforeach
									</div>
									<div class = "buyers-inspections-content">
										@foreach($page as $value)
											@if($value->section_title == 'sellercontent')
											<p>{!! $value->data !!}</p>
											@endif
										@endforeach
									</div>
									<div class = "buyers-inspections-content">
										@foreach($page as $value)
											@if($value->section_title == 'conscontent')
											<p>{!! $value->data !!}</p>
											@endif
										@endforeach
									</div>
								</div>
								
							</div>
						</div>
						<div class = "col-4 call-us">
							
							@include('master.sidebar')
						</div>
					</div>
				</div>
			</section>
@include('master.footer')