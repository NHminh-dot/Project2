@extends('admin.welcome')

@section('content')	
<!-- ============================================================== -->
<!-- pageheader -->
<!-- ============================================================== -->
<div class="row">
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	    <div class="page-header">
	        <h2 class="pageheader-title">Data Tables</h2>
	        <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
	        <div class="page-breadcrumb">
	            <nav aria-label="breadcrumb">
	                <ol class="breadcrumb">
	                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
	                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
	                    <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
	                </ol>
	            </nav>
	        </div>
	    </div>
	</div>
</div>
<!-- ============================================================== -->
<!-- end pageheader -->
<!-- ============================================================== -->
<div class="row">
    <!-- ============================================================== -->
    <!-- basic table  -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Basic Table</h5>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead>
							<a href="{{ route('admin.category.view_insert') }}">
								New Category
							</a>
							@if (Session::has('success'))
								<h1>
									{{ Session::get('success') }}
								</h1>
							@endif
							<tr>
								<th>ID</th>
								<th>NAME</th>
								<th>DESCRIPTION</th>
								<th>CREATED AT</th>
								{{-- <th>UPDATED AT</th> --}}
								<th>CREATED BY</th>
								<th>TOPIC</th>
								<th>EDIT</th>
								<th>DELETE</th>
							</tr>
						</thead>	
						<tbody>
							@foreach ($array_category as $category)
								<tr style="text-align: center;">
									<td>
										{{ $category->id }}
									</td>
									<td>
										{{ $category->name }}
									</td>
									<td>
										{{ $category->description }}
									</td>
									<td>
										{{ $category->created_at }}
									</td>
									{{-- <td>
										{{ $category->updated_at }}
									</td> --}}
									<td>
										{{ $category->user->username }}
									</td>
									<td>
										{{ $category->topic->name }}
									</td>
									<td>
										<a href="{{ route('admin.category.view_update',['id' => $category->id]) }}">
											Edit
										</a>
									</td>
									<td>
										<a href="{{ route('admin.category.delete',['id' => $category->id]) }}">
											Delete
										</a>
									</td>
								</tr>
							@endforeach
						</tbody>
						<tfoot>
							<tr>
								<th>ID</th>
								<th>NAME</th>
								<th>DESCRIPTION</th>
								<th>CREATED AT</th>
								<th>CREATED BY</th>
								<th>TOPIC</th>
								<th>EDIT</th>
								<th>DELETE</th>
							</tr>
						</tfoot>
					</table>
				</div>
            </div>
        </div>
    </div>
</div>   	 
    <!-- ============================================================== -->
    <!-- end basic table  -->
    <!-- ============================================================== -->
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<div class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="text-md-right footer-links d-none d-sm-block">
                    <a href="javascript: void(0);">About</a>
                    <a href="javascript: void(0);">Support</a>
                    <a href="javascript: void(0);">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- {{ $array_category->links() }} --}}
@endsection