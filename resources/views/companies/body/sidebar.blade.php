<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="{{ asset('adminbackend/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Company</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				
				<li>
					<a href="{{ route('companies.dashboard')}}">
						<div class="parent-icon"><i class='bx bx-spreadsheet'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>

				<li>
					<a href="{{ route('companies.event')}}">
						<div class="parent-icon"><i class='bx bx-calendar'></i>
						</div>
						<div class="menu-title">Calendar</div>
					</a>
				</li>

                <!-- <li>
					<a href="{{ route('companies.profile')}}">
						<div class="parent-icon"><i class='bx bx-card'></i>
						</div>
						<div class="menu-title">Profile</div>
					</a>
				</li> -->

				<!-- <li class="menu-label">Generate and track leads</li> -->
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-list-plus"></i>
						</div>
						<div class="menu-title">Leads</div>
					</a>
					<ul>
						<li> <a href="#"><i class="bx bx-grid-small"></i>Generate leads</a>
						</li>
						<li> <a href="{{ route('companies.add.leads')}}"><i class="bx bx-grid-small"></i>Add leads</a>
						</li>
						<li> <a href="{{ route('companies.all.leads')}}"><i class="bx bx-grid-small"></i>All leads</a>
						</li>
					</ul>
				</li>

				<!-- <li class="menu-label">Listing item</li> -->
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-list-plus"></i>
						</div>
						<div class="menu-title">Listing item</div>
					</a>
					<ul>
						<li> <a href="{{ route('companies.item.listing')}}"><i class="bx bx-list-plus"></i>Add Item</a>
						</li>
						<li> <a href="{{ route('companies.basic.all.product') }}"><i class="bx bx-grid-small"></i>All Products</a>
						</li>
						<li> <a href="#"><i class="bx bx-grid-small"></i>All Jobs</a>
						</li>
						<li> <a href="#"><i class="bx bx-grid-small"></i>All Projects</a>
						</li>
						<li> <a href="#"><i class="bx bx-grid-small"></i>All Tasks</a>
						</li>

					</ul>
				</li>
				

				<!-- <li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-briefcase-alt"></i>
						</div>
						<div class="menu-title">Job Manage</div>
					</a>
					<ul>
						<li> <a href="#"><i class="bx bx-right-arrow-alt"></i>All Jobs</a>
						</li>
						<li> <a href="#"><i class="bx bx-message-alt-add"></i>Add Job</a>
						</li>

					</ul>
				</li>


				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-network-chart"></i>
						</div>
						<div class="menu-title">Project Manage</div>
					</a>
					<ul>
						<li> <a href="#"><i class="bx bx-right-arrow-alt"></i>All Projects</a>
						</li>
						<li> <a href="#"><i class="bx bx-message-alt-add"></i>Add Project</a>
						</li>

					</ul>
				</li>

				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-task"></i>
						</div>
						<div class="menu-title">Task Manage</div>
					</a>
					<ul>
						<li> <a href="#"><i class="bx bx-right-arrow-alt"></i>All Tasks</a>
						</li>
						<li> <a href="#"><i class="bx bx-message-alt-add"></i>Add Task</a>
						</li>

					</ul>
				</li> -->

				
				<li class="menu-label">Others</li>
			
				<li>
				<a href="{{ route('companies.encounters')}}">
						<div class="parent-icon"><i class="bx bx-poll"></i>
						</div>
						<div class="menu-title">Encounters</div>
					</a>
				</li>

				<li>
					<a class="" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-user-voice"></i>
						</div>
						<div class="menu-title">Sales people near by</div>
					</a>
				</li>

				<li>
					<a class="" href="{{ route('companies.liked')}}">
						<div class="parent-icon"><i class="bx bx-like"></i>
						</div>
						<div class="menu-title">Liked you</div>
					</a>
				</li>

				<li>
					<a class="" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-group"></i>
						</div>
						<div class="menu-title">Visitors</div>
					</a>
				</li>

				<!-- <li>
					<a class="" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-search"></i>
						</div>
						<div class="menu-title">Search</div>
					</a>
				</li> -->

				<li>
					<a class="" href="{{ route('companies.interested')}}">
						<div class="parent-icon"><i class="bx bx-heart"></i>
						</div>
						<div class="menu-title">Interested</div>
					</a>
				</li>

				<!-- <li>
					<a class="" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-user-plus"></i>
						</div>
						<div class="menu-title">Invite friends</div>
					</a>
				</li>
				
				<li>
					<a class="" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-line-chart"></i>
						</div>
						<div class="menu-title">About us</div>
					</a>
				</li>

				<li>
					<a class="" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-user"></i>
						</div>
						<div class="menu-title">Contact us</div>
					</a>
				</li> -->

				<!-- <li>

					<ul>
						<li> <a href="map-google-maps.html"><i class="bx bx-right-arrow-alt"></i>Google Maps</a>
						</li>
						<li> <a href="map-vector-maps.html"><i class="bx bx-right-arrow-alt"></i>Vector Maps</a>
						</li>
					</ul>
				</li>
				<li class="menu-label">Others</li>
		
				<li>
					<a href="https://codervent.com/rukada/documentation/index.html" target="_blank">
						<div class="parent-icon"><i class="bx bx-folder"></i>
						</div>
						<div class="menu-title">Documentation</div>
					</a>
				</li>
				<li>
					<a href="https://themeforest.net/user/codervent" target="_blank">
						<div class="parent-icon"><i class="bx bx-support"></i>
						</div>
						<div class="menu-title">Support</div>
					</a>
				</li> -->
			</ul>
			<!--end navigation-->
		</div>