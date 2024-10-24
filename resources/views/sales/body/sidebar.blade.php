<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="{{ asset('adminbackend/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Sales</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				
				<li>
					<a href="{{ route('sales.dashboard')}}">
						<div class="parent-icon"><i class='bx bx-spreadsheet'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>

                <li>
					<a href="{{ route('sales.profile')}}">
						<div class="parent-icon"><i class='bx bx-card'></i>
						</div>
						<div class="menu-title">Profile</div>
					</a>
				</li>

				<li>
					<a href="{{ route('sales.encounters')}}">
						<div class="parent-icon"><i class='bx bx-spreadsheet'></i>
						</div>
						<div class="menu-title">Encounters</div>
					</a>
				</li>

				<li class="menu-label">Charts & Maps</li>
				<li>
					<a href="{{ route('sales.seller.map')}}">
						<div class="parent-icon"><i class="bx bx-line-chart"></i>
						</div>
						<div class="menu-title">Maps</div>
					</a>
				</li>

				
			</ul>
			<!--end navigation-->
		</div>