	<!-- footer content -->
        <footer>
          <div class="pull-right">
            Express Group
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
<!-- 	<script src="<?php //echo base_url('/assets/js/pnotify.js');?>"></script>
	<script src="<?php //echo base_url('/assets/js/pnotify.buttons.js');?>"></script>
	<script src="<?php //echo base_url('/assets/js/pnotify.nonblock.js');?>"></script> -->
    <?php
		$message = get_message();
		if($message){
			echo '<script>new PNotify({
			  type: "'.$message['type'].'",
			  text: "'.$message['message'].'",
			  nonblock: {
				  nonblock: true
			  },
			  addclass: "green",
			  styling: "bootstrap3"
			});</script>';	
		}
	?>
  </body>
</html>