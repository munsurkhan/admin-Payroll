<?php include_once 'inc/header.php';?>
<!--**********************************
    Header end ti-comment-alt
***********************************-->

<!--**********************************
    Sidebar start
***********************************-->
<?php include_once 'inc/sidebar.php';?>
<!--**********************************
<!--**********************************
    Sidebar end
***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->	
			<div class="page-titles">
				<ol class="breadcrumb">
					<li><h5 class="bc-title">Dashboard</h5></li>
				</ol>
			</div>
			<div class="container-fluid">
				<div class="row">
					
					<div class="card dz-card" id="accordion-three">
						<div class="card-header flex-wrap d-flex justify-content-between">
							<div>
							<h4 class="card-title">Employees Data Table </h4>
							</div>
							<a class="btn btn-primary btn-sm"  href="Employee_details.php">+ Add Employee</a>
						</div>
					   
							<!-- /tab-content -->	
							<div class="tab-content" id="myTabContent-2">
								<div class="tab-pane fade show active" id="withoutSpace" role="tabpanel" aria-labelledby="home-tab-2">
									 <div class="card-body pt-0">

										<div class="table-responsive">
											<table id="example3" class="display table" style="min-width: 845px">
											<thead>
												<tr>
													<th></th>
													<th>Name</th>
													<th>Department</th>
													<th>Gender</th>
													<th>Education</th>
													<th>Mobile</th>
													<th>Email</th>
													<th>Joining Date</th>
													<th>Status</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg" alt=""></td>
													<td>Tiger Nixon</td>
													<td>Architect</td>
													<td>Male</td>
													<td>M.COM., P.H.D.</td>
													<td><a href="javascript:void(0);">123 456 7890</a></td>
													<td><a href="javascript:void(0);">info@example.com</a></td>
													<td>2011/04/25</td>
													<td><span class="badge badge-success light border-0">Active</span></td>
													<td>
														<div class="d-flex">
															<a href="#" title="Edit" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
															<a href="#" title="Delete" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="rounded-circle" width="35" src="images/profile/small/pic2.jpg" alt=""></td>
													<td>Garrett Winters</td>
													<td>Accountant</td>
													<td>Female</td>
													<td>M.COM., P.H.D.</td>
													<td><a href="javascript:void(0);">123 456 7890</a></td>
													<td><a href="javascript:void(0);">info@example.com</a></td>
													<td>2011/07/25</td>
													<td><span class="badge badge-danger light border-0">Inactive</span></td>
													<td>
														<div class="d-flex">
															<a href="#" title="Edit" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
															<a href="#" title="Delete" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="rounded-circle" width="35" src="images/profile/small/pic3.jpg" alt=""></td>
													<td>Ashton Cox</td>
													<td>Junior Technical</td>
													<td>Male</td>
													<td>B.COM., M.COM.</td>
													<td><a href="javascript:void(0);">123 456 7890</a></td>
													<td><a href="javascript:void(0);">info@example.com</a></td>
													<td>2009/01/12</td>
													<td><span class="badge badge-success light border-0">Active</span></td>
													<td>
														<div class="d-flex">
															<a href="#" title="Edit" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
															<a href="#" title="Delete" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="rounded-circle" width="35" src="images/profile/small/pic4.jpg" alt=""></td>
													<td>Cedric Kelly</td>
													<td>Developer</td>
													<td>Male</td>
													<td>B.COM., M.COM.</td>
													<td><a href="javascript:void(0);">123 456 7890</a></td>
													<td><a href="javascript:void(0);">info@example.com</a></td>
													<td>2012/03/29</td>
													<td><span class="badge badge-danger light border-0">Inactive</span></td>
													<td>
														<div class="d-flex">
															<a href="#" title="Edit" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
															<a href="#" title="Delete" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="rounded-circle" width="35" src="images/profile/small/pic5.jpg" alt=""></td>
													<td>Airi Satou</td>
													<td>Accountant</td>
													<td>Female</td>
													<td>B.A, B.C.A</td>
													<td><a href="javascript:void(0);">123 456 7890</a></td>
													<td><a href="javascript:void(0);">info@example.com</a></td>
													<td>2008/11/28</td>
													<td><span class="badge badge-success light border-0">Active</span></td>
													<td>
														<div class="d-flex">
															<a href="#" title="Edit" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
															<a href="#" title="Delete" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="rounded-circle" width="35" src="images/profile/small/pic6.jpg" alt=""></td>
													<td>Brielle Williamson</td>
													<td>Specialist</td>
													<td>Male</td>
													<td>B.COM., M.COM.</td>
													<td><a href="javascript:void(0);">123 456 7890</a></td>
													<td><a href="javascript:void(0);">info@example.com</a></td>
													<td>2012/12/02</td>
													<td><span class="badge badge-danger light border-0">Inactive</span></td>
													<td>
														<div class="d-flex">
															<a href="#" title="Edit" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
															<a href="#" title="Delete" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
														</div>
													</td>
												</tr>

											</tbody>
											</table>
											</div>




									</div>
								</div>
							</div>
					</div>



				</div>

			</div>
        </div>
		
        <!--**********************************
            Content body end
        ***********************************-->
		
		
        <!--**********************************
            Footer start
        ***********************************-->
<?php include_once 'inc/footer.php';?>