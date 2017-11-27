<?php if(!(Request::is('login')) && !(Request::is('register'))): ?>

<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        

						<li>
                        <?php if(!(Request::is('profile'))): ?>
                            <a href="/profile">
								<i class="ti-user"></i>
								<p>FirstName LastName</p>
                            </a>
                        <?php endif; ?>

                        <?php if(Request::is('profile')): ?>
                            <a href="/login">
								<i class="ti-power-off"></i>
								<p>Log Out</p>
                            </a>
                        <?php endif; ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
<?php endif; ?>


<?php if(Request::is('login') || Request::is('register')): ?>
<!-- LOG-IN -->
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">COVER & PAGES</a>
                </div>
                <div class="collapse navbar-collapse">
									<ul class="nav navbar-nav navbar-right">
													<li>
													<a href="#">
													About
													</a>
											</li>
									</ul>

                </div>
            </div>
        </nav>
<?php endif; ?>
