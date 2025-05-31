<div class="ec-left-sidebar ec-bg-sidebar bg-dark text-white">
	<div id="sidebar" class="sidebar ec-sidebar-footer">

		<div class="ec-brand">
			<a href="#">
				<span class="ec-brand-name text-truncate">Admin</span>
			</a>
		</div>

		<!-- begin sidebar scrollbar -->
		<div class="ec-navigation" data-simplebar>
			<!-- sidebar menu -->
			<ul class="nav sidebar-inner" id="sidebar-menu">
				<!-- Dashboard -->
				<!-- <li class="active">
							<a class="sidenav-item-link" href="index.html">
								<i class="mdi mdi-view-dashboard-outline"></i>
								<span class="nav-text">Dashboard</span>
							</a>
							<hr>
						</li> -->

				<!-- Vendors -->
				<!-- <li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-briefcase-outline"></i>
								<span class="nav-text">Vendors</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="vendors" data-parent="#sidebar-menu">
									<li class="">
										<a class="sidenav-item-link" href="vendor-card.html">
											<span class="nav-text">Vendor Grid</span>
										</a>
									</li>

									<li class="">
										<a class="sidenav-item-link" href="vendor-list.html">
											<span class="nav-text">Vendor List</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="vendor-profile.html">
											<span class="nav-text">Vendors Profile</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="add-vendor.html">
											<span class="nav-text">Add Vendors</span>
										</a>
									</li>
								</ul>
							</div>
						</li> -->

				<!-- Users -->
				<li class="has-sub">
					<a class="sidenav-item-link" href="javascript:void(0)">
						<i class="mdi mdi-account-multiple-outline"></i>
						<span class="nav-text">Users</span> <b class="caret"></b>
					</a>
					<div class="collapse">
						<ul class="sub-menu" id="users" data-parent="#sidebar-menu">
							<li>
								<a class="sidenav-item-link" href="{{ route('user.list') }}">
									<span class="nav-text">User</span>
								</a>
							</li>
						</ul>
					</div>
					<hr>
				</li>

				<!-- Category -->
				<!-- <li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-shape"></i>
								<span class="nav-text">Categories</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="categorys" data-parent="#sidebar-menu">
									<li class="">
										<a class="sidenav-item-link" href="main-category.html">
											<span class="nav-text">All Category</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="add-category.html">
											<span class="nav-text">Add Category</span>
										</a>
									</li>
								</ul>
							</div>
						</li> -->

				<!-- Products -->
				<li class="has-sub">
					<a class="sidenav-item-link" href="javascript:void(0)">
						<i class="mdi mdi-package-variant-closed"></i>
						<span class="nav-text">Product</span> <b class="caret"></b>
					</a>
					<div class="collapse">
						<ul class="sub-menu" id="products" data-parent="#sidebar-menu">
							<li class="">
								<a class="sidenav-item-link" href="{{ route('addProduct') }}">
									<span class="nav-text">Add Product</span>
								</a>
							</li>
							<li class="">
								<a class="sidenav-item-link" href="{{ route('listproduct') }}">
									<span class="nav-text">List Product</span>
								</a>
							</li>
							<li class="">
								<a class="sidenav-item-link" href="{{ route('detail.add') }}">
									<span class="nav-text">Add Details Product</span>
								</a>
							</li>
						</ul>
					</div>
				</li>


				<li class="has-sub">
					<a class="sidenav-item-link" href="javascript:void(0)">
						<i class="mdi mdi-account-multiple-outline"></i>
						<span class="nav-text">Voucher</span> <b class="caret"></b>
					</a>
					<div class="collapse">
						<ul class="sub-menu" id="users" data-parent="#sidebar-menu">
							<li>
								<a class="sidenav-item-link" href="{{ route('sale.list') }}">
									<span class="nav-text">Sale</span>
								</a>
								<a class="sidenav-item-link" href="{{ route('list.get') }}">
									<span class="nav-text">Add Voucher</span>
								</a>
							</li>
						</ul>
					</div>
					<hr>
				</li>
				<!--Chat -->
				<li class="has-sub">
					<a class="sidenav-item-link" href="javascript:void(0)">
						<span class="nav-text">Chat</span> <b class="caret"></b>
					</a>
					<div class="collapse">
						<ul class="sub-menu" id="orders" data-parent="#sidebar-menu">
							<li class="">
								<a class="sidenav-item-link" href="{{ route('chat.admin') }}">
									<span class="nav-text">Chat</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
				<!-- Customer Reviews -->
				<li class="has-sub">
					<a class="sidenav-item-link" href="javascript:void(0)">
						<i class="mdi mdi-account-multiple-outline"></i>
						<span class="nav-text">Feedback Review</span> <b class="caret"></b>
					</a>
					<div class="collapse">
						<ul class="sub-menu" id="users" data-parent="#sidebar-menu">
							<li>
								<a class="sidenav-item-link" href="{{ route('home') }}">
									<span class="nav-text">Feedback Review</span>
								</a>
							</li>
						</ul>
					</div>
					<hr>
				</li>

				<li class="has-sub">
					<a class="sidenav-item-link" href="javascript:void(0)">
						<i class="mdi mdi-account-multiple-outline"></i>
						<span class="nav-text">Comments</span> <b class="caret"></b>
					</a>
					<div class="collapse">
						<ul class="sub-menu" id="users" data-parent="#sidebar-menu">
							<li>
								<a class="sidenav-item-link" href="{{ route('page.list-comments') }}">
									<span class="nav-text">List Comments</span>
								</a>
								<a class="sidenav-item-link" href="{{ route('add-comments') }}">
									<span class="nav-text">Add Comments</span>
								</a>
							</li>
						</ul>
					</div>
					<hr>
				</li>
				<li class="has-sub">
					<a class="sidenav-item-link" href="javascript:void(0)">
						<i class="mdi mdi-account-multiple-outline"></i>
						<span class="nav-text">Statistic</span> <b class="caret"></b>
					</a>
					<div class="collapse">
						<ul class="sub-menu" id="users" data-parent="#sidebar-menu">
							<li>
								<a class="sidenav-item-link" href="{{ route('page.statistic') }}">
									<span class="nav-text">List Statistic</span>
								</a>
								
							</li>
						</ul>
					</div>
					<hr>
				</li>

				<!-- Invoice -->
				<!-- <li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-receipt"></i>
								<span class="nav-text">Invoice</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="authentication" data-parent="#sidebar-menu">
									<li class="">
										<a href="invoice.html">
											<span class="nav-text">Invoice list</span>
										</a>
									</li>
									<li class="">
										<a href="invoice-details.html">
											<span class="nav-text">Invoice details</span>
										</a>
									</li>
								</ul>
							</div>
						</li> -->

				<!-- Reviews -->
				<!-- <li>
							<a class="sidenav-item-link" href="review-list.html">
								<i class="mdi mdi-star-circle-outline"></i>
								<span class="nav-text">Reviews</span>
							</a>
						</li> -->

				<!-- Brands -->
				<!-- <li>
							<a class="sidenav-item-link" href="brand-list.html">
								<i class="mdi mdi-tag-outline"></i>
								<span class="nav-text">Brands</span>
							</a>
							<hr>
						</li> -->
				<!-- Transactions -->
				<!-- <li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-finance"></i>
								<span class="nav-text">Transactions</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="authentication" data-parent="#sidebar-menu">
									<li class="">
										<a href="all-transactions.html">
											<span class="nav-text">All transactions</span>
										</a>
									</li>
									<li class="">
										<a href="transaction-details.html">
											<span class="nav-text">Transaction details</span>
										</a>
									</li>
								</ul>
							</div>
						</li> -->
				<!-- Setting -->
				<!-- <li>
							<a class="sidenav-item-link" href="setting.html">
								<i class="mdi mdi-cogs"></i>
								<span class="nav-text">Setting</span>
							</a>
						</li> -->
				<!-- Authentication -->
				<!-- <li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-login-variant"></i>
								<span class="nav-text">Authentication</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="authentication" data-parent="#sidebar-menu">
									<li class="">
										<a href="sign-in.html">
											<span class="nav-text">Sign In</span>
										</a>
									</li>
									<li class="">
										<a href="sign-up.html">
											<span class="nav-text">Sign Up</span>
										</a>
									</li>
								</ul>
							</div>
						</li> -->

				<!-- Error page -->
				<!-- <li>
							<a class="sidenav-item-link" href="404.html">
								<i class="mdi mdi-alert-circle-outline"></i>
								<span class="nav-text">Error page</span>
							</a>
						</li> -->
			</ul>
		</div>
	</div>
</div>