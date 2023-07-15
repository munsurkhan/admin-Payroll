    <?php include_once 'inc/header.php';?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
    <?php include_once 'inc/sidebar.php';?>
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
					<div class="col-xl-9 wid-100">
						<div class="row">
							<div class="col-xl-3 col-sm-6">
								<div class="card chart-grd same-card">
									<div class="card-body depostit-card p-0">
										<div class="depostit-card-media d-flex justify-content-between pb-0">
											<div>
												<h6>Total Deposit</h6>
												<h3>$1200.00</h3>
											</div>
										</div>
										<div id="NewCustomers"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6">
								<div class="card same-card">
									<div class="card-body d-flex align-items-center  py-2">
										<div id="AllProject"></div>
										<ul class="project-list">
											<li><h6>All Projects</h6></li>
											<li>
												<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect width="10" height="10" rx="3" fill="#3AC977"/>
												</svg>
												Compete
											</li>
											<li>
												<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect width="10" height="10" rx="3" fill="var(--primary)"/>
												</svg>
												Pending
											</li>
											<li>
												<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect width="10" height="10" rx="3" fill="var(--secondary)"/>
												</svg>
												Not Start
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6">
								<div class="card chart-grd same-card">
									<div class="card-body depostit-card p-0">
										<div class="depostit-card-media d-flex justify-content-between pb-0">
											<div>
												<h6>Total Expenses</h6>
												<h3>$1200.00</h3>
											</div>
										</div>
										<div id="NewExperience"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6 same-card">
								<div class="card">
									<div class="card-body depostit-card">
										<div class="depostit-card-media d-flex justify-content-between style-1">
											<div>
												<h6>Total Deposit</h6>
												<h3>20</h3>
											</div>
										</div>
										<div class="progress-box mt-0">
											<div class="d-flex justify-content-between">
												<p class="mb-0">Tasks Not Finished</p>
												<p class="mb-0">20/28</p>
											</div>
											<div class="progress">
												<div class="progress-bar bg-primary" style="width:50%; height:5px; border-radius:4px;" role="progressbar"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card overflow-hidden">
									<div class="card-header border-0 pb-0 flex-wrap">
										<h4 class="heading mb-0">Projects Overview</h4>
										<ul class="nav nav-pills mix-chart-tab" id="pills-tab" role="tablist">
										  <li class="nav-item" role="presentation">
											<button class="nav-link active" data-series="week" id="pills-week-tab" data-bs-toggle="pill" data-bs-target="#pills-week" type="button" role="tab"  aria-selected="true">Week</button>
										  </li>
										  <li class="nav-item" role="presentation">
											<button class="nav-link" data-series="month" id="pills-month-tab" data-bs-toggle="pill" data-bs-target="#pills-month" type="button" role="tab"  aria-selected="false">Month</button>
										  </li>
										  <li class="nav-item" role="presentation">
											<button class="nav-link" data-series="year" id="pills-year-tab" data-bs-toggle="pill" data-bs-target="#pills-year" type="button" role="tab"  aria-selected="false">Year</button>
										  </li>
										   <li class="nav-item" role="presentation">
											<button class="nav-link" data-series="all" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-selected="false">All</button>
										  </li>
										</ul>
									</div>
									<div class="card-body  p-0">
											<div id="overiewChart"></div>
										<div class="ttl-project">
											<div class="pr-data">
												<h5>12,721</h5>
												<span>Number of Projects</span>
											</div>
											<div class="pr-data">
												<h5 class="text-primary">721</h5>
												<span>Active Projects</span>
											</div>
											<div class="pr-data">
												<h5>$2,50,523</h5>
												<span>Revenue</span>
											</div>
											<div class="pr-data">
												<h5 class="text-success">12,275h</h5>
												<span>Working Hours</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 t-earn">
						<div class="card">
							<div class="card-header border-0 pb-0">
								<h4 class="heading mb-0">Total Earning</h4>
							</div>
							<div class="card-body px-0 overflow-hidden">
								<div class="total-earning">
									<h2>$6,743.00</h2>
									<ul class="nav nav-pills mb-3 earning-tab earning-chart" id="pills-tab1" role="tablist">
										  <li class="nav-item" role="presentation">
											<button class="nav-link active" data-series="day" id="pills-day-tab1" data-bs-toggle="pill" data-bs-target="#pills-day1" type="button" role="tab" aria-selected="true">Day</button>
										  </li>
										  <li class="nav-item" role="presentation">
											<button class="nav-link" id="pills-week-tab1" data-series="week" data-bs-toggle="pill" data-bs-target="#pills-week1" type="button" role="tab" aria-selected="false">Week</button>
										  </li>
										  <li class="nav-item" role="presentation">
											<button class="nav-link" id="pills-month-tab1" data-series="month" data-bs-toggle="pill" data-bs-target="#pills-month1" type="button" role="tab" aria-selected="false">Month</button>
										  </li>
										  <li class="nav-item" role="presentation">
											<button class="nav-link" id="pills-year-tab1" data-series="year" data-bs-toggle="pill" data-bs-target="#pills-year1" type="button" role="tab" aria-selected="false">Year</button>
										  </li>
									</ul>
									<div id="earningChart"></div>
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