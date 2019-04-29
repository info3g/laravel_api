@extends('dashboard.index')
@section('content')
<div class="row flex-grow">
	<div class="col-12">
	    <div class="card">
	        <div class="card-body">
	            <h4 class="card-title">Add Category</h4>
            	<form class="forms-sample" method="POST" action="{{ route('category.store') }}">
                        @csrf
	                <div class="form-group">
	                    <label for="category">Category Name</label>
	                    <input type="text" class="form-control" id="category" placeholder="Enter category name" name="name" autofocus>	
	                    @if ($errors->any())
						    <div class="alert alert-danger">						       
						        <ul>
						            @foreach ($errors->all() as $error)
						                <li>{{ $error }}</li>
						            @endforeach
						        </ul>
						    </div>
						@endif
	                </div>	                
	                <button type="submit" class="btn btn-success mr-2">Submit</button>	                
	            </form>
	        </div>
	    </div>
	</div>
</div>
@endsection