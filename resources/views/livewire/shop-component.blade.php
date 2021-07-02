
	<div class="breadcrumb_section bg_gray page-title-mini">
	    <div class="container"><!-- STRART CONTAINER -->
	        <div class="row align-items-center">
	        	<div class="col-md-6">
	                <div class="page-title">
	            		<h1>Shop Left Sidebar</h1>
	                </div>
	            </div>
	            <div class="col-md-6">
	                <ol class="breadcrumb justify-content-md-end">
	                    <li class="breadcrumb-item"><a href="#">Home</a></li>
	                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
	                    <li class="breadcrumb-item active">Shop Left Sidebar</li>
	                </ol>
	            </div>
	        </div>
	    </div>
	</div>

	<div class="main_content">


	<div class="section">
	<div class="container">
	<div class="row">
	<div class="col-lg-9">
		<div class="row align-items-center mb-4 pb-1">
	        <div class="col-12">
	            <div class="product_header">
	                <div class="product_header_left">
	                    <div class="custom_select">
	                        <select class="form-control form-control-sm">
	                            <option value="order">Default sorting</option>
	                            <option value="popularity">Sort by popularity</option>
	                            <option value="date">Sort by newness</option>
	                            <option value="price">Sort by price: low to high</option>
	                            <option value="price-desc">Sort by price: high to low</option>
	                        </select>
	                    </div>
	                </div>
	                <div class="product_header_right">
	                	<div class="products_view">
	                        <a href="javascript:Void(0);" class="shorting_icon grid active"><i class="ti-view-grid"></i></a>
	                        <a href="javascript:Void(0);" class="shorting_icon list"><i class="ti-layout-list-thumb"></i></a>
	                    </div>
	                    <div class="custom_select">
	                        <select class="form-control form-control-sm">
	                            <option value="">Showing</option>
	                            <option value="9">9</option>
	                            <option value="12">12</option>
	                            <option value="18">18</option>
	                        </select>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div> 
        
        <div class="row shop_container">
@foreach($products as $product)

<div class="col-md-4 col-6">
                <div class="product">
                    <div class="product_img">
                        <a href="shop-product-detail.html">
                            <img src="{{asset('storage')}}/{{$product->cover_image}}" alt="{{$product->cover_image}}">
                        </a>
                        <div class="product_action_box">
                            <ul class="list_none pr_action_btn">
                                <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                <li><a href="#"><i class="icon-heart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product_info">
                        <h6 class="product_title"><a href="{{route('product.details',$product->id)}}">{{$product->name}}</a></h6>
                        <div class="product_price">
                            <span class="price">{{$product->reguler_price}}</span>
                            <del>{{$product->sale_price}}</del>
                            <div class="on_sale">
                                <span>35% Off</span>
                            </div>
                        </div>
                        <div class="rating_wrap">
                            <div class="rating">
                                <div class="product_rate" style="width:80%"></div>
                            </div>
                            <span class="rating_num">(21)</span>
                        </div>
                        <div class="pr_desc">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                        </div>
                        <div class="pr_switch_wrap">
                            <div class="product_color_switch">
                                <span class="active" data-color="#87554B"></span>
                                <span data-color="#333333"></span>
                                <span data-color="#DA323F"></span>
                            </div>
                        </div>
                        <div class="list_product_action_box">
                            <ul class="list_none pr_action_btn">
                                <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                <li><a href="shop-view.html" class="popup-ajax"><i class="icon-eye"></i></a></li>
                                <li><a href="#"><i class="icon-heart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

