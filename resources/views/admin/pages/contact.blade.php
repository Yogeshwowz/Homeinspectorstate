@extends('admin.layout')
@section('content')
<div class = "service container">
	 @if($errors->any())
                    <div class="alert alert-danger">
                      @foreach($errors->all() as $error)
                      <li>{{$error}}</li>
                      @endforeach
                    
                    </div>
              @endif 
              <form id="demo-form2" action="{{asset('page-create')}}" method="post" enctype="multipart/form-data">
			@csrf
							<div class = "Root section1">
								<div class = "mb-3 bg-image">
								<h4 class="section-name">Banner Section</h4>
								<div class="item form-group">
									<div class="col-md-6 col-sm-6 ">
									     <input type="hidden" id="pagetitle" value="{{Request::segment(1)}}" class="form-control shadow-sm mb-3 bg-body rounded" name="ptitle" readonly>
									</div>
								</div>
								<h4>Background Image <span>
									@foreach($page as $value)
									@if($value->section_title == 'contact_banner')
				                	<img src="{{asset('public/uploads')}}/{{$value->data}}" height="100px" width="100px">
				                	@endif
				                	@endforeach
									<input type="file" class="form-control shadow-sm bg-body rounded" name="contact_banner">
									<input type="hidden" name="image[]" value="contact_banner">
								</span></h4>
								</div>
								<div class="mb-3 pt-3">
								   @foreach($page as $value)
									@if($value->section_title == 'bannerhead')
								<input type="text" class="form-control shadow-sm mb-3 bg-body rounded" id="head" aria-describedby="emailHelp" value="{{$value->data}}" placeholder = "Heading" name="bannerhead">
									@endif
								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="bannerhead">
								</div>
								<div class="mb-3">
								@if($value->section_title == 'bannerlink')
								<input type="text" class="form-control shadow-sm mb-3 bg-body rounded" id="bannerlink" aria-describedby="emailHelp" value="{{$value->data}}" placeholder = "Add Link" name="bannerlink">
								@endif
								@endforeach

								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="bannerlink">
								</div>
							</div>
							<div class = "Root section2">
								<h4 class="section-name">Contact Us Section</h4>
								<h5></h5>
								<div class="mb-3">

									<h4>Background Image <span>
									@foreach($page as $value)
									@if($value->section_title == 'contact_img')
				                	<img src="{{asset('public/uploads')}}/{{$value->data}}" height="100px" width="100px">
				                	@endif
				                	@endforeach
									<input type="file" class="form-control shadow-sm bg-body rounded" name="contact_img">
									<input type="hidden" name="image[]" value="contact_img">
								</span></h4>


									@foreach($page as $value)
									@if($value->section_title == 'contact_head')
								<input type="text" class="form-control shadow-sm mb-3 bg-body rounded" id="contact_head" aria-describedby="emailHelp" value="{{$value->data}}" placeholder = "Heading" name="contact_head">
									@endif

								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="contact_head">
								</div>
								<div class="mb-3">
									@if($value->section_title == 'contact_content')
								<textArea type="text" id="editor2" class="form-control editor shadow-sm mb-3 bg-body rounded" aria-describedby="emailHelp" placeholder = "Type Your Address Here" name="contact_content">{{$value->data}}</textArea>
								  @endif
								  

								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="contact_content">

								</div>
								<div class="mb-3">
								@if($value->section_title == 'contact_email')
								<input type="text" class="form-control shadow-sm mb-3 bg-body rounded" id="contact_email" aria-describedby="emailHelp" value="{{$value->data}}" placeholder = "Email-Address" name="contact_email">
								@endif
								  @endforeach
								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="contact_email">
								</div>
							</div>
							<div id = "clone-service">
							<div class = "Root section3 addMore" id = "Clone">
								<h4 class="section-name">Contact A Local Inspector Section</h4>
								<div class="mb-3">
								@foreach($page as $value)
									@if($value->section_title == 'local_head')
								<input type="text" class="form-control shadow-sm mb-3 bg-body rounded" id="local_head" aria-describedby="emailHelp" value="{{$value->data}}" placeholder = "Heading" name="local_head">
								@endif
								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="local_head">
								</div>

								<div class="mb-3">
								@if($value->section_title == 'local_content')
								<textarea class="form-control shadow-sm mb-3 bg-body rounded" aria-describedby="emailHelp" name="local_content">{{$value->data}}</textarea>
								@endif
								@endforeach

								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="local_content">
								</div>

								<div class="mb-3">
								@foreach($page as $value)
								@if($value->section_title == 'local_content_two')
								<textarea class="form-control shadow-sm mb-3 bg-body rounded" aria-describedby="emailHelp" name="local_content_two">{{$value->data}}</textarea>
								@endif
								@endforeach

								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="local_content_two">
								</div>

								<div class="mb-3">
								@foreach($page as $value)
								@if($value->section_title == 'local_content_three')
								<textarea class="form-control shadow-sm mb-3 bg-body rounded" aria-describedby="emailHelp" name="local_content_three">{{$value->data}}</textarea>
								@endif
								@endforeach

								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="local_content_three">
								</div>

								<div class="mb-3">
								@foreach($page as $value)
								@if($value->section_title == 'local_content_four')
								 <textarea class="form-control shadow-sm mb-3 bg-body rounded" aria-describedby="emailHelp" name="local_content_four">{{$value->data}}</textarea>
								@endif
								@endforeach

								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="local_content_four">
								</div>

								<div class="mb-3">
								@foreach($page as $value)
								@if($value->section_title == 'local_content_five')
								 <textarea class="form-control shadow-sm mb-3 bg-body rounded" aria-describedby="emailHelp" name="local_content_five">{{$value->data}}</textarea>
								
								 @endif
								@endforeach
								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="local_content_five">
								</div>

								<div class="mb-3">
								@foreach($page as $value)
								@if($value->section_title == 'local_content_six')
								 <textarea class="form-control shadow-sm mb-3 bg-body rounded" aria-describedby="emailHelp" name="local_content_six">{{$value->data}}</textarea>
								@endif
								@endforeach

								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="local_content_six">
								</div>


								<div class="mb-3">
								@foreach($page as $value)
								@if($value->section_title == 'local_content_seven')
								 <textarea class="form-control shadow-sm mb-3 bg-body rounded" aria-describedby="emailHelp" name="local_content_seven">{{$value->data}}</textarea>
								@endif
								@endforeach
								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="local_content_seven">
								</div>


								<div class="mb-3">
								@foreach($page as $value)
								@if($value->section_title == 'local_content_eight')
								 <textarea class="form-control shadow-sm mb-3 bg-body rounded" aria-describedby="emailHelp" name="local_content_eight">{{$value->data}}</textarea>
								@endif
								@endforeach

								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="local_content_eight">
								</div>

								<div class="mb-3">
								@foreach($page as $value)
								@if($value->section_title == 'local_content_nine')
								 <textarea class="form-control shadow-sm mb-3 bg-body rounded" aria-describedby="emailHelp" name="local_content_nine">{{$value->data}}</textarea>
								@endif
								@endforeach

								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="local_content_nine">
								</div>

								<div class="mb-3">
								@foreach($page as $value)
								@if($value->section_title == 'local_content_ten')
								 <textarea class="form-control shadow-sm mb-3 bg-body rounded" aria-describedby="emailHelp" name="local_content_ten">{{$value->data}}</textarea>
								@endif
								@endforeach

								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="local_content_ten">
								</div>
			
								<div class="mb-3">
								@foreach($page as $value)
								@if($value->section_title == 'local_content_11')
								 <textarea class="form-control shadow-sm mb-3 bg-body rounded" aria-describedby="emailHelp" name="local_content_11">{{$value->data}}</textarea>
								@endif
								 @endforeach
								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="local_content_11">
								</div>

								<div class="mb-3">
								@foreach($page as $value)
								@if($value->section_title == 'local_content_12')
								 <textarea class="form-control shadow-sm mb-3 bg-body rounded" aria-describedby="emailHelp" name="local_content_12">{{$value->data}}</textarea>
								@endif
								@endforeach

								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="local_content_12">
								</div>

								<div class="mb-3">
								@foreach($page as $value)
								@if($value->section_title == 'local_content_13')
								 <textarea class="form-control shadow-sm mb-3 bg-body rounded" aria-describedby="emailHelp" name="local_content_13">{{$value->data}}</textarea>
								@endif
								@endforeach

								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="local_content_13">
								</div>


								<div class="mb-3">
								@foreach($page as $value)
								@if($value->section_title == 'local_content_14')
								 <textarea class="form-control shadow-sm mb-3 bg-body rounded" aria-describedby="emailHelp" name="local_content_14">{{$value->data}}</textarea>
								@endif
								@endforeach

								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="local_content_14">
								</div>


								<div class="mb-3">
								@foreach($page as $value)
								@if($value->section_title == 'local_content_15')
								 <textarea class="form-control shadow-sm mb-3 bg-body rounded" aria-describedby="emailHelp" name="local_content_15">{{$value->data}}</textarea>
								
								 @endif
								@endforeach
								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="local_content_15">
								</div>

								<div class="mb-3">
								@foreach($page as $value)
								@if($value->section_title == 'local_content_16')
								 <textarea class="form-control shadow-sm mb-3 bg-body rounded" aria-describedby="emailHelp" name="local_content_16">{{$value->data}}</textarea>
								@endif
								@endforeach

								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="local_content_16">
								</div>

								<div class="mb-3">
								@foreach($page as $value)
								@if($value->section_title == 'local_content_17')
								 <textarea class="form-control shadow-sm mb-3 bg-body rounded" aria-describedby="emailHelp" name="local_content_17">{{$value->data}}</textarea>
								
								 @endif
								@endforeach
								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="local_content_17">
								</div>

								<div class="mb-3">
								@foreach($page as $value)
								@if($value->section_title == 'local_content_18')
								 <textarea class="form-control shadow-sm mb-3 bg-body rounded" aria-describedby="emailHelp" name="local_content_18">{{$value->data}}</textarea>
								@endif
								@endforeach

								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="local_content_18">
								</div>

							</div>
							</div>
							<div class="d-grid gap-2 d-md-flex justify-content-md-end save-cencil">
							  <button class="btn btn-primary me-md-2 extra" type="button">Cancel</button>
							  <input class="btn btn-success extra" type="submit" value="Save">
							</div>
						</form>
					</div>

@endsection