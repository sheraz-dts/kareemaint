		
    	   </div>
        </div>
            
        <footer>
            <div id="inner-footer" class="vertical-nav">
                <div class="container">
                    <div class="row">
                        <?php dynamic_sidebar('footer1'); ?>

                        <div class="col-xs-12 text-center">
                            <p><?php _e('Design by <a href="https://github.com/nicolas-van">@nicolas-van</a>', 'simple-bootstrap') ?></p>
                            <p><?php _e("Powered by WordPress", "simple-bootstrap"); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

	<?php wp_footer(); // js scripts are inserted using this function ?>
    
    <!--<script type="text/jscript" src="js/jquery-1.9.0.min.js"></script>-->
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/jquery-1.10.2.js"></script>
	
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    
	<script>
    	$(function() {
    	$( ".datepicker" ).datepicker();
    	});
    </script>
	
</body>

</html>