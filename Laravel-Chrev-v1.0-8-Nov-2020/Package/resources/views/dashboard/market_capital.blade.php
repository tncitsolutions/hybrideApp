{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')
            <!-- row -->
			<div class="container-fluid">
                <div class="form-head d-flex mb-3 mb-md-5 align-items-center">
					<div class="input-group search-area d-inline-flex">
						<div class="input-group-append">
							<span class="input-group-text"><i class="flaticon-381-search-2"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Search here">
					</div>
					<div class="dropdown ml-auto d-block">
						<div class="btn bg-white d-flex align-items-center rounded-0 svg-btn" data-toggle="dropdown">
							<span class="text-primary">USD</span>
							<i class="fa fa-angle-down scale5 ml-3 mr-0"></i>
						</div>
						<div class="dropdown-menu dropdown-menu-right">
							<a class="dropdown-item" href="#">4 June 2020 - 4 July 2020</a>
							<a class="dropdown-item" href="#">5 july 2020 - 4 Aug 2020</a>
						</div>
					</div>
					<div class="dropdown ml-3 d-block">
						<div class="btn bg-white d-flex align-items-center rounded-0 svg-btn" data-toggle="dropdown">
							<svg width="16" height="16" class="scale5" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M22.4281 2.856H21.8681V1.428C21.8681 0.56 21.2801 0 20.4401 0C19.6001 0 19.0121 0.56 19.0121 1.428V2.856H9.71606V1.428C9.71606 0.56 9.15606 0 8.28806 0C7.42006 0 6.86006 0.56 6.86006 1.428V2.856H5.57206C2.85606 2.856 0.560059 5.152 0.560059 7.868V23.016C0.560059 25.732 2.85606 28.028 5.57206 28.028H22.4281C25.1441 28.028 27.4401 25.732 27.4401 23.016V7.868C27.4401 5.152 25.1441 2.856 22.4281 2.856V2.856ZM5.57206 5.712H22.4281C23.5761 5.712 24.5841 6.72 24.5841 7.868V9.856H3.41606V7.868C3.41606 6.72 4.42406 5.712 5.57206 5.712V5.712ZM22.4281 25.144H5.57206C4.42406 25.144 3.41606 24.136 3.41606 22.988V12.712H24.5561V22.988C24.5841 24.136 23.5761 25.144 22.4281 25.144Z" fill="#A5A5A5"/>
							</svg>
							<div class="text-left ml-3">
								<span class="d-block text-black">Filter Periode</span>
							</div>
							<i class="fa fa-angle-down scale5 ml-4"></i>
						</div>
						<div class="dropdown-menu dropdown-menu-right">
							<a class="dropdown-item" href="#">4 June 2020 - 4 July 2020</a>
							<a class="dropdown-item" href="#">5 july 2020 - 4 Aug 2020</a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-12">
						<div class="table-responsive table-hover fs-14">
							<table class="table display mb-4 dataTablesCard " id="example-5">
								<thead>
									<tr>
										<th>Rank</th>
										<th>Coin</th>
										<th>Last Price</th>
										<th>Change (24h)</th>
										<th>Volume (24h)</th>
										<th>Graph</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="width">
											<span class="bgl-primary text-primary d-inline-block p-3 fs-20 font-w600">#1</span>
										</td>
										<td>
											<div class="font-w600 d-flex align-items-center">
												<svg class="mr-2" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M26.667 15.8335C26.6658 14.4533 25.547 13.3348 24.1672 13.3333H16.667V18.3333H24.1672C25.547 18.3322 26.6658 17.2133 26.667 15.8335Z" fill="#FFAB2D"/>
													<path d="M16.667 26.6667H24.1672C25.5477 26.6667 26.667 25.5474 26.667 24.1669C26.667 22.7859 25.5477 21.6667 24.1672 21.6667H16.667V26.6667Z" fill="#FFAB2D"/>
													<path d="M20 0C8.95433 0 0 8.95433 0 20C0 31.0457 8.95433 40 20 40C31.0457 40 40 31.0457 40 20C39.9874 8.95956 31.0404 0.012643 20 0ZM30.0002 24.2856C29.9963 27.4402 27.4402 29.9963 24.286 29.9998V31.4284C24.286 32.2175 23.646 32.8571 22.8573 32.8571C22.0682 32.8571 21.4287 32.2175 21.4287 31.4284V29.9998H18.5718V31.4284C18.5718 32.2175 17.9318 32.8571 17.1431 32.8571C16.354 32.8571 15.7144 32.2175 15.7144 31.4284V29.9998H11.4289C10.6398 29.9998 10.0002 29.3602 10.0002 28.5716C10.0002 27.7825 10.6398 27.1429 11.4289 27.1429H12.8571V12.8571H11.4289C10.6398 12.8571 10.0002 12.2175 10.0002 11.4284C10.0002 10.6393 10.6398 9.99978 11.4289 9.99978H15.7144V8.57155C15.7144 7.78245 16.354 7.14289 17.1431 7.14289C17.9322 7.14289 18.5718 7.78245 18.5718 8.57155V9.99978H21.4287V8.57155C21.4287 7.78245 22.0682 7.14289 22.8573 7.14289C23.6464 7.14289 24.286 7.78245 24.286 8.57155V9.99978C27.4284 9.9867 29.9867 12.5232 30.0002 15.6656C30.0072 17.3297 29.2857 18.9136 28.0253 20C29.2739 21.0742 29.9945 22.638 30.0002 24.2856Z" fill="#FFAB2D"/>
												</svg>
												Bitcoin
											</div>
										</td>
										<td>
											<span class="font-w600">$11,911.48</span>
										</td>
										<td>
											<span class="font-w500 text-success">2,54%</span>
										</td>
										<td>
											<span class="font-w500">$220,083,007,631</span>
										</td>
										<td>
											<span class="peity-line" data-width="100%">0,2,3,2,3,4,3,3,6,5,6,4,5,2,3,4,2,1,5,3</span>
										</td>
										<td>
											<div class="dropdown float-right custom-dropdown mb-0">
												<div class="btn sharp pr-0 tp-btn" data-toggle="dropdown" >
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right" >
													<a class="dropdown-item" href="javascript:void(0);">Details</a>
													<a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="width">
											<span class="bgl-primary text-primary d-inline-block p-3 fs-20 font-w600">#2</span>
										</td>
										<td>
											<div class="font-w600 d-flex align-items-center">
												<svg class="mr-2" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M20.5435 22.9257C20.1948 23.065 19.8063 23.065 19.4576 22.9257L15.7148 21.4285L20.0006 30L24.2863 21.4285L20.5435 22.9257Z" fill="#DC3CCC"/>
													<path d="M19.9994 20L25.7137 18.0001L19.9994 10L14.2852 18.0001L19.9994 20Z" fill="#DC3CCC"/>
													<path d="M20 0C8.95433 0 0 8.95433 0 20C0 31.0457 8.95433 40 20 40C31.0457 40 40 31.0457 40 20C39.9878 8.95956 31.0404 0.0122071 20 0ZM28.4207 19.2105L21.2778 33.4962C20.9251 34.2021 20.0667 34.4881 19.3613 34.1354C19.0845 33.9972 18.8604 33.7731 18.7222 33.4962L11.5793 19.2105C11.3574 18.7649 11.3827 18.2361 11.646 17.8136L18.7889 6.38518C19.2637 5.7164 20.1901 5.55858 20.8589 6.03335C20.9953 6.13014 21.1143 6.24872 21.2111 6.38518L28.3536 17.8136C28.6173 18.2361 28.6426 18.7649 28.4207 19.2105Z" fill="#DC3CCC"/>
												</svg>
												Ethereum
											</div>
										</td>
										<td>
											<span class="font-w600">$459.24</span>
										</td>
										<td>
											<span class="font-w500 text-success">2,54%</span>
										</td>
										<td>
											<span class="font-w500">$634,353,775,631</span>
										</td>
										<td>
											<span class="peity-line" data-width="100%">5,6,4,3,4,3,2,3,6,7,8,5,4,2,3,3,2,1,1,0</span>
										</td>
										<td>
											<div class="dropdown float-right custom-dropdown mb-0">
												<div class="btn sharp pr-0 tp-btn" data-toggle="dropdown" >
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right" >
													<a class="dropdown-item" href="javascript:void(0);">Details</a>
													<a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="width">
											<span class="bgl-primary text-primary d-inline-block p-3 fs-20 font-w600">#3</span>
										</td>
										<td>
											<div class="font-w600 d-flex align-items-center">
												<svg class="mr-2" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M20 0C8.95433 0 0 8.95433 0 20C0 31.0457 8.95433 40 20 40C31.0457 40 40 31.0457 40 20C39.9874 8.95956 31.0404 0.012643 20 0ZM29.8132 17.8001C29.0694 18.4571 28.2106 18.9707 27.2798 19.3142C26.621 19.5274 26.0185 19.8853 25.5163 20.3623C24.8497 21.9496 25.2591 23.7855 26.5378 24.9395C26.5814 24.9831 26.6223 25.0298 26.6603 25.079C28.269 27.1403 28.1055 30.073 26.2779 31.9429C24.2546 33.9627 20.9774 33.9627 18.9537 31.9429C17.6732 30.4061 17.2547 28.327 17.8407 26.4144C17.9823 25.3092 17.6044 24.2001 16.8166 23.4119C16.0349 22.6585 14.9511 22.305 13.8755 22.4519C11.9629 23.0369 9.88425 22.6171 8.34834 21.3362C6.32589 19.3164 6.32414 16.0397 8.34398 14.0177C8.34529 14.0159 8.34703 14.0146 8.34834 14.0133C10.2173 12.1844 13.1514 12.0209 15.2122 13.631C16.6548 15.0566 18.7919 15.5366 19.9276 14.7723C20.4063 14.2714 20.7647 13.6684 20.9766 13.0088C21.3201 12.0789 21.8328 11.2209 22.4889 10.478C24.5114 8.45559 27.7899 8.45559 29.8123 10.4776C31.8352 12.5001 31.8352 15.7785 29.8132 17.801V17.8001Z" fill="#2B98D6"/>
													<path d="M24.063 12.6758C23.6757 13.1731 23.3694 13.7285 23.1563 14.3216C22.7677 15.4908 22.0503 16.5236 21.0907 17.2965C18.3849 18.7495 15.0393 18.1876 12.9564 15.9305C12.0367 15.3136 10.8107 15.4211 10.0123 16.1887C9.11127 17.0885 9.1104 18.5489 10.0102 19.45C10.011 19.4504 10.0115 19.4513 10.0123 19.4517C10.5556 19.9928 11.3293 20.0786 12.9815 19.7762C13.3164 19.7156 13.656 19.6848 13.9965 19.6848C15.6518 19.7117 17.2352 20.3658 18.4269 21.5147C19.8708 22.9586 20.5406 25.0043 20.2295 27.0227C19.9219 28.6711 20.0077 29.4474 20.5514 29.9919C21.4529 30.8917 22.9128 30.8917 23.8143 29.9919C24.5932 29.1597 24.6703 27.8917 23.9976 26.9715C21.7977 24.8847 21.2684 21.5827 22.7057 18.9128C23.4786 17.9537 24.5113 17.2371 25.6806 16.8498C26.2745 16.6358 26.8303 16.3278 27.3272 15.9379C28.2278 15.0368 28.2278 13.576 27.3267 12.6753C26.4252 11.7747 24.9649 11.7751 24.0643 12.6762L24.063 12.6758Z" fill="#2B98D6"/>
												</svg>
												Ripple
											</div>
										</td>
										<td>
											<span class="font-w600">+$5,553</span>
										</td>
										<td>
											<span class="font-w500 text-success">2,54%</span>
										</td>
										<td>
											<span class="font-w500">$220,083,007,631</span>
										</td>
										<td>
											<span class="peity-line" data-width="100%">2,3,2,3,4,5,2,3,2,3,2,5,4,3,2,3,2,1,2,3</span>
										</td>
										<td>
											<div class="dropdown float-right custom-dropdown mb-0">
												<div class="btn sharp pr-0 tp-btn" data-toggle="dropdown" >
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right" >
													<a class="dropdown-item" href="javascript:void(0);">Details</a>
													<a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="width">
											<span class="bgl-light text-dark d-inline-block p-3 fs-20 font-w600">#4</span>
										</td>
										<td>
											<div class="font-w600 d-flex align-items-center">
												<svg class="mr-2" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M20 0C8.95433 0 0 8.95433 0 20C0 31.0457 8.95433 40 20 40C31.0457 40 40 31.0457 40 20C39.9874 8.95956 31.0404 0.012643 20 0ZM27.1429 30.0002H15.7144C14.9253 30.0002 14.2858 29.3607 14.2858 28.5716C14.2858 28.504 14.2906 28.4364 14.3002 28.3693L15.3753 20.8423L13.2037 21.3855C13.0904 21.4143 12.974 21.4287 12.8571 21.4287C12.068 21.4278 11.4293 20.7878 11.4298 19.9987C11.4306 19.3439 11.8762 18.7736 12.5114 18.6141L15.8112 17.7892L17.1571 8.36883C17.2687 7.58757 17.9924 7.04523 18.7736 7.15684C19.5549 7.26845 20.0972 7.99215 19.9856 8.77341L18.8041 17.0411L23.9394 15.7572C24.7036 15.5623 25.481 16.024 25.6754 16.7882C25.8703 17.5525 25.4086 18.3298 24.6444 18.5247C24.64 18.5256 24.6356 18.5269 24.6313 18.5277L18.3673 20.0937L17.3607 27.1429H27.1429C27.932 27.1429 28.5716 27.7825 28.5716 28.5716C28.5716 29.3602 27.932 30.0002 27.1429 30.0002Z" fill="#5F5F5F"/>
												</svg>
												Litecoin
											</div>
										</td>
										<td>
											<span class="font-w600">+$5,553</span>
										</td>
										<td>
											<span class="font-w500 text-success">2,54%</span>
										</td>
										<td>
											<span class="font-w500">$220,083,007,631</span>
										</td>
										<td>
											<span class="peity-line" data-width="100%">4,3,2,3,8,7,5,4,7,8,5,5,4,3,2,3,2,5,8,11</span>
										</td>
										<td>
											<div class="dropdown float-right custom-dropdown mb-0">
												<div class="btn sharp pr-0 tp-btn" data-toggle="dropdown" >
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right" >
													<a class="dropdown-item" href="javascript:void(0);">Details</a>
													<a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="width">
											<span class="bgl-light text-dark d-inline-block p-3 fs-20 font-w600">#5</span>
										</td>
										<td>
											<div class="font-w600 d-flex align-items-center">
												<svg class="mr-2" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M20.5435 22.9257C20.1948 23.065 19.8063 23.065 19.4576 22.9257L15.7148 21.4285L20.0006 30L24.2863 21.4285L20.5435 22.9257Z" fill="#DC3CCC"/>
													<path d="M19.9994 20L25.7137 18.0001L19.9994 10L14.2852 18.0001L19.9994 20Z" fill="#DC3CCC"/>
													<path d="M20 0C8.95433 0 0 8.95433 0 20C0 31.0457 8.95433 40 20 40C31.0457 40 40 31.0457 40 20C39.9878 8.95956 31.0404 0.0122071 20 0ZM28.4207 19.2105L21.2778 33.4962C20.9251 34.2021 20.0667 34.4881 19.3613 34.1354C19.0845 33.9972 18.8604 33.7731 18.7222 33.4962L11.5793 19.2105C11.3574 18.7649 11.3827 18.2361 11.646 17.8136L18.7889 6.38518C19.2637 5.7164 20.1901 5.55858 20.8589 6.03335C20.9953 6.13014 21.1143 6.24872 21.2111 6.38518L28.3536 17.8136C28.6173 18.2361 28.6426 18.7649 28.4207 19.2105Z" fill="#DC3CCC"/>
												</svg>
												Ethereum
											</div>
										</td>
										<td>
											<span class="font-w600">+$5,553</span>
										</td>
										<td>
											<span class="font-w500 text-danger">2,54%</span>
										</td>
										<td>
											<span class="font-w500">$220,083,007,631</span>
										</td>
										<td>
											<span class="peity-line" data-width="100%">10,3,2,3,2,9,2,4,7,8,4,5,9,3,2,1,2,5,8,11</span>
										</td>
										<td>
											<div class="dropdown float-right custom-dropdown mb-0">
												<div class="btn sharp pr-0 tp-btn" data-toggle="dropdown" >
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right" >
													<a class="dropdown-item" href="javascript:void(0);">Details</a>
													<a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="width">
											<span class="bgl-light text-dark d-inline-block p-3 fs-20 font-w600">#6</span>
										</td>
										<td>
											<div class="font-w600 d-flex align-items-center">
												<svg class="mr-2" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M26.667 15.8335C26.6658 14.4533 25.547 13.3348 24.1672 13.3333H16.667V18.3333H24.1672C25.547 18.3322 26.6658 17.2133 26.667 15.8335Z" fill="#FFAB2D"/>
													<path d="M16.667 26.6667H24.1672C25.5477 26.6667 26.667 25.5474 26.667 24.1669C26.667 22.7859 25.5477 21.6667 24.1672 21.6667H16.667V26.6667Z" fill="#FFAB2D"/>
													<path d="M20 0C8.95433 0 0 8.95433 0 20C0 31.0457 8.95433 40 20 40C31.0457 40 40 31.0457 40 20C39.9874 8.95956 31.0404 0.012643 20 0ZM30.0002 24.2856C29.9963 27.4402 27.4402 29.9963 24.286 29.9998V31.4284C24.286 32.2175 23.646 32.8571 22.8573 32.8571C22.0682 32.8571 21.4287 32.2175 21.4287 31.4284V29.9998H18.5718V31.4284C18.5718 32.2175 17.9318 32.8571 17.1431 32.8571C16.354 32.8571 15.7144 32.2175 15.7144 31.4284V29.9998H11.4289C10.6398 29.9998 10.0002 29.3602 10.0002 28.5716C10.0002 27.7825 10.6398 27.1429 11.4289 27.1429H12.8571V12.8571H11.4289C10.6398 12.8571 10.0002 12.2175 10.0002 11.4284C10.0002 10.6393 10.6398 9.99978 11.4289 9.99978H15.7144V8.57155C15.7144 7.78245 16.354 7.14289 17.1431 7.14289C17.9322 7.14289 18.5718 7.78245 18.5718 8.57155V9.99978H21.4287V8.57155C21.4287 7.78245 22.0682 7.14289 22.8573 7.14289C23.6464 7.14289 24.286 7.78245 24.286 8.57155V9.99978C27.4284 9.9867 29.9867 12.5232 30.0002 15.6656C30.0072 17.3297 29.2857 18.9136 28.0253 20C29.2739 21.0742 29.9945 22.638 30.0002 24.2856Z" fill="#FFAB2D"/>
												</svg>
												XRP
											</div>
										</td>
										<td>
											<span class="font-w600">+$5,553</span>
										</td>
										<td>
											<span class="font-w500 text-danger">2,54%</span>
										</td>
										<td>
											<span class="font-w500">$220,083,007,631</span>
										</td>
										<td>
											<span class="peity-line" data-width="100%">8,3,2,6,8,3,3,4,4,8,9,8,8,3,2,3,2,5,8,3</span>
										</td>
										<td>
											<div class="dropdown float-right custom-dropdown mb-0">
												<div class="btn sharp pr-0 tp-btn" data-toggle="dropdown" >
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right" >
													<a class="dropdown-item" href="javascript:void(0);">Details</a>
													<a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="width">
											<span class="bgl-light text-dark d-inline-block p-3 fs-20 font-w600">#7</span>
										</td>
										<td>
											<div class="font-w600 d-flex align-items-center">
												<svg class="mr-2" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M26.667 15.8335C26.6658 14.4533 25.547 13.3348 24.1672 13.3333H16.667V18.3333H24.1672C25.547 18.3322 26.6658 17.2133 26.667 15.8335Z" fill="#FFAB2D"/>
													<path d="M16.667 26.6667H24.1672C25.5477 26.6667 26.667 25.5474 26.667 24.1669C26.667 22.7859 25.5477 21.6667 24.1672 21.6667H16.667V26.6667Z" fill="#FFAB2D"/>
													<path d="M20 0C8.95433 0 0 8.95433 0 20C0 31.0457 8.95433 40 20 40C31.0457 40 40 31.0457 40 20C39.9874 8.95956 31.0404 0.012643 20 0ZM30.0002 24.2856C29.9963 27.4402 27.4402 29.9963 24.286 29.9998V31.4284C24.286 32.2175 23.646 32.8571 22.8573 32.8571C22.0682 32.8571 21.4287 32.2175 21.4287 31.4284V29.9998H18.5718V31.4284C18.5718 32.2175 17.9318 32.8571 17.1431 32.8571C16.354 32.8571 15.7144 32.2175 15.7144 31.4284V29.9998H11.4289C10.6398 29.9998 10.0002 29.3602 10.0002 28.5716C10.0002 27.7825 10.6398 27.1429 11.4289 27.1429H12.8571V12.8571H11.4289C10.6398 12.8571 10.0002 12.2175 10.0002 11.4284C10.0002 10.6393 10.6398 9.99978 11.4289 9.99978H15.7144V8.57155C15.7144 7.78245 16.354 7.14289 17.1431 7.14289C17.9322 7.14289 18.5718 7.78245 18.5718 8.57155V9.99978H21.4287V8.57155C21.4287 7.78245 22.0682 7.14289 22.8573 7.14289C23.6464 7.14289 24.286 7.78245 24.286 8.57155V9.99978C27.4284 9.9867 29.9867 12.5232 30.0002 15.6656C30.0072 17.3297 29.2857 18.9136 28.0253 20C29.2739 21.0742 29.9945 22.638 30.0002 24.2856Z" fill="#FFAB2D"/>
												</svg>
												BitcoinCash
											</div>
										</td>
										<td>
											<span class="font-w600">+$5,553</span>
										</td>
										<td>
											<span class="font-w500 text-success">2,54%</span>
										</td>
										<td>
											<span class="font-w500">$220,083,007,631</span>
										</td>
										<td>
											<span class="peity-line" data-width="100%">1,5,2,4,8,7,5,4,7,8,5,5,2,3,9,3,2,5,8,3</span>
										</td>
										<td>
											<div class="dropdown float-right custom-dropdown mb-0">
												<div class="btn sharp pr-0 tp-btn" data-toggle="dropdown" >
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right" >
													<a class="dropdown-item" href="javascript:void(0);">Details</a>
													<a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="width">
											<span class="bgl-light text-dark d-inline-block p-3 fs-20 font-w600">#8</span>
										</td>
										<td>
											<div class="font-w600 d-flex align-items-center">
												<svg class="mr-2" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M20 0C8.95433 0 0 8.95433 0 20C0 31.0457 8.95433 40 20 40C31.0457 40 40 31.0457 40 20C39.9874 8.95956 31.0404 0.012643 20 0ZM27.1429 30.0002H15.7144C14.9253 30.0002 14.2858 29.3607 14.2858 28.5716C14.2858 28.504 14.2906 28.4364 14.3002 28.3693L15.3753 20.8423L13.2037 21.3855C13.0904 21.4143 12.974 21.4287 12.8571 21.4287C12.068 21.4278 11.4293 20.7878 11.4298 19.9987C11.4306 19.3439 11.8762 18.7736 12.5114 18.6141L15.8112 17.7892L17.1571 8.36883C17.2687 7.58757 17.9924 7.04523 18.7736 7.15684C19.5549 7.26845 20.0972 7.99215 19.9856 8.77341L18.8041 17.0411L23.9394 15.7572C24.7036 15.5623 25.481 16.024 25.6754 16.7882C25.8703 17.5525 25.4086 18.3298 24.6444 18.5247C24.64 18.5256 24.6356 18.5269 24.6313 18.5277L18.3673 20.0937L17.3607 27.1429H27.1429C27.932 27.1429 28.5716 27.7825 28.5716 28.5716C28.5716 29.3602 27.932 30.0002 27.1429 30.0002Z" fill="#5F5F5F"/>
												</svg>
												Chainlink
											</div>
										</td>
										<td>
											<span class="font-w600">+$5,553</span>
										</td>
										<td>
											<span class="font-w500 text-danger">2,54%</span>
										</td>
										<td>
											<span class="font-w500">$220,083,007,631</span>
										</td>
										<td>
											<span class="peity-line" data-width="100%">4,1,2,4,4,7,7,2,4,7,2,2,7,7,10,4,6,7,8,7</span>
										</td>
										<td>
											<div class="dropdown float-right custom-dropdown mb-0">
												<div class="btn sharp pr-0 tp-btn" data-toggle="dropdown" >
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right" >
													<a class="dropdown-item" href="javascript:void(0);">Details</a>
													<a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="width">
											<span class="bgl-light text-dark d-inline-block p-3 fs-20 font-w600">#9</span>
										</td>
										<td>
											<div class="font-w600 d-flex align-items-center">
												<svg class="mr-2" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M20.5435 22.9257C20.1948 23.065 19.8063 23.065 19.4576 22.9257L15.7148 21.4285L20.0006 30L24.2863 21.4285L20.5435 22.9257Z" fill="#DC3CCC"/>
													<path d="M19.9994 20L25.7137 18.0001L19.9994 10L14.2852 18.0001L19.9994 20Z" fill="#DC3CCC"/>
													<path d="M20 0C8.95433 0 0 8.95433 0 20C0 31.0457 8.95433 40 20 40C31.0457 40 40 31.0457 40 20C39.9878 8.95956 31.0404 0.0122071 20 0ZM28.4207 19.2105L21.2778 33.4962C20.9251 34.2021 20.0667 34.4881 19.3613 34.1354C19.0845 33.9972 18.8604 33.7731 18.7222 33.4962L11.5793 19.2105C11.3574 18.7649 11.3827 18.2361 11.646 17.8136L18.7889 6.38518C19.2637 5.7164 20.1901 5.55858 20.8589 6.03335C20.9953 6.13014 21.1143 6.24872 21.2111 6.38518L28.3536 17.8136C28.6173 18.2361 28.6426 18.7649 28.4207 19.2105Z" fill="#DC3CCC"/>
												</svg>
												Ethereum
											</div>
										</td>
										<td>
											<span class="font-w600">+$5,553</span>
										</td>
										<td>
											<span class="font-w500 text-danger">2,54%</span>
										</td>
										<td>
											<span class="font-w500">$220,083,007,631</span>
										</td>
										<td>
											<span class="peity-line" data-width="100%">4,5,2,5,8,9,4,4,1,2,5,5,8,8,2,1,2,4,8,6</span>
										</td>
										<td>
											<div class="dropdown float-right custom-dropdown mb-0">
												<div class="btn sharp pr-0 tp-btn" data-toggle="dropdown" >
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right" >
													<a class="dropdown-item" href="javascript:void(0);">Details</a>
													<a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
            </div>
			
@endsection			