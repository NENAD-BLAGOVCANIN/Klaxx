
			<!-- Header -->
			<header id="header" class="shadow-xs bg-gradient-warning">


				<!-- topbar -->
				<div class="container position-relative">


					<nav class="navbar navbar-expand-lg navbar-light justify-content-lg-between justify-content-md-inherit">

						<div class="align-items-start">

							<!-- mobile menu button : show -->
							<button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMainNav" aria-controls="navbarMainNav" aria-expanded="false" aria-label="Toggle navigation">
								<svg width="25" viewBox="0 0 20 20">
									<path d="M 19.9876 1.998 L -0.0108 1.998 L -0.0108 -0.0019 L 19.9876 -0.0019 L 19.9876 1.998 Z"></path>
									<path d="M 19.9876 7.9979 L -0.0108 7.9979 L -0.0108 5.9979 L 19.9876 5.9979 L 19.9876 7.9979 Z"></path>
									<path d="M 19.9876 13.9977 L -0.0108 13.9977 L -0.0108 11.9978 L 19.9876 11.9978 L 19.9876 13.9977 Z"></path>
									<path d="M 19.9876 19.9976 L -0.0108 19.9976 L -0.0108 17.9976 L 19.9876 17.9976 L 19.9876 19.9976 Z"></path>
								</svg>
							</button>

