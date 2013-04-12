
	<!--end container-->
	<script type="text/javascript" src="<?php echo PUBLIC_JS_PATH ?>jquery.js"></script>
	<script type="text/javascript" src="<?php echo PUBLIC_JS_PATH ?>bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo PUBLIC_JS_PATH ?>ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="<?php echo PUBLIC_JS_PATH ?>scriptbreaker-multiple-accordion-1.js"></script>
	<script type="text/javascript" src="<?php echo PUBLIC_JS_PATH ?>jquery.tinyscrollbar.min.js"></script>
	<script language="JavaScript">
		$(document).ready(function() {
			$("#left_menu").accordion({
				accordion:false,
				speed: 300,
				closedSign: '<i class="pull-right icon-angle-right"></i>',
				openedSign: '<i class="pull-right icon-angle-down"></i>'
			});
			$("#left_menu").find('ul').css('display', 'none');
			
			$('* html div#content').tinyscrollbar();
		});
	</script>
</body>
</html>