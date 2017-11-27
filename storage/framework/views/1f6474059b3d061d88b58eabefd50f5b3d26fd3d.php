<div class="sidebar" data-background-color="black" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->


	<!-- SIDE NAVBAR -->
    	<div class="sidebar-wrapper">
            <div class="logo">
				<a href="index.php"><center><img src="assets/img/logo1.png" class="img-circle" alt="Cover and Pages" width="200" height="200"></center></a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="index.php">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li align = 'center'> CUSTOMERS </li>

                <!-- ORDERS -->
				<li> <!-- Customer Order-->
                    <a href="create-order.php">
                        <i class="ti-shopping-cart"></i>
                        <p>Create Order</p>
                    </a>
                </li>
                
                <!-- QUOTES -->
                <li> <!-- owner -->
                    <a href="confirm-quotation.php">
                        <i class="ti-file"></i>
                        <p>Confirm Quotations</p>
                    </a>
                </li>

                <!-- INVOICES -->
                <li>
                    <a href="confirm-quotation.php">
                        <i class="ti-file"></i>
                        <p>Check Invoice</p>
                    </a>
                </li>

                <!-- ORDER HISTORY -->
                <li>
                    <a href="confirm-quotation.php">
                        <i class="ti-file"></i>
                        <p>Order History</p>
                    </a>
                </li>
                
                
                <li> <!-- owner -->
                    <a href="manage-quotation.php">
                        <i class="ti-file"></i>
                        <p>Manage Quotations</p>
                    </a>
                </li>


                <!-- QUOTES -->

                <li align = 'center'> SALES AGENT </li>

                <li> <!-- Sales Agent Order-->
                    <a href="create-order.php">
                        <i class="ti-shopping-cart"></i>
                        <p>Manage Orders</p>
                    </a>
                </li>


                <li>
                    <a href="orderDetails.php">
                        <i class="ti-receipt"></i>
                        <p>Order History</p>
                    </a>
                </li>
				<li <!--class="active-pro"-->
                    <a href="login.php">
                        <i class="ti-power-off"></i>
                        <p>Log out</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>