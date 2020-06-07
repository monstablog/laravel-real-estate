@extends('adminlayout.master')

@section('title')
	Create New Post | MonstaJamss
@endsection
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card header">
					<h4>Create Property.</h4>
					@if (session('status'))
					<div class="alert alert-success" role="alert">
						{{ session('status') }}
					</div>
					@endif
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
                    <form action="/adminsave-post" method="POST" enctype="multipart/form-data">
      		{{ csrf_field() }}
	      <div class="modal-body">
	        
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><b>Title:</b></label>
	            <input type="text" name="subject" class="form-control" id="recipient-name">
	          </div>
	          <br>
	          <div class="form-group">
	          	<label for="recipient-name" class="col-form-label"><b>Property Type:</b></label>
	          	<br>
	          	<select class="form-control" id="apartmenttype" name="apartmenttype[]" id="main-tags" multiple="multiple" style="width:223.438px;">
  					@foreach($apartmenttype as $apartmenttypes)
              		<option value="{{$apartmenttypes->id}}">{{$apartmenttypes->name}}</option>
              		...
             		@endforeach
				</select> <b style="color:red;">Note: Please Select Only (One) Property Type.</b>
	          </div>
	          <br>
	          <div class="form-group">
	          	<label for="recipient-name" class="col-form-label"><b>Location:</b></label>
	          	<br>
	          	<select class="form-control" id="location" name="location[]" id="main-tags" multiple="multiple" style="width:223.438px;">
  					
              		<option value="Oyo">Oyo</option>
              		<option value="Lagos">Lagos</option>
              		<option value="Abuja">Abuja</option>
              		<option value="Kano">Kano</option>
              		<option value="Abeokuta">Abeokuta</option>
              		...
             		
				</select> <b style="color:red;">Note: Please Select Only (One) Location.</b>
	          </div>
	          <br>
	          <br>
	          <div class="form-group">
					<label><b>Description:</b></label>
					<textarea type="text" name="body" value="" class="editor"></textarea>
					   <script>
	ClassicEditor
		.create( document.querySelector( '.editor' ) ,{
			mediaEmbed: {
            // configuration...
        },
			cloudServices: {
            
        },
        // plugins: [ Image, ImageResize ],
        image: {
        	resizeUnit: '400px',
        toolbar: [
            'imageTextAlternative', '|', 'imageStyle:alignLeft', 'imageStyle:full', 'imageStyle:alignRight'
        ],
        styles: [
                // This option is equal to a situation where no style is applied.
                'full',
                // This represents an image aligned to the left.
                'alignLeft',
                // This represents an image aligned to the right.
                'alignRight'
            ]
    },
		})
		.then( editor => {
			window.editor = editor;
		} )
		.catch( err => {
			console.error( err.stack );
		} );
</script>

								
				</div>
				<br>
				<div>
				  <label><b>Price:</b></label>
                  <br>
				  <input type="text" name="price" value="0.00">
			</div>
				<br>
			  <div>
				  <label><b>Select Featured Image To Add:</b> (Maximum Size: <b>5MB</b>)</label>
                  <br>
				  <input type="file" name="featured_image">
			</div>
			<br>
			<br>
	          <div>
				  <label><b>Select Image To Add:</b> (Maximum Size: <b>5MB</b>)</label>
                  <br>
				  <input type="file" name="image">
                  <br>
				  <input type="file" name="image_2">
                  <br>
				  <input type="file" name="image_3">
			</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Publish</button>
	      </div>
      </form>


</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>
<script>
  $(document).ready(function() {
    $('#apartmenttype').select2();
    $('#location').select2();
});
</script>

<script>
  $(document).ready(function() {
    
});
</script>

@endsection

@section('scripts')

@endsection