<div class="sidebar" data-background-color="black" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

<!-- SIDE NAVBAR -->
    	<div class="sidebar-wrapper">
            <div class="logo">
							<center><img src="img/logo1.png" class="img-circle" alt="Cover & Pages" width="150" height="100"></center>
								<a href="/" class="simple-text">
                    Cover & Pages
                </a>
            </div>

        <?php if(!(Request::is('login')) && !(Request::is('register'))): ?>
            <ul class="nav">
                <li class = "<?php echo e(Request:: is('/') ? 'active' : ''); ?>">
                    <a href="/">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li align = 'center'><strong> Customer </strong></li>
				
                <li class = "<?php echo e(Request:: is('create-order') ? 'active' : ''); ?>">
                    <a href="/create-order">
                        <i class="ti-shopping-cart"></i>
                        <p>Create Order</p>
                    </a>
                </li>

                <li class = "<?php echo e(Request:: is('confirm-quotation') ? 'active' : ''); ?>">
                    <a href="/confirm-quotation">
                        <i class="ti-check-box"></i>
                        <p>Confirm Quotation</p>
                    </a>
                </li>

                <li class = "<?php echo e(Request:: is('view-invoice') ? 'active' : ''); ?>">
                    <a href="/view-invoice">
                        <i class="ti-receipt"></i>
                        <p>View Invoice</p>
                    </a>
                </li>
				
                <li class = "<?php echo e(Request:: is('orderDetails.html') ? 'active' : ''); ?>">
                    <a href="orderDetails.html">
                        <i class="ti-time"></i>
                        <p>Order History</p>
                    </a>
                </li>

                <li align = 'center'><strong> Sales Agent </strong></li>

                <li class = "<?php echo e(Request:: is('create-order') ? 'active' : ''); ?>">
                    <a href="/create-order">
                        <i class="ti-shopping-cart"></i>
                        <p>Manage Orders</p>
                    </a>
                </li>


                <li class = "<?php echo e(Request:: is('view-invoice') ? 'active' : ''); ?>">
                    <a href="/view-invoice">
                        <i class="ti-receipt"></i>
                        <p>Update Invoices</p>
                    </a>
                </li>
				
                <li class = "<?php echo e(Request:: is('orderDetails.html') ? 'active' : ''); ?>">
                    <a href="orderDetails.html">
                        <i class="ti-time"></i>
                        <p>Transactional Logs</p>
                    </a>
                </li>

                <li align = 'center'><strong> Owner </strong></li>
                
                <li class = "<?php echo e(Request:: is('manage-quotation') ? 'active' : ''); ?>">
                    <a href="/manage-quotation">
                        <i class="ti-file"></i>
                        <p>Manage Quotations</p>
                    </a>
                </li>

                <li class = "<?php echo e(Request:: is('orderDetails.html') ? 'active' : ''); ?>">
                    <a href="orderDetails.html">
                        <i class="ti-time"></i>
                        <p>Transactional Logs</p>
                    </a>
                </li>
				
                <li class="active-pro">
                    <a href="/login">
                        <i class="ti-power-off"></i>
                        <p>Log out</p>
                    </a>
                </li>
            </ul>
            <?php endif; ?>

            <?php if(Request::is('login') || Request::is('register')): ?>
            <ul class="nav">
                <li class = "<?php echo e(Request:: is('login') ? 'active' : ''); ?>">
                    <a href="login">
                        <i class="ti-user"></i>
                        <p>Log-in</p>
                    </a>
                </li>
            

                <li class = "<?php echo e(Request:: is('register') ? 'active' : ''); ?>">
                    <a href="register">
                        <i class="ti-file"></i>
                        <p>Create Account</p>
                    </a>
                </li>
            </ul>
        <?php endif; ?>

        


    	</div>
    </div>