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
							<a href="{{ route('admin.user.view_insert') }}">
								New User
							</a>
							@if (Session::has('success'))
								<h1>
									{{ Session::get('success') }}
								</h1>
							@endif
							{{-- <table border="1" width="100%">
								<caption>
									<form>
										Search Username: 
										<input type="search" name="search_username" value="{{ $search_username }}">
									</form>
								</caption> --}}
							<tr>
								<th>ID</th>
								<th>USERNAME</th>
								{{-- <th>LOGIN NAME</th> --}}
								{{-- <th>PASSWORD</th> --}}
								<th>EMAIL</th>
								<th>DOB</th>
								<th>BIOGRAPHY</th>
								<th>PICTURE</th>
								<th>GENDER</th>
								<th>STATUS</th>
								<th>CREATED AT</th>
								<th>UPDATED AT</th>
								<th>LAST TIME LOGIN</th>
								<th>ROLE</th>
								<th>EDIT</th>
								<th>DELETE</th>
							</tr>
						</thead>	
						<tbody>
							@foreach ($array_user as $user)
								<tr style="text-align: center;">
									<td>
										{{ $user->id }}
									</td>
									<td>
										{{ $user->username }}
									</td>
									{{-- <td>
										{{ $user->login_name }}
									</td> --}}
									{{-- <td>
										{{ $user->password }}
									</td> --}}
									<td>
										{{ $user->email }}
									</td>
									<td>
										{{ $user->date_of_birth }}
									</td>
									<td>
										<div style="overflow: scroll; height: 200px;">
											{{ $user->biography }}
										</div>
									</td>
									<td>
										{{-- <img src="{{ $user->picture }}"> --}}
										<img style="max-width: 150px;" src="{{ asset("storage/$user->picture") }}">
									</td>
									<td>
										{{-- {{ $user->gender }} --}}
										@if ($user->gender==0)
											Nữ
										@endif	
										@if ($user->gender==1)
											Nam
										@endif	
										@if ($user->gender==2)
											Khác
										@endif
									</td>
									<td>
										{{ $user->status }}
									</td>
									<td>
										{{ $user->created_at }}
									</td>
									<td>
										{{ $user->updated_at }}
									</td>
									<td>
										{{ $user->last_time_login }}
									</td>
									<td>
										{{ $user->role->name }}
									</td>
									<td>
										<a href="{{ route('admin.user.view_update',['id' => $user->id]) }}">
											Edit
										</a>
									</td>
									<td>
										<a href="{{ route('admin.user.delete',['id' => $user->id]) }}">
											Delete
										</a>
									</td>
								</tr>
							@endforeach
						</tbody>
						<tfoot>
							<tr>
								<th>ID</th>
								<th>USERNAME</th>
								{{-- <th>LOGIN NAME</th> --}}
								{{-- <th>PASSWORD</th> --}}
								<th>EMAIL</th>
								<th>DOB</th>
								<th>BIOGRAPHY</th>
								<th>PICTURE</th>
								<th>GENDER</th>
								<th>STATUS</th>
								<th>CREATED AT</th>
								<th>UPDATED AT</th>
								<th>LAST TIME LOGIN</th>
								<th>ROLE</th>
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
{{-- {{ $array_user->links() }} --}}
@endsection