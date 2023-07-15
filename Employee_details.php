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
					<li><h5 class="bc-title">HR > Employee Details</h5></li>
				</ol>
			</div>
			<div class="container-fluid">
				<div class="row">
					
					<div class="card dz-card" id="accordion-three">
						<div class="card-header flex-wrap d-flex justify-content-between">
							<div>
							<h4 class="card-title">Employees Information</h4>
							</div>
							<a class="btn btn-primary btn-sm" href="Employee.php">Employee List</a>
						</div>
							<!-- /tab-content -->	
							<div class="tab-content" id="myTabContent-2">
								<div class="tab-pane fade show active" id="withoutSpace" role="tabpanel" aria-labelledby="home-tab-2">
									 <div class="card-body pt-0">
                                        <div class="container">
                                                <form action="" method="POST" enctype="multipart/form-data">
                                                    <div class="row">
                                                        <div class="col-xl-6 mb-3">
                                                            <label for="empid" class="form-label">Employee ID <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id="empid" placeholder="">
                                                        </div>
                                                        <div class="col-xl-6 mb-3">
                                                            <label for="empname" class="form-label">Employee Name<span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id="empname" placeholder="">
                                                        </div>
                                                        <div class="col-xl-6 mb-3">
                                                            <label for="empemail" class="form-label">Employee Email<span class="text-danger">*</span></label>
                                                            <input type="email" class="form-control" id="empemail" placeholder="">
                                                        </div>
                                                        <div class="col-xl-6 mb-3">
                                                            <label for="emppass" class="form-label">Password<span class="text-danger">*</span></label>
                                                            <input type="password" class="form-control" id="emppass" placeholder="">
                                                        </div>
                                                        <div class="col-xl-6 mb-3">
                                                            <label class="form-label">Designation<span class="text-danger">*</span></label>
                                                            <div class="dropdown bootstrap-select default-select form-control">
                                                                <select class="default-select form-control">
                                                                    <option data-display="Select">Please select</option>
                                                                    <option value="html">Software Engineer</option>
                                                                    <option value="css">Civil Engineer</option>
                                                                    <option value="javascript">Web Doveloper</option>
                                                                </select>
                                                                </div>
                                                        </div>
                                                        <div class="col-xl-6 mb-3">
                                                            <label class="form-label">Department<span class="text-danger">*</span></label>
                                                            <div class="dropdown bootstrap-select default-select form-control">
                                                                <select class="default-select form-control">
                                                                    <option data-display="Select">Please select</option>
                                                                    <option value="html">Software</option>
                                                                    <option value="css">Doit</option>
                                                                    <option value="javascript">Designing</option>
                                                                </select>
                                                                </div>
                                                        </div>
                                                        <div class="col-xl-6 mb-3">
                                                            <label class="form-label">Country<span class="text-danger">*</span></label>
                                                            <div class="dropdown bootstrap-select default-select form-control">
                                                                <select class="default-select form-control">
                                                                    <option data-display="Select">Please select</option>
                                                                    <option value="html">Ind</option>
                                                                    <option value="css">USA</option>
                                                                    <option value="javascript">UK</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 mb-3">
                                                            <label for="exampleFormControlInput88" class="form-label">Mobile<span class="text-danger">*</span></label>
                                                            <input type="number" class="form-control" id="exampleFormControlInput88" placeholder="">
                                                        </div>
                                                        <div class="col-xl-6 mb-3">
                                                            <label class="form-label">Gender<span class="text-danger">*</span></label>
                                                            <div class="dropdown bootstrap-select default-select form-control">
                                                                <select class="default-select form-control">
                                                                    <option data-display="Select">Please select</option>
                                                                    <option value="html">Male</option>
                                                                    <option value="css">Female</option>
                                                                    <option value="javascript">Other</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 mb-3">
                                                            <label for="exampleFormControlInput99" class="form-label">Joining Date<span class="text-danger">*</span></label>
                                                            <input type="date" class="form-control" id="exampleFormControlInput99">
                                                        </div>
                                                        <div class="col-xl-6 mb-3">
                                                            <label for="exampleFormControlInput8" class="form-label">Date of Birth<span class="text-danger">*</span></label>
                                                            <input type="date" class="form-control" id="exampleFormControlInput8">
                                                        </div>
                                                        <div class="col-xl-6 mb-3">
                                                            <label for="exampleFormControlInput10" class="form-label">Reporting To<span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput10" placeholder="">
                                                        </div>
                                                        <div class="col-xl-6 mb-3">
                                                            <label class="form-label">Language Select<span class="text-danger">*</span></label>
                                                            <div class="dropdown bootstrap-select default-select form-control">
                                                                <select class="default-select form-control">
                                                                    <option data-display="Select">Please select</option>
                                                                    <option value="html">English</option>
                                                                    <option value="css">Hindi</option>
                                                                    <option value="javascript">Canada</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 mb-3">
                                                            <label class="form-label">User Role<span class="text-danger">*</span></label>
                                                            <div class="dropdown bootstrap-select default-select form-control">
                                                                <select class="default-select form-control">
                                                                    <option data-display="Select">Please select</option>
                                                                    <option value="html">Parmanent</option>
                                                                    <option value="css">Parttime</option>
                                                                    <option value="javascript">Per Hours</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12 mb-3">
                                                            <label class="form-label">Address<span class="text-danger">*</span></label>
                                                            <textarea rows="2" class="form-control"></textarea>
                                                        </div>
                                                        <div class="col-xl-12 mb-3">
                                                            <label class="form-label">About<span class="text-danger">*</span></label>
                                                            <textarea rows="3" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    <!--tab start-->
                                                    <!-- Nav tabs -->
                                                    <fieldset>
                                                        <legend>Educations:</legend>
                                                    <div class="default-tab">
                                                        <ul class="nav nav-tabs" role="tablist">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" data-bs-toggle="tab" href="#ssc">SSC</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" data-bs-toggle="tab" href="#hsc">HSC</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" data-bs-toggle="tab" href="#graduation">Graduation</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" data-bs-toggle="tab" href="#postgraduation">Post Graduation</a>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="tab-pane fade show active" id="ssc" role="tabpanel">
                                                                <div class="pt-4">
                                                                    <div class="row">
                                                                        <div class="col-xl-6 mb-3">
                                                                            <label for="schoolName" class="form-label">School Name<span class="text-danger">*</span></label>
                                                                            <input type="text" class="form-control" id="schoolName" placeholder="">
                                                                        </div>
                                                                        <div class="col-xl-6 mb-3">
                                                                            <label class="form-label">Group<span class="text-danger">*</span></label>
                                                                            <div class="dropdown bootstrap-select default-select form-control">
                                                                                <select class="default-select form-control">
                                                                                    <option data-display="Select">Please select</option>
                                                                                    <option value="html">Software Engineer</option>
                                                                                    <option value="css">Civil Engineer</option>
                                                                                    <option value="javascript">Web Doveloper</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-6 mb-3">
                                                                            <label class="form-label">Board Name<span class="text-danger">*</span></label>
                                                                            <div class="dropdown bootstrap-select default-select form-control">
                                                                                <select class="default-select form-control">
                                                                                    <option data-display="Select">Please select</option>
                                                                                    <option value="html">Software</option>
                                                                                    <option value="css">Doit</option>
                                                                                    <option value="javascript">Designing</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-6 mb-3">
                                                                            <label class="form-label">Passing Year<span class="text-danger">*</span></label>
                                                                            <div class="dropdown bootstrap-select default-select form-control">
                                                                                <select class="default-select form-control">
                                                                                    <option data-display="Select">Please select</option>
                                                                                    <option value="html">Ind</option>
                                                                                    <option value="css">USA</option>
                                                                                    <option value="javascript">UK</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="hsc">
                                                                <div class="pt-4">

                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="graduation">
                                                                <div class="pt-4">

                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="postgraduation">
                                                                <div class="pt-4">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    </div>


                                                    <hr/>
                                                    <div>
                                                        <button class="btn btn-primary me-1">Submit</button>
                                                        <button class="btn btn-danger light ms-1">Cancel</button>
                                                    </div>
                                                </form>

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