@extends('dashboard.index')
@section('content')
<div class="row flex-grow">
	<div class="col-12">
	    <div class="card">
	        <div class="card-body">
	            <h4 class="card-title">Add Product</h4>
            	<form class="forms-sample" method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                        @csrf
	                <div class="form-group">
	                    <label for="product_name"> Name</label>
	                    <input type="text" class="form-control" id="product_name" placeholder="Enter product name" name="name" autofocus required>		                    
	                </div>
	                <div class="form-group">
	                    <label for="price"> Price</label>
	                    <input type="number" class="form-control" id="price" placeholder="Enter product price" name="price" required>		                    
	                </div>
	                <div class="form-group">
                		<label for="category">Select Category</label>
	                    <select class="form-control form-control-sm" id="category" name="category_id">
	                      	<option>Select category</option>	                      
	                      	@foreach($categories as $category)
	                      		<option value="{{$category->id}}">{{$category->name}}</option>	                      
	                      	@endforeach
	                    </select>
                  	</div>	    
	                <div class="form-group">
                      	<label for="description">Description</label>
                      	<textarea class="form-control" id="description" rows="5" name="desc"></textarea>
                    </div>            
                    <div class="form-group">
                      	<label for="description">Image Upload</label>
                      	<input type="file" name="img[]" class="form-control" multiple>
                    </div>            
	                <button type="submit" class="btn btn-success mr-2">Submit</button>	                
	            </form>
	        </div>
	    </div>
	</div>
</div>
@endsection