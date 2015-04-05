    <div id="footer">
		<p>Copyright &copy; <?php echo date('Y')?> Geekhub</p>
	</div>
</div>
	<?php wp_footer(); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url') ?>/js/bootstrap.min.js"></script>
<script type="text/javascript">
   $(document).ready(function() {
     $('#my_carousel').carousel({
       interval: 8000
     })
   });
</script>
</body>
</html>