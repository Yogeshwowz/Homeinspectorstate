@include('master.master')	
@foreach($page as $value)
	@if($value->section_title == 'contact_banner')
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
				<h1><strong>{{$value->data}}</strong></h1>
					@endif
					@if($value->section_title == 'bannerlink')
				<a class = "contact-incpector" href = "{{asset($value->data)}}" >CONTACT AN INCPECTOR</a>
					@endif
					@endforeach
				</div>
			</section>
			
			<section class = "inspector-section">
				<div class = "container">
					<div class = "row">
						<div class = "col-4 contact-incpector">
							<div class = "contact-head">
								@foreach($page as $value)
									@if($value->section_title == 'contact_head')
								<h2>{{$value->data}}</h2>
								    @endif
								    @if($value->section_title == 'contact_content')
								    {!! $value->data !!}
								    @endif
								    @endforeach
								
							</div>
							<div class = "contact-head">
								<h2>Email Us</h2>
								@foreach($page as $value)
									@if($value->section_title == 'contact_email')
								<p>{{$value->data}}</p>
								@endif
								@endforeach
							</div>
							<div class = "contact-head">
								@foreach($page as $value)
									@if($value->section_title == 'local_head')
								<h2>{{$value->data}}</h2>
								@endif
								@endforeach
							</div>
						</div>
						<div class = "col-8 animatedParent">
							<div class = "incpector-image animated bounceIn">
								@foreach($page as $value)
									@if($value->section_title == 'contact_img')
								<img class = "img-rounded " src = "{{asset('public/uploads')}}/{{$value->data}}" alt = "contact an incpector"/>
								@endif
								@endforeach
							</div>
						</div>
					</div>
					<div class = "local-incpector">
                        @foreach($page as $value)
                        @if($value->section_title == 'local_content')
                        @if($value->data != "")
						<div class = "incpector-name">
						
									{!! $value->data !!}
                            
                        </div>
                        @endif
                         @endif
                        @endforeach
                        
                        @foreach($page as $value)
						@if($value->section_title == 'local_content_two')
						@if($value->data != "")
                        <div class = "incpector-name">
                        	
									{!! $value->data !!}
						   
                        </div>
                         @endif
                         @endif
						 @endforeach
						 
						@foreach($page as $value)
						@if($value->section_title == 'local_content_three')
						@if($value->data != "")
                        <div class = "incpector-name">
                           
									{!! $value->data !!}
						   
                        </div>
                         @endif
                         @endif
						 @endforeach
						 
						 @foreach($page as $value)
							@if($value->section_title == 'local_content_four')
							@if($value->data != "")
                        <div class = "incpector-name">
                         
									{!! $value->data !!}
						     
                        </div>
                         @endif
                         @endif
						 @endforeach 
						 
						 @foreach($page as $value)
							@if($value->section_title == 'local_content_five')
							@if($value->data != "")
                        <div class = "incpector-name">
                          
									{!! $value->data !!}
                        </div>
                         @endif
                         @endif
						    @endforeach 
						
						 @foreach($page as $value)
							@if($value->section_title == 'local_content_six')
								@if($value->data != "")
                        <div class = "incpector-name">
                           
									{!! $value->data !!}
						      
                        </div>
                        @endif
                        @endif
						@endforeach
						
						 @foreach($page as $value)
							@if($value->section_title == 'local_content_seven')
							@if($value->data != "")
                        <div class = "incpector-name">
                           
							{!! $value->data !!}
                        </div>
                         @endif
                         @endif
						    @endforeach 
						    
						 @foreach($page as $value)
							@if($value->section_title == 'local_content_eight')
							@if($value->data != "")
                        <div class = "incpector-name">
                            
									{!! $value->data !!}
						     
                        </div>
                         @endif
                         @endif
						    @endforeach
						@foreach($page as $value)
							@if($value->section_title == 'local_content_nine')
							@if($value->data != "")
                        <div class = "incpector-name">
                           
									{!! $value->data !!}
						    
                        </div>
                         @endif
                         @endif
						    @endforeach 
						@foreach($page as $value)
							@if($value->section_title == 'local_content_ten')
							@if($value->data != "")
                        <div class = "incpector-name">
                            
									{!! $value->data !!}
						      
                        </div>
                        @endif
                        @endif
						    @endforeach
						 @foreach($page as $value)
							@if($value->section_title == 'local_content_11')
							@if($value->data != "")
                        <div class = "incpector-name">
                           
									{!! $value->data !!}
						     
                        </div>
                        @endif
                        @endif
						 @endforeach 
						  @foreach($page as $value)
							@if($value->section_title == 'local_content_12')
							@if($value->data != "")
                        <div class = "incpector-name">
									{!! $value->data !!}
						     
                        </div>
                        @endif
                        @endif
						 @endforeach 
						 @foreach($page as $value)
							@if($value->section_title == 'local_content_13')
							@if($value->data != "")
                        <div class = "incpector-name">
									{!! $value->data !!}
						    
                        </div>
                        @endif
                        @endif
						    @endforeach 
						@foreach($page as $value)
							@if($value->section_title == 'local_content_14')
							@if($value->data != "")
                        <div class = "incpector-name">
									{!! $value->data !!}
						    
                        </div>
                        @endif
                        @endif
						    @endforeach 
						@foreach($page as $value)
							@if($value->section_title == 'local_content_15')
							@if($value->data != "")
                        <div class = "incpector-name">
									{!! $value->data !!}
						     
                        </div>
                        @endif
                        @endif
						    @endforeach
						@foreach($page as $value)
							@if($value->section_title == 'local_content_16')
							@if($value->data != "")
                        <div class = "incpector-name">
                            
									{!! $value->data !!}
						     
                        </div>
                        @endif
                        @endif
						    @endforeach
						@foreach($page as $value)
							@if($value->section_title == 'local_content_17')
							@if($value->data != "")
                        <div class = "incpector-name">
                          
									{!! $value->data !!}
						    
                        </div>
                        @endif
                        @endif
						    @endforeach 
						@foreach($page as $value)
							@if($value->section_title == 'local_content_18')
							@if($value->data != "")
                        <div class = "incpector-name">
									{!! $value->data !!}
						     
  						</div>
  						@endif
  						@endif
						    @endforeach
					</div>
				</div>	
			</section>
@include('master.footer')