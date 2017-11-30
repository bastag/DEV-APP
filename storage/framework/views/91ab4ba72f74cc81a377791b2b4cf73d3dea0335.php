<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <!-- Scripts -->
    <script src = "<?php echo e(asset('js/app.js')); ?>"></script>
    <script src = "<?php echo e(asset('js/bootstrap.js')); ?>"></script>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="css/themify-icons.css" rel="stylesheet">

     <!--   Core JS Files   -->
    <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="js/demo.js"></script>


    <!-- predefined -->
	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	<?php if(Request::is('/')): ?>
			$.notify({
            	icon: 'ti-gift',
            	message: "Welcome to Cover & Pages! :)"
            },{
                type: 'success',
                timer: 4000
            });
			<?php endif; ?>
			
			// Quantity buttons
						$(".incr-btn").on("click", function (e) {
						    var $button = $(this);
						    var oldValue = $button.parent().find('.quantity').val();
						    $button.parent().find('.incr-btn[data-action="decrease"]').removeClass('inactive');
						    if ($button.data('action') == "increase") {
						        var newVal = parseFloat(oldValue) + 1;
						    } else {
						        // Don't allow decrementing below 1
						        if (oldValue > 1) {
						            var newVal = parseFloat(oldValue) - 1;
						        } else {
						            newVal = 1;
						            $button.addClass('inactive');
						        }
						    }
						    $button.parent().find('.quantity').val(newVal);
						    e.preventDefault();

                $('#myModal').on('shown.bs.modal', function () {
                  $('#myInput').trigger('focus')
                })
						});


    	});
	</script>

</head>
<body>

<div class="wrapper">
  <?php if(!(Request::is('login')) && !(Request::is('register'))): ?>
        <?php echo $__env->make('templates.sideNavPane', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<!-- MAIN NAVBAR -->


    <div class="main-panel">
    <?php endif; ?>
		<div id="app">
			<?php echo $__env->make('templates.mainNavPane', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<?php echo $__env->make('templates.status', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<?php echo $__env->yieldContent('mainPane'); ?>
			<?php echo $__env->make('templates.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</div>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
	</div>
</div>
</body>

</html>
