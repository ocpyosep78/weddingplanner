<?php include('header.php'); ?>
                <script type="text/javascript" src="<?= $site_url; ?>resources/jcalander/js/jquery-1.11.1.js"></script>
		<script type="text/javascript" src="<?= $site_url; ?>resources/jcalander/js/jquery-ui-1.11.1.js"></script>
		
		
		<!-- loads mdp -->
		<script type="text/javascript" src="<?= $site_url; ?>resources/jcalander/jquery-ui.multidatespicker.js"></script>
		
		<!-- mdp demo code -->
		<script type="text/javascript">
		<!--
			var latestMDPver = $.ui.multiDatesPicker.version;
			var lastMDPupdate = '2014-09-19';
			
			$(function() {
				// Version //
				//$('title').append(' v' + latestMDPver);
				$('.mdp-version').text('v' + latestMDPver);
				$('#mdp-title').attr('title', 'last update: ' + lastMDPupdate);
				
				// Documentation //
				$('i:contains(type)').attr('title', '[Optional] accepted values are: "allowed" [default]; "disabled".');
				$('i:contains(format)').attr('title', '[Optional] accepted values are: "string" [default]; "object".');
				$('#how-to h4').each(function () {
					var a = $(this).closest('li').attr('id');
					$(this).wrap('<'+'a href="#'+a+'"></'+'a>');
				});
				$('#demos .demo').each(function () {
					var id = $(this).find('.box').attr('id') + '-demo';
					$(this).attr('id', id)
						.find('h3').wrapInner('<'+'a href="#'+id+'"></'+'a>');
				});
				
				// Run Demos
				$('.demo .code').each(function() {
					eval($(this).attr('title','NEW: edit this code and test it!').text());
					this.contentEditable = true;
				}).focus(function() {
					if(!$(this).next().hasClass('test'))
						$(this)
							.after('<button class="test">test</button>')
							.next('.test').click(function() {
								$(this).closest('.demo').find('.hasDatepicker').multiDatesPicker('destroy');
								eval($(this).prev().text());
								$(this).remove();
							});
				});
			});
		// -->
		</script>
		
		
		<script type="text/javascript" src="<?= $site_url; ?>resources/jcalander/js/prettify.js"></script>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Bookings</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                   <!-- middle content start -->
                   
                   
                   <div id="demos">
				
				
					
					
				
				
					<li class="demo full-row">
						<h3>Full year</h3>
						<div id="full-year" class="box"></div>
						
						<div class="code-box">
							<h4>Code used</h4>
							<pre class="code prettyprint">
var today = new Date();
var y = today.getFullYear();
$('#full-year').multiDatesPicker({
	addDates: ['10/14/'+y, '02/19/'+y, '01/14/'+y, '11/16/'+y],
	numberOfMonths: [3,4],
	defaultDate: '9/1/'+y,
        altField: '#altField'
});</pre>
						</div>
					</li>
					
				
				<div class="clear"></div>
                                <input type='text' name='altField' id='altField'>
			</div>
                   
                   
                   
                   <!-- middle content end -->
                </div>
                <!-- /.col-lg-12 -->
                
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    <?php include('footer.php'); ?>