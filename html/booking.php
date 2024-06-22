<?php include 'top.php'; ?>
	<div class="main-wrapper">
	<?php include 'passenger-header.php';?>
		
		<!-- Breadscrumb Section -->
		<div class="breadcrumb-bar">
			<div class="container">
				<div class="row align-items-center text-center">
		    		<div class="col-md-12 col-12">
			    	    <h2 class="breadcrumb-title">Order Confirmation</h2>						
					</div>
				</div>
			</div>
		</div>
		<!-- /Breadscrumb Section -->
        
        <section class="order-confirmation">
            <div class="container">
				<div class="confirm-order">
					<div class="section-title">
						<h3>Order Confirmation</h3>
						<h5>Order Total : <span>Rs.2250.00</span></h5>
					</div>
					<div class="booking-details order-confirm-box">
						<div class="row">
							<div class="col-lg-6">
								<div class="confirmation-title">
									<h4>Car Details</h4>
									<a href="javascript:void(0)">Edit</a>
								</div>
								<div class="order-car">
									<span><img src="assets/img/detail-smallcar-img-2.jpg" alt="car"></span>
									<h5>Toyota Vitz<span>Rs.2250 | Driver: Ramesh Kumar</span></h5>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="confirmation-title">
									<h4>Extra Service</h4>
									<a href="javascript:void(0)">Edit</a>
								</div>
								<ul class="address-info">
									<li>Baby Seat : Rs.200</li>
								</ul>
							</div>
							<div class="col-lg-6">
								<div class="confirmation-title">
									<h4>Payment details</h4>
									<a href="javascript:void(0)">Edit</a>
								</div>
								<div class="visa-card">
									<a href="#"><img src="assets/img/visa.svg" alt="Visa"></a>
									<h6>Visa card ending in 1245</h6>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="confirmation-title">
									<h4>Pickup Location & Date</h4>
									<a href="javascript:void(0)">Edit</a>
								</div>
								<ul class="address-info">
									<li>No-15, Trinco Road, Batticaloa</li>
									<li>29/01/2024 05:21:41</li>
								</ul>
							</div>
							<div class="col-lg-6">
								<div class="confirmation-title">
									<h4>Your Information</h4>
									<a href="javascript:void(0)">Edit</a>
								</div>
								<ul class="address-info">
									<li>Navarasan</li>
									<li><a href="#" class="__cf_email__">navarasan84@gmail.com</a></li>
									<li>0715646366</li>
									<li>No-15, Trinco Road, Batticaloa</li>
								</ul>
							</div>
							<div class="col-lg-6">
								<div class="confirmation-title">
									<h4>Drop Off Location</h4>
									<a href="javascript:void(0)">Edit</a>
								</div>
								<ul class="address-info mb-0">
									<li>No-43, Bailey Road, Batticaloa</li>
									<li>29/01/2024 05:50:41</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="place-order-btn">
						<a href="#" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#pages_edit"><i class="feather-bar-chart me-2"></i>Place Order</a>
					</div>
				</div>
            </div>
        </section>

		<!-- Modal -->
		<div class="modal custom-modal fade check-availability-modal payment-success-modal" id="pages_edit" role="dialog">
			<div class="modal-dialog modal-dialog-centered modal-md">
				<div class="modal-content">
					<div class="modal-body">
						<div class="payment-success">
							<span class="check"><i class="fa-solid fa-check-double"></i></span>
							<h5>Order Confirmed</h5>
							<p>You Payment has been successfully done.
								Trasaction id :<span> #5064164454</span>
							</p>
						</div>						
					</div>
				</div>
			</div>
		</div>
		<!-- /Modal -->
	
	<?php include 'footer.php'?>
				
	</div>

	<?php include 'script.php'?>
</body>
</html>