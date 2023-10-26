@extends('layouts.main')
@section('content')

<div class="main-panel" >
	<div class="content">
		<div class="panel-header" style="background-color: #0b214a;">
			<div class="page-inner py-5">
				<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
					<div>
						<h2 class="text-white pb-2 fw-bold">Dashboard</h2>
						<h5 class="text-white op-7 mb-2">Epic Express Management Dashboard</h5>
					</div>
					<div class="ml-md-auto py-2 py-md-0">
						<a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a>
						<a href="#" class="btn btn-white btn-border btn-round">Add Customer</a>
					</div>
				</div>
			</div>
		</div>
		<div class="page-inner mt--5">
			<div class="row mt--4">

				<div class="col-md-4">
					<div class="card full-height">
						<div class="card-body">
							<div class="card-title">Overall Customer</div>
							<div class="card-category">Total Customers</div>
							<div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
								<div class="px-2 pb-2 pb-md-0 text-center">
									<div id="circles-1"></div>
									<h6 class="fw-bold mt-3 mb-0"></h6>
								</div>
								
							</div>
						</div>
					</div>
				</div>


				<div class="col-md-4">
					<div class="card full-height">
						<div class="card-body">
							<div class="card-title">Overall Package</div>
							<div class="card-category">Total Packages</div>
							<div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
								<div class="px-2 pb-2 pb-md-0 text-center">
									<div id="circles-2"></div>
									<h6 class="fw-bold mt-3 mb-0">Packages</h6>
								</div>
								
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="card full-height">
						<div class="card-body">
							<div class="card-title">Overall Baggage</div>
							<div class="card-category">Total Baggage</div>
							<div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
								<div class="px-2 pb-2 pb-md-0 text-center">
									<div id="circles-3"></div>
									<h6 class="fw-bold mt-3 mb-0">Baggage</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			
			

			<div class="col-md-14">
					<div class="card">
						<div class="card-header">
							<div class="d-flex align-items-center">
								<h4 class="card-title">Customer List</h4>
								<button class="btn btn-round ml-auto" style="background-color: #0b214a;" data-toggle="modal" data-target="#addRowModal">
									<i class="fa fa-plus" style="color: white;">Add Customer</i>
									
								</button>
							</div>
						</div>
						<div class="card-body">
							<!-- Modal -->
							<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header no-bd">
											<h5 class="modal-title">
												<span class="fw-mediumbold">
												 Create new</span> 
												<span class="fw-mediumbold">
													Customer
												</span>
											</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<p class="small">Create a new customer using this form, make sure you fill them all</p>
											{{-- <form action="{{ route('store.productytypes')}}" method="post">
												<div class="row">
													<div class="col-sm-12">
														<div class="form-group form-group-default">
															<label>First Name</label>
															<input id="customer_firstname" type="text" class="form-control" placeholder="fill firstname">
														</div>
													</div>

													<div class="col-sm-12">
														<div class="form-group form-group-default">
															<label>Last Name</label>
															<input id="customer_lastname" type="text" class="form-control" placeholder="fill lastname">
														</div>
													</div>  


													<div class="col-md-6 pr-0">
														<div class="form-group form-group-default">
															<label>Location</label>
															<input id="customer_location" type="text" class="form-control" placeholder="fill location">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-group-default">
															<label>Phone Number</label>
															<input id="customer_phonenumber" type="text" class="form-control" placeholder="fill phone number">
														</div>
													</div>
												</div>
											</form> --}}


											<form action="{{ route('store.productytypes') }}" method="post" class="col-md-12">
												@csrf
										
												<div class="mb-3">
													<label for="customer_firstname" class="form-label">First Name:</label>
													<input type="text" name="customer_firstname" class="form-control" required>
												</div>
										
												<div class="mb-3">
													<label for="customer_lastname" class="form-label">Last Name:</label>
													<input type="text" name="customer_lastname" class="form-control" required>
												</div>
										
												<div class="mb-3">
													<label for="customer_location" class="form-label">Location:</label>
													<input type="text" name="customer_location" class="form-control" required>
												</div>
										
												<div class="mb-3">
													<label for="customer_phonenumber" class="form-label">Phone Number:</label>
													<input type="text" name="customer_phonenumber" class="form-control" required>
													@error('customer_phonenumber')
														<p class="text-danger">{{ $message }}</p>
													@enderror
												</div>
												<div class="modal-footer no-bd">
													<button type="submit"  class="btn btn-primary">Add</button>
													<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
												</div>
												{{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
											</form>
										</div>
								
										{{-- <div class="modal-footer no-bd">
											<button type="button" id="addRowButton" class="btn btn-primary">Add</button>
											<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
										</div> --}}
									</div>
								</div>
							</div>

							<div class="table-responsive">
								<table id="add-row" class="display table table-striped table-hover" >
									<thead>
										<tr>
											<th>First Name</th>
											<th>Last Name</th>
											<th>Location</th>
											<th>Phone Number</th>
											<th style="width: 10%">Action</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($customers as $customer)
										<tr>
											<td>{{$customer->customer_firstname}}</td>
											<td>{{$customer->customer_lastname}}</td>
											<td>{{$customer->customer_location}}</td>
											<td>{{$customer->customer_phonenumber}}</td>
											<td>
												<div class="form-button-action">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-outline-primary btn-lg" data-original-title="Edit Task">
														<i class="fas fa-eye"></i>
													</button>
													<button type="button" data-toggle="tooltip" title="" class="btn btn-outline-success mx-2" data-original-title="Remove" >
														<i class="fas fa-edit"></i>
													</button>
													<button type="button"  class="btn btn-outline-danger">
														<i class="fas fa-trash"></i>
													</button>
												</div>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
			</div>

			
		
			<div class="row">
				<div class="col-md-6">
					<div class="card">
						<div class="card-body pb-0">
							<div class="d-flex align-items-center">
								<h4 class="card-title">Product List</h4>
								<button class="btn btn-round ml-auto" style="background-color: #0b214a;" data-toggle="modal" data-target="#addRowModal">
									<i class="fa fa-plus" style="color: white;">Add Customer</i>
									
								</button>
							</div>
							<div class="table-responsive">
								<table id="add-row" class="display table table-striped table-hover" >
									<thead>
										<tr>
											<th>First Name</th>
											<th>Last Name</th>
											<th style="width: 10%">Action</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($customers as $customer)
										<tr>
											<td>{{$customer->customer_firstname}}</td>
											<td>{{$customer->customer_lastname}}</td>
											
											<td>
												<div class="form-button-action">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-outline-primary btn-lg" data-original-title="Edit Task">
														<i class="fas fa-eye"></i>
													</button>
													<button type="button" data-toggle="tooltip" title="" class="btn btn-outline-success mx-2" data-original-title="Remove" >
														<i class="fas fa-edit"></i>
													</button>
													<button type="button"  class="btn btn-outline-danger">
														<i class="fas fa-trash"></i>
													</button>
												</div>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table><br>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card">
						<div class="card-body">
							<div class="card-list">
								<div class="d-flex align-items-center">
									<h4 class="card-title">Package In Store</h4>
									<button class="btn btn-round ml-auto" style="background-color: #0b214a;" data-toggle="modal" data-target="#addRowModal">
										<i class="fa fa-plus" style="color: white;">Add Customer</i>
										
									</button>
								</div>
								<div class="item-list">
									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>First Name</th>
													<th>Last Name</th>
													<th style="width: 10%">Action</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($customers as $customer)
												<tr>
													<td>{{$customer->customer_firstname}}</td>
													<td>{{$customer->customer_lastname}}</td>
													
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="tooltip" title="" class="btn btn-outline-primary btn-lg" data-original-title="Edit Task">
																<i class="fas fa-eye"></i>
															</button>
															<button type="button" data-toggle="tooltip" title="" class="btn btn-outline-success mx-2" data-original-title="Remove" >
																<i class="fas fa-edit"></i>
															</button>
															<button type="button"  class="btn btn-outline-danger">
																<i class="fas fa-trash"></i>
															</button>
														</div>
													</td>
												</tr>
												@endforeach
											</tbody>
										</table>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card" style="background-color: #0b214a;">
						<div class="card-body" style="color: white;">
							<h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold">Active user right now</h4>
							<h1 class="mb-4 fw-bold">17</h1>
							<h4 class="mt-3 b-b1 pb-2 mb-5 fw-bold">Page view per minutes</h4>
							<div id="activeUsersChart"></div>
							<h4 class="mt-5 pb-3 mb-0 fw-bold">Top active pages</h4>
							<ul class="list-unstyled">
								<li class="d-flex justify-content-between pb-1 pt-1"><small>/product/readypro/index.html</small> <span>7</span></li>
								<li class="d-flex justify-content-between pb-1 pt-1"><small>/product/atlantis/demo.html</small> <span>10</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>
@endsection