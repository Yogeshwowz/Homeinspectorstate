<header id="myHeader">
				<nav class="navbar sticky-top navbar-light">
				<div class = "container">	
					@foreach($page as $value)
					@if($value->section_title == 'logo')
					<a class="navbar-brand" href="{{asset('/')}}"><img src = "{{asset('public/uploads')}}/{{$value->data}}" alt = "logo" /></a>
					@endif
					@endforeach
					  <div class = "call-now">
					  	@foreach($page as $value)
						@if($value->section_title == 'header_phone')
						<p><span>call Now >>></span><a>{{$value->data}}</a></p>
						@endif
						@endforeach
						<ul class="nav justify-content-center">
						<li class="nav-item Florida-nav">
							<a class="nav-link" href="{{asset('services')}}">Services</a>
						</li>
						<li class="nav-item Florida-nav">
							<a class="nav-link" href="{{asset('inspections')}}">inspections</a>
						</li>
						<li class="nav-item Florida-nav">
							<a class="nav-link" href="{{asset('affiliations')}}">Affiliations</a>
						</li>
						<li class="nav-item Florida-nav">
							<a class="nav-link" href="{{asset('about')}}">About us</a>
						</li>
						<li class="nav-item Florida-nav">
							<a class="nav-link" href="{{asset('contact')}}">contact an inspector</a>
						</li>
					</ul>
						</div>
					</div>
					</nav>	
</header>
<style>
	.navbar .Florida-nav .active {
		color:#98221a;
	}
	</style>