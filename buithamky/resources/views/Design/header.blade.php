<div class="ec-page-wrapper">

			<!-- Header -->
			<header class="ec-main-header" id="header">
				<nav class="navbar navbar-static-top navbar-expand-lg">
					<!-- Sidebar toggle button -->
					<button id="sidebar-toggler">
						<img src="/assets/img/icons/clops.png" alt="">
					</button>
					<!-- search form -->
					<div class="search-form d-lg-inline-block">
						<div class="input-group">
							<input type="text" name="query" id="search-input" class="form-control"
								placeholder="search.." autofocus autocomplete="off" />
							<button type="button" name="search" id="search-btn" class="btn btn-flat">
								<i class="mdi mdi-magnify"></i>
							</button>
						</div>
						<div id="search-results-container">
							<ul id="search-results"></ul>
						</div>
					</div>

					<!-- navbar right -->
					<div class="navbar-right">
						<ul class="nav navbar-nav">
							<!-- User Account -->
							<li class="dropdown user-menu">
								<button class="dropdown-toggle nav-link ec-drop" data-bs-toggle="dropdown"
									aria-expanded="false">
									<img src="{{ asset('assets/img/' . $customer->image) }}" alt="avatar" width="45px" height="40px" />
								</button>
								<ul class="dropdown-menu dropdown-menu-right ec-dropdown-menu">
									<!-- User image -->
									<li class="dropdown-header">
										<div class="d-inline-block">
											<h5>{{$customer->Name}}</h5>
											<p class="pt-2">{{$customer->Email}}</p>
										</div>
									</li>
									<li>
										<a href="">
											<i class="mdi mdi-account"></i> Thông Tin Cá Nhân
										</a>
									</li>
									<li class="dropdown-footer">
										<a href="index.html"> <i class="mdi mdi-logout"></i> Đăng Xuất </a>
									</li>
								</ul>
							</li>
							
						</ul>
					</div>
				</nav>
			</header>