@endforeach
</div>


		<div class="row">
	        <div class="col-12">
	            <ul class="pagination mt-3 justify-content-center pagination_style1">
	                <li class="page-item active"><a class="page-link" href="#">1</a></li>
	                <li class="page-item"><a class="page-link" href="#">2</a></li>
	                <li class="page-item"><a class="page-link" href="#">3</a></li>
	                <li class="page-item"><a class="page-link" href="#"><i class="linearicons-arrow-right"></i></a></li>
	            </ul>
	        </div>
	    </div>
	</div>
	<div class="col-lg-3 order-lg-first mt-4 pt-2 mt-lg-0 pt-lg-0">
		<div class="sidebar">
	    	<div class="widget">
	            <h5 class="widget_title">Categories</h5>
	            <ul class="widget_categories">
	                <li><a href="#"><span class="categories_name">Women</span><span class="categories_num">(9)</span></a></li>
	                <li><a href="#"><span class="categories_name">Top</span><span class="categories_num">(6)</span></a></li>
	                <li><a href="#"><span class="categories_name">T-Shirts</span><span class="categories_num">(4)</span></a></li>
	                <li><a href="#"><span class="categories_name">Men</span><span class="categories_num">(7)</span></a></li>
	                <li><a href="#"><span class="categories_name">Shoes</span><span class="categories_num">(12)</span></a></li>
	            </ul>
	        </div>
	        <div class="widget">
	        	<h5 class="widget_title">Filter</h5>
	            <div class="filter_price">
	                 <div id="price_filter" data-min="0" data-max="500" data-min-value="50" data-max-value="300" data-price-sign="$"></div>
	                 <div class="price_range">
	                     <span>Price: <span id="flt_price"></span></span>
	                     <input type="hidden" id="price_first">
	                     <input type="hidden" id="price_second">
	                 </div>
	             </div>
	        </div>
	        <div class="widget">
	        	<h5 class="widget_title">Brand</h5>	
	            <ul class="list_brand">
	                <li>
	                    <div class="custome-checkbox">
	                        <input class="form-check-input" type="checkbox" name="checkbox" id="Arrivals" value="">
	                        <label class="form-check-label" for="Arrivals"><span>New Arrivals</span></label>
	                    </div>
	                </li>
	                <li>
	                    <div class="custome-checkbox">
	                        <input class="form-check-input" type="checkbox" name="checkbox" id="Lighting" value="">
	                        <label class="form-check-label" for="Lighting"><span>Lighting</span></label>
	                    </div>
	                </li>
	                <li>
	                    <div class="custome-checkbox">
	                        <input class="form-check-input" type="checkbox" name="checkbox" id="Tables" value="">
	                        <label class="form-check-label" for="Tables"><span>Tables</span></label>
	                    </div>
	                </li>
	                <li>
	                    <div class="custome-checkbox">
	                        <input class="form-check-input" type="checkbox" name="checkbox" id="Chairs" value="">
	                        <label class="form-check-label" for="Chairs"><span>Chairs</span></label>
	                    </div>
	                </li>
	                <li>
	                    <div class="custome-checkbox">
	                        <input class="form-check-input" type="checkbox" name="checkbox" id="Accessories" value="">
	                        <label class="form-check-label" for="Accessories"><span>Accessories</span></label>
	                    </div>
	                </li>
	            </ul>
	        </div>
	        <div class="widget">
	        	<h5 class="widget_title">Size</h5>
	            <div class="product_size_switch">
	                <span>xs</span>
	                <span>s</span>
	                <span>m</span>
	                <span>l</span>
	                <span>xl</span>
	                <span>2xl</span>
	                <span>3xl</span>
	            </div>
	        </div>
	        <div class="widget">
	        	<h5 class="widget_title">Color</h5>
	            <div class="product_color_switch">
	                <span data-color="#87554B"></span>
	                <span data-color="#333333"></span>
	                <span data-color="#DA323F"></span>
	                <span data-color="#2F366C"></span>
	                <span data-color="#B5B6BB"></span>
	                <span data-color="#B9C2DF"></span>
	                <span data-color="#5FB7D4"></span>
	                <span data-color="#2F366C"></span>
	            </div>
	        </div>
	        
	    </div>
	</div>
	</div>
	</div>
	</div>
	<!-- END SECTION SHOP -->

	<!-- START SECTION SUBSCRIBE NEWSLETTER -->
	<div class="section bg_default small_pt small_pb">
	<div class="container">	
	<div class="row align-items-center">	
	<div class="col-md-6">
	    <div class="heading_s1 mb-md-0 heading_light">
	        <h3>Subscribe Our Newsletter</h3>
	    </div>
	</div>
	<div class="col-md-6">
	    <div class="newsletter_form">
	        <form>
	            <input type="text" required="" class="form-control rounded-0" placeholder="Enter Email Address">
	            <button type="submit" class="btn btn-dark rounded-0" name="submit" value="Submit">Subscribe</button>
	        </form>
	    </div>
	</div>
	</div>
	</div>
	</div>
	</div>