<!-- navbar : brand (logo) -->
							<a class="navbar-brand m-0" href="landing-0.html">
								<img src="/images/logo/logo_dark.svg" width="110" height="38" alt="...">
							</a>

						</div>


						<!-- 

							[SOW] SEARCH SUGGEST PLUGIN
							++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++
							PLEASE READ DOCUMENTATION
							documentation/plugins-sow-search-suggest.html
							++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++

						-->
						<form 	action="#search-page" 
								method="GET" 
								data-autosuggest="on" 

								data-mode="json" 
								data-json-max-results='10'
								data-json-related-title='Explore Smarty'
								data-json-related-item-icon='fi fi-star-empty'
								data-json-suggest-title='Suggestions for you'
								data-json-suggest-noresult='No results for'
								data-json-suggest-item-icon='fi fi-search'
								data-json-suggest-min-score='5'
								data-json-highlight-term='true'
								data-contentType='application/json; charset=utf-8'
								data-dataType='json'

								data-theme-class="danger" 

								data-container="#sow-search-container" 
								data-input-min-length="2" 
								data-input-delay="250" 
								data-related-keywords="" 
								data-related-url="_ajax/search_suggest_related.json" 
								data-suggest-url="_ajax/search_suggest_input.json" 
								data-related-action="related_get" 
								data-suggest-action="suggest_get" 
								class="js-ajax-search sow-search sow-search-mobile-float d-flex-1-1-auto m-0 mx-lg-5">
							<div class="sow-search-input w-100">

								<!-- rounded: form-control-pill -->
								<div class="input-group-over d-flex align-items-center w-100 h-100 rounded form-control-pill">

									<input placeholder="Search everything in any location" name="s" type="text" class="form-control-sow-search form-control border-0 bg-light" value="" autocomplete="off">

									<span class="sow-search-buttons">

										<!-- search button -->
										<button aria-label="Global Search" type="submit" class="btn shadow-none m-0 px-3 py-2 bg-transparent text-muted">
											<i class="fi fi-search fs-5 m-0"></i>
										</button>

										<!-- close : mobile only (d-inline-block d-lg-none) -->
										<a href="javascript:;" class="btn-sow-search-toggler btn btn-light shadow-none m-0 p-2 d-inline-block d-lg-none">
											<i class="fi fi-close fs-5 m-0"></i>
										</a>

									</span>

								</div>

							</div>

							<!-- search suggestion container -->
							<div class="sow-search-container w-100 p-0 hide shadow-md" id="sow-search-container">
								<div class="sow-search-container-wrapper">

									<!-- main search container -->
									<div class="sow-search-loader p-3 text-center hide">
										<i class="fi fi-circle-spin fi-spin text-muted fs-1"></i>
									</div>

									<!-- 
										AJAX CONTENT CONTAINER 
										SHOULD ALWAYS BE AS IT IS : NO COMMENTS OR EVEN SPACES!
									--><div class="sow-search-content rounded w-100 scrollable-vertical"></div>

								</div>
							</div>
							<!-- /search suggestion container -->

							<!-- 

								overlay combinations:
									overlay-dark opacity-* [1-9]
									overlay-light opacity-* [1-9]

							-->
							<div class="sow-search-backdrop backdrop-dark hide"><!-- alternate: overlay-dark opacity-3 --></div>

						</form>
						<!-- /SEARCH -->




						<!-- OPTIONS -->
						<ul class="list-inline list-unstyled mb-0 d-flex align-items-end">

							<!-- mobile : search toggler -->
							<li class="list-inline-item mx-1 dropdown d-inline-block d-lg-none">

								<a href="#" class="btn-sow-search-toggler btn btn-sm btn-warning active bg-gradient-warning rounded-circle" aria-label="Search" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
									<i class="fi fi-search m-0"></i>
								</a>

							</li>

							<!-- join us button -->
							<li class="list-inline-item mx-1 dropdown">
								
								<a href="#" class="btn btn-sm btn-pill btn-primary rounded-circle-xs">
									
									<i class="fi fi-plus m-0-xs"></i>
									<span class="px-2 d-none d-lg-inline-block">
										New
									</span>

								</a>

							</li>

						</ul>
						<!-- /OPTIONS -->


					</nav>

				</div>
				<!-- /topbar -->

				<!-- nav -->
				<div class="clearfix">
					
					<!-- line -->
					<hr class="m-0 bg-gray-500 opacity-25">
					
					<div class="container">

						<nav class="navbar navbar-expand-lg navbar-light h-auto justify-content-lg-between justify-content-md-inherit">

							<!-- Menu -->
							<div class="collapse navbar-collapse navbar-animate-fadein" id="navbarMainNav">


								<!-- navbar : mobile menu -->
								<div class="navbar-xs d-none bg-gradient-warning">

									<!-- mobile menu button : close -->
									<button class="navbar-toggler pt-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMainNav" aria-controls="navbarMainNav" aria-expanded="false" aria-label="Toggle navigation">
										<svg width="20" viewBox="0 0 20 20">
											<path d="M 20.7895 0.977 L 19.3752 -0.4364 L 10.081 8.8522 L 0.7869 -0.4364 L -0.6274 0.977 L 8.6668 10.2656 L -0.6274 19.5542 L 0.7869 20.9676 L 10.081 11.679 L 19.3752 20.9676 L 20.7895 19.5542 L 11.4953 10.2656 L 20.7895 0.977 Z"></path>
										</svg>
									</button>

									<!-- 
										Mobile Menu Logo 
										Logo : height: 70px max
									-->
									<a class="navbar-brand" href="index.html">
										<img src="/images/logo/logo_dark.svg" width="110" height="38" alt="...">
									</a>

								</div>
								<!-- /navbar : mobile menu -->



								<!-- navbar : navigation -->
								<ul class="navbar-nav navbar-sm">


									<!-- categories -->
									<li class="nav-item dropdown dropdown-mega">

										<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="mainNavMainCategories">
											Categories
										</a>

										<ul class="dropdown-menu dropdown-menu-hover dropdown-menu-clean" aria-labelledby="mainNavMainCategories">
											<li class="dropdown-item bg-transparent">
												
												<div class="row col-border-md">

													<div class="col-12 col-md-3">

														<h3 class="h6 mb-3">
															Properties : <span class="text-danger">Sale</span>
														</h3>
														<ul class="prefix-link-icon prefix-icon-line">

															<li class="dropdown-item">
																<a class="dropdown-link" href="niche.classifieds-category.html">Houses</a>
															</li>

															<li class="dropdown-item">
																<a class="dropdown-link" href="niche.classifieds-category.html">Apartments</a>
															</li>

															<li class="dropdown-item">
																<a class="dropdown-link" href="niche.classifieds-category.html">Lands &amp; Plots</a>
															</li>

															<li class="dropdown-item">
																<a class="dropdown-link" href="niche.classifieds-category.html">Offices</a>
															</li>

														</ul>


														<h3 class="h6 mb-3 mt-4">
															Properties : <span class="text-danger">Rent</span>
														</h3>
														<ul class="prefix-link-icon prefix-icon-line">

															<li class="dropdown-item">
																<a class="dropdown-link" href="niche.classifieds-category.html">Houses</a>
															</li>

															<li class="dropdown-item">
																<a class="dropdown-link" href="niche.classifieds-category.html">Apartments</a>
															</li>

															<li class="dropdown-item">
																<a class="dropdown-link" href="niche.classifieds-category.html">Lands &amp; Plots</a>
															</li>

															<li class="dropdown-item">
																<a class="dropdown-link" href="niche.classifieds-category.html">Offices</a>
															</li>

														</ul>


														<h3 class="h6 mb-3 mt-4">
															Cars
														</h3>
														<ul class="prefix-link-icon prefix-icon-line">

															<li class="dropdown-item">
																<a class="dropdown-link" href="niche.classifieds-category.html">Sale</a>
															</li>

															<li class="dropdown-item">
																<a class="dropdown-link" href="niche.classifieds-category.html">Commercial Vehicles</a>
															</li>

															<li class="dropdown-item">
																<a class="dropdown-link" href="niche.classifieds-category.html">Spare Parts</a>
															</li>

														</ul>

													</div>

													<div class="col-12 col-md-3">

														<h3 class="h6 mb-3">
															Electronics
														</h3>
														<ul class="prefix-link-icon prefix-icon-line">

															<li class="dropdown-item">
																<a class="dropdown-link" href="niche.classifieds-category.html">TV / Audio / Video</a>
															</li>

															<li class="dropdown-item">
																<a class="dropdown-link" href="niche.classifieds-category.html">Computers &amp; Laptops</a>
															</li>

															<li class="dropdown-item">
																<a class="dropdown-link" href="niche.classifieds-category.html">Camers &amp; Lenses</a>
															</li>

															<li class="dropdown-item">
																<a class="dropdown-link" href="niche.classifieds-category.html">Games / Entertainment</a>
															</li>

															<li class="dropdown-item">
																<a class="dropdown-link" href="niche.classifieds-category.html">Fridges</a>
															</li>

															<li class="dropdown-item">
																<a class="dropdown-link" href="niche.classifieds-category.html">Computer Accesories</a>
															</li>

															<li class="dropdown-item">
																<a class="dropdown-link" href="niche.classifieds-category.html">HDD / Printes / Monitors</a>
															</li>

															<li class="dropdown-item">
																<a class="dropdown-link" href="niche.classifieds-category.html">Washing MAchine</a>
															</li>

														</ul>

														<h3 class="h6 mb-3 mt-4">
															Phone / Mobile
														</h3>
														<ul class="prefix-link-icon prefix-icon-line">

															<li class="dropdown-item">
																<a class="dropdown-link" href="niche.classifieds-category.html">Mobile Phones</a>
															</li>

															<li class="dropdown-item">
																<a class="dropdown-link" href="niche.classifieds-category.html">Tablets</a>
															</li>

															<li class="dropdown-item">
																<a class="dropdown-link" href="niche.classifieds-category.html">Charges / Earphones</a>
															</li>

															<li class="dropdown-item">
																<a class="dropdown-link" href="niche.classifieds-category.html">Accessories</a>
															</li>

														</ul>

													</div>

													<div class="col-12 col-md-3">

														<h3 class="h6 mb-3">
															Services
														</h3>
														<ul class="prefix-link-icon prefix-icon-line">

															<li class="dropdown-item">
																<a class="dropdown-link" href="niche.classifieds-category.html">Electronis &amp; Computer</a>
															</li>

															<li class="dropdown-item">
																<a class="dropdown-link" href="niche.classifieds-category.html">Education</a>
															</li>

															<li class="dropdown-item">
																<a class="dropdown-link" href="niche.classifieds-category.html">Development / Webdesign</a>
															</li>

															<li class="dropdown-item">
																<a class="dropdown-link" href="niche.classifieds-category.html">Health &amp; Beauty</a>
															</li>

															<li class="dropdown-item">
																<a class="dropdown-link" href="niche.classifieds-category.html">Driving / Taxi</a>
															</li>

														</ul>


														<h3 class="h6 mb-3 mt-4">
															Pets
														</h3>
														<ul class="prefix-link-icon prefix-icon-line">

															<li class="dropdown-item">
																<a class="dropdown-link" href="niche.classifieds-category.html">Fishes &amp; Aquarium</a>
															</li>

															<li class="dropdown-item">
																<a class="dropdown-link" href="niche.classifieds-category.html">Pet Food &amp; Accessories</a>
															</li>

															<li class="dropdown-item">
																<a class="dropdown-link" href="niche.classifieds-category.html">Dogs</a>
															</li>

															<li class="dropdown-item">
																<a class="dropdown-link" href="niche.classifieds-category.html">Cats</a>
															</li>

															<li class="dropdown-item">
																<a class="dropdown-link" href="niche.classifieds-category.html">Toys</a>
															</li>

															<li class="dropdown-item">
																<a class="dropdown-link" href="niche.classifieds-category.html">Other Pets</a>
															</li>

														</ul>


													</div>

													<div class="col-12 col-md-3">

														<h3 class="h6 mb-3">
															Fashion
														</h3>
														<ul class="prefix-link-icon prefix-icon-line">

															<li class="dropdown-item">
																<a class="dropdown-link" href="niche.classifieds-category.html">Men</a>
															</li>

															<li class="dropdown-item">
																<a class="dropdown-link" href="niche.classifieds-category.html">Women</a>
															</li>

															<li class="dropdown-item">
																<a class="dropdown-link" href="niche.classifieds-category.html">Kids</a>
															</li>

														</ul>


														<h3 class="h6 mb-3 mt-4">
															Books &amp; Hobbies
														</h3>
														<ul class="prefix-link-icon prefix-icon-line">

															<li class="dropdown-item">
																<a class="dropdown-link" href="niche.classifieds-category.html">Books</a>
															</li>

															<li class="dropdown-item">
																<a class="dropdown-link" href="niche.classifieds-category.html">Gym &amp; Finess</a>
															</li>

															<li class="dropdown-item">
																<a class="dropdown-link" href="niche.classifieds-category.html">Muscial Instruments</a>
															</li>

															<li class="dropdown-item">
																<a class="dropdown-link" href="niche.classifieds-category.html">Sport Equipment</a>
															</li>

															<li class="dropdown-item">
																<a class="dropdown-link" href="niche.classifieds-category.html">Mountain Equipment</a>
															</li>

															<li class="dropdown-item">
																<a class="dropdown-link" href="niche.classifieds-category.html">Other</a>
															</li>

														</ul>

													</div>

												</div>

											</li>
										</ul>

									</li>

									<!-- news -->
									<li class="nav-item dropdown active">

										<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="mainNavNews">
											News
										</a>

										<ul class="dropdown-menu dropdown-menu-clean dropdown-menu-hover prefix-link-icon prefix-icon-dot" aria-labelledby="mainNavNews">
											
											<li class="dropdown-item">
												<a class="dropdown-link" href="#">All News</a>
											</li>

											<li class="dropdown-item">
												<a class="dropdown-link" href="#">Car Market</a>
											</li>

											<li class="dropdown-item">
												<a class="dropdown-link" href="#">Real Estate</a>
											</li>

											<li class="dropdown-item">
												<a class="dropdown-link" href="#">New Launches</a>
											</li>

											<li class="dropdown-item">
												<a class="dropdown-link" href="#">Reviews</a>
											</li>

											<li class="dropdown-item">
												<a class="dropdown-link" href="#">Photos &amp; videos</a>
											</li>

										</ul>

									</li>


									<!-- sell -->
									<li class="nav-item dropdown">

										<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="mainNavSellItem">
											<span>Sell</span>
										</a>

										<div class="dropdown-menu dropdown-menu-clean dropdown-menu-hover w-300 py-0" aria-labelledby="mainNavSellItem">
											
											<a href="#" class="dropdown-item transition-hover-left clearfix text-primary py-4">

												<!-- badge -->
												<span class="badge bg-success-soft position-absolute absolute-top right-0 mx-2">
													FREE
												</span>

												<!-- svg icon -->
												<span class="float-start w--50 me-3">
													<svg width="50" viewBox="0 0 492 492"><path d="M314.629 321.023c.445-2.004-.164-4.094-1.613-5.543l-43.516-43.516c12.785-17.621 10.863-41.922-4.531-57.316-15.395-15.395-39.695-17.316-57.316-4.531l-43.52-43.516c-1.449-1.453-3.539-2.059-5.539-1.617-2.004.445-3.641 1.879-4.34 3.809l-35.824 98.512c-11.809 32.328-30.516 61.699-54.816 86.074-9.816 9.816-9.816 25.734 0 35.555l27.07 27.066c9.816 9.82 25.734 9.82 35.551 0l.5-.488 55.98 55.98c2.344 2.344 6.141 2.344 8.484 0 17.297-17.293 17.297-45.332 0-62.625l-24.941-24.941c14.477-9.234 29.918-16.859 46.051-22.742l98.512-35.824c1.926-.699 3.363-2.336 3.809-4.336zm-80.977-107.344c11.793 0 22.645 6.426 28.313 16.766 5.668 10.34 5.246 22.949-1.102 32.887l-44.582-44.582c5.184-3.324 11.215-5.086 17.371-5.07zm-125.191 197.684c-3.488.012-6.832-1.375-9.293-3.848l-27.066-27.07c-5.133-5.129-5.133-13.449 0-18.582 4.672-4.676 9.156-9.547 13.453-14.605l46.797 46.805c-5.051 4.293-9.918 8.777-14.605 13.453-2.457 2.473-5.801 3.859-9.285 3.848zm74.258 5.992c10.969 10.973 12.586 28.195 3.852 41.02l-51.102-51.102c6.574-5.883 13.473-11.395 20.66-16.508zm25.488-67.449c-23.887 8.73-46.301 21.066-66.453 36.582l-48.625-48.625c15.512-20.156 27.848-42.566 36.578-66.457l32.602-89.66 135.559 135.555zm0 0M298.98 193.5c-18.473-18.508-46.223-24.172-70.465-14.375-3.074 1.238-4.563 4.734-3.324 7.809 1.238 3.074 4.734 4.563 7.809 3.324 19.781-7.969 42.41-3.355 57.492 11.727 15.078 15.078 19.695 37.707 11.727 57.492-1.238 3.07.25 6.566 3.324 7.805s6.566-.25 7.805-3.32c9.797-24.242 4.137-51.992-14.367-70.461zm0 0M334.734 278.438c3.074 1.238 6.57-.25 7.809-3.324 14.414-35.777 6.07-76.703-21.207-103.977-27.273-27.277-68.203-35.621-103.977-21.207-3.074 1.238-4.563 4.734-3.324 7.809 1.238 3.074 4.734 4.563 7.809 3.324 31.313-12.617 67.137-5.313 91.008 18.559 23.871 23.871 31.176 59.695 18.559 91.008-1.238 3.074.25 6.57 3.324 7.809zm0 0M401.625 0c-49.914 0-90.375 40.461-90.375 90.375s40.461 90.375 90.375 90.375 90.375-40.461 90.375-90.375c-.055-49.891-40.484-90.32-90.375-90.375zm0 168.75c-43.285 0-78.375-35.09-78.375-78.375s35.09-78.375 78.375-78.375 78.375 35.09 78.375 78.375c-.051 43.266-35.109 78.324-78.375 78.375zm0 0M434.09 79.879c12.379 0 22.418-10.023 22.438-22.406.016-12.379-9.996-22.434-22.375-22.469s-22.449 9.965-22.5 22.344l-27.824 16.066c-8.98-7.773-22.461-7.203-30.754 1.301-8.289 8.504-8.516 21.996-.512 30.773 8 8.777 21.457 9.797 30.691 2.328l28.523 17.875c1.176 11.082 10.297 19.625 21.434 20.07 11.133.445 20.91-7.34 22.969-18.293 2.055-10.953-4.23-21.758-14.77-25.379-10.539-3.625-22.141 1.027-27.254 10.93l-23.906-14.98c1.711-4.707 1.797-9.855.242-14.617l24.531-14.168c4.09 6.602 11.301 10.621 19.066 10.625zm0-32.871c5.762 0 10.434 4.672 10.434 10.438 0 5.762-4.672 10.434-10.438 10.434-5.762 0-10.438-4.672-10.438-10.438.008-5.762 4.676-10.43 10.441-10.434zm-64.93 53.805c-5.762 0-10.434-4.676-10.434-10.438 0-5.766 4.672-10.438 10.438-10.438 5.762 0 10.438 4.672 10.438 10.438-.008 5.762-4.676 10.43-10.441 10.438zm64.93 12.059c5.762 0 10.434 4.672 10.434 10.438s-4.672 10.438-10.438 10.438c-5.766 0-10.438-4.676-10.438-10.438.008-5.762 4.676-10.434 10.441-10.438zm0 0M401.625 311.25c-49.914 0-90.375 40.461-90.375 90.375s40.461 90.375 90.375 90.375 90.375-40.461 90.375-90.375c-.055-49.891-40.484-90.32-90.375-90.375zm0 168.75c-43.285 0-78.375-35.09-78.375-78.375s35.09-78.375 78.375-78.375 78.375 35.09 78.375 78.375c-.051 43.266-35.109 78.324-78.375 78.375zm0 0M438.73 396.523l-49.148-30.402c-1.852-1.145-4.176-1.195-6.078-.137-1.898 1.059-3.078 3.063-3.078 5.238v60.801c0 2.176 1.18 4.18 3.078 5.238 1.902 1.059 4.227 1.004 6.078-.141l49.148-30.398c1.77-1.094 2.844-3.023 2.844-5.105 0-2.078-1.074-4.008-2.844-5.102zm-46.305 24.734v-39.266l31.742 19.633zm0 0M90.375 180.75c49.914 0 90.375-40.461 90.375-90.375s-40.461-90.375-90.375-90.375-90.375 40.461-90.375 90.375c.055 49.891 40.484 90.32 90.375 90.375zm0-168.75c43.285 0 78.375 35.09 78.375 78.375s-35.09 78.375-78.375 78.375-78.375-35.09-78.375-78.375c.051-43.266 35.109-78.324 78.375-78.375zm0 0M53.5 126.258h42.938c8.836-.012 15.992-7.168 16-16v-.953l21.926 12.031c1.859 1.02 4.117.984 5.941-.098 1.828-1.078 2.945-3.043 2.945-5.164v-51.398c0-2.121-1.121-4.082-2.945-5.164-1.824-1.078-4.082-1.117-5.941-.098l-21.926 12.035v-.957c-.008-8.832-7.164-15.988-16-16h-42.938c-8.832.012-15.988 7.168-16 16v39.766c.012 8.832 7.168 15.988 16 16zm77.75-51.445v31.125l-18.813-10.32v-10.48zm-81.75-4.32c0-2.207 1.789-4 4-4h42.938c2.211 0 4 1.793 4 4v39.766c0 2.207-1.789 4-4 4h-42.938c-2.211 0-4-1.793-4-4zm0 0"/></svg>
												</span>

												Create Ad

												<span class="d-block text-muted text-truncate fs-6">
													Sale your item
												</span>
											</a>

											<div class="dropdown-divider"></div>
											
											<a href="#" class="dropdown-item transition-hover-left clearfix text-primary py-4">

												<!-- svg icon -->
												<span class="float-start w--50 me-3">
													<svg width="50" viewBox="0 0 480.008 480.008"><path d="M56 400.004c-13.255 0-24 10.745-24 24s10.745 24 24 24 24-10.745 24-24-10.745-24-24-24zm0 32c-4.418 0-8-3.582-8-8s3.582-8 8-8 8 3.582 8 8-3.582 8-8 8zM474.498 338.774c-6.984-11.645-19.567-18.77-33.146-18.77h-1.688c-6.342.004-12.586 1.564-18.184 4.544l-61.48 32.792v-109.336h28c24.301 0 44-19.699 44-44s-19.699-44-44-44h-172c-22.091 0-40-17.909-40-40s17.909-40 40-40h28l45.6 60.8c1.511 2.014 3.882 3.2 6.4 3.2h176c4.418 0 8-3.582 8-8v-128c0-4.418-3.582-8-8-8h-176c-2.518 0-4.889 1.186-6.4 3.2l-45.6 60.8h-28c-30.928 0-56 25.072-56 56s25.072 56 56 56h172c15.464 0 28 12.536 28 28s-12.536 28-28 28h-28v-32c0-4.418-3.582-8-8-8h-224c-4.418 0-8 3.582-8 8v120c-6.203 2.166-12.215 4.842-17.976 8h-102.024v16h96v120h-96v16h303.136c7.252 0 14.367-1.972 20.584-5.704l137.512-82.504c18.305-10.979 24.244-34.717 13.266-53.022zm-162.399-244.143c12.497-4.418 19.046-18.131 14.627-30.627-4.418-12.497-18.131-19.046-30.627-14.627-6.835 2.416-12.211 7.793-14.627 14.627h-17.472l36-48h164v112h-164l-36-48h17.472c4.418 12.497 18.131 19.046 30.627 14.627zm-16.099-22.627c0-4.418 3.582-8 8-8s8 3.582 8 8-3.582 8-8 8-8-3.582-8-8zm-72 136h32v32h-32v-32zm-88 0h72v40c0 4.418 3.582 8 8 8h48c4.418 0 8-3.582 8-8v-40h72v157.864l-13.104 6.984c4.887-19.272-6.775-38.857-26.048-43.744-2.892-.733-5.864-1.104-8.848-1.104h-77.912c-25.053-13.657-54.117-18.053-82.088-12.416v-107.584zm317 170.072l-137.512 82.504c-3.731 2.24-8 3.424-12.352 3.424h-191.136v-123.2c31.576-16.149 69.159-15.329 100 2.184 1.221.685 2.6 1.036 4 1.016h80c11.046 0 20 8.954 20 20s-8.954 20-20 20h-72c-4.418 0-8 3.582-8 8s3.582 8 8 8h88c1.314.002 2.608-.319 3.768-.936l113.24-60.4c3.281-1.746 6.94-2.661 10.656-2.664h1.688c12.508-.001 22.649 10.138 22.65 22.646 0 7.959-4.176 15.333-11.002 19.426zM431.917 84.266c-.623-6.087-4.325-11.429-9.805-14.15l-21.056-10.528c-.937-.458-1.325-1.589-.867-2.525.312-.639.956-1.048 1.667-1.059h30.144v-16h-16v-8h-16v8.192c-9.793 1.002-16.919 9.753-15.917 19.546.623 6.087 4.325 11.429 9.805 14.15l21.056 10.528c.937.458 1.325 1.589.867 2.525-.312.639-.956 1.048-1.667 1.059h-30.144v16h16v8h16v-8.192c9.793-1.002 16.919-9.753 15.917-19.546z"/></svg>
												</span>

												How to Sell

												<span class="d-block text-muted text-truncate fs-6">
													Guide to get started
												</span>
											</a>

										</div>

									</li>


									<!-- social icons : mobile only -->
									<li class="nav-item d-block d-sm-none text-center mb-4">

										<h3 class="h6 text-muted">Follow Us</h3>

										<a href="#" class="btn btn-sm btn-facebook transition-hover-top mb-2 rounded-circle text-white" rel="noopener">
											<i class="fi fi-social-facebook"></i> 
										</a>

										<a href="#" class="btn btn-sm btn-twitter transition-hover-top mb-2 rounded-circle text-white" rel="noopener">
											<i class="fi fi-social-twitter"></i> 
										</a>

										<a href="#" class="btn btn-sm btn-linkedin transition-hover-top mb-2 rounded-circle text-white" rel="noopener">
											<i class="fi fi-social-linkedin"></i> 
										</a>

										<a href="#" class="btn btn-sm btn-youtube transition-hover-top mb-2 rounded-circle text-white" rel="noopener">
											<i class="fi fi-social-youtube"></i> 
										</a>

									</li>

								</ul>
								</ul>
								<!-- /navbar : navigation -->

							</div>


							<!-- desktop social -->
							<div class="float-end d-none d-lg-inline-block d-xl-inline-block d-xl-none">

								<a href="#" class="btn btn-sm btn-facebook transition-hover-top rounded-circle p-2 my-0 me-1 ms-1" rel="noopener" aria-label="facebook page">
									<i class="fi fi-social-facebook"></i> 
								</a>

								<a href="#" class="btn btn-sm btn-twitter transition-hover-top rounded-circle p-2 my-0 me-1 ms-1" rel="noopener" aria-label="twitter page">
									<i class="fi fi-social-twitter"></i> 
								</a>

								<a href="#" class="btn btn-sm btn-linkedin transition-hover-top rounded-circle p-2 my-0 me-1 ms-1" rel="noopener" aria-label="linkedin page">
									<i class="fi fi-social-linkedin"></i> 
								</a>

							</div>
							<!-- /desktop social -->

						</nav>

					</div>

				</div>
				<!-- /nav -->

			</header>
			<!-- /Header -->