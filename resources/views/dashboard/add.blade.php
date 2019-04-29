@extends('dashboard.index')
@section('content')
<div class="row flex-grow">
	<div class="col-12">
	    <div class="card">
	        <div class="card-body">
	            <h4 class="card-title">Add folder with template files</h4>
            	<form class="forms-sample" method="POST" action="{{ route('dasboard.store') }}">
                        @csrf
	                <div class="form-group">
	                    <label for="folder">Folder Name</label>
	                    <input type="text" class="form-control" id="folder" placeholder="Enter folder name" name="folder" autofocus required>
	                    @if (isset($success))
                            <span class="valid-feedback" role="alert" style="display: block;">
                                <strong>{{ $success }}</strong>
                            </span>
                        @elseif(isset($error))
                        	<span class="invalid-feedback" role="alert" style="display: block;">
                                <strong>{{ $error }}</strong>
                            </span>
                        @endif
	                </div>	                
	                <button type="submit" class="btn btn-success mr-2">Submit</button>	                
	            </form>
	        </div>
	    </div>
	</div>
</div>
@endsection