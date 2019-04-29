@extends('dashboard.index')
@section('content')
<div class="card">
    <div class="card-body">
    	<div class=" row col-12">
    		<div class="col-10">
        		<h4 class="card-title">Products</h4>
        	</div>
        	<div class="col-2">
        		<a class="btn btn-inverse-success btn-fw" href="{{url('products/create')}}">Add Product</a>
        	</div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>                        
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>                   
                    <tr>
                        <td>Jacob</td>
                        <td>Photoshop</td>
                        <td class="text-danger"> 28.76%
                            <i class="mdi mdi-arrow-down"></i>
                        </td>
                        <td>
                            <label class="badge badge-danger">Pending</label>
                        </td>
                    </tr>
                    <tr>
                        <td>Messsy</td>
                        <td>Flash</td>
                        <td class="text-danger"> 21.06%
                            <i class="mdi mdi-arrow-down"></i>
                        </td>
                        <td>
                            <label class="badge badge-warning">In progress</label>
                        </td>
                    </tr>
                    <tr>
                        <td>John</td>
                        <td>Premier</td>
                        <td class="text-danger"> 35.00%
                            <i class="mdi mdi-arrow-down"></i>
                        </td>
                        <td>
                            <label class="badge badge-info">Fixed</label>
                        </td>
                    </tr>
                    <tr>
                        <td>Peter</td>
                        <td>After effects</td>
                        <td class="text-success"> 82.00%
                            <i class="mdi mdi-arrow-up"></i>
                        </td>
                        <td>
                            <label class="badge badge-success">Completed</label>
                        </td>
                    </tr>
                    <tr>
                        <td>Dave</td>
                        <td>53275535</td>
                        <td class="text-success"> 98.05%
                            <i class="mdi mdi-arrow-up"></i>
                        </td>
                        <td>
                            <label class="badge badge-warning">In progress</label>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection