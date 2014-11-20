<!-- jQuery -->
{{HTML::script('js/vendor/jquery.min.js')}}
<!-- UI Toolkit -->
{{HTML::script('js/flat-ui-pro.min.js')}}
<!-- Main App Scripts -->
{{HTML::script('js/app.js')}}

<script>
	$('#flash-overlay-modal').modal();
	$('.comment-form').on('keydown', function(e) {
		if (e.keyCode == 13) {
			e.preventDefault();
			$(this).submit();
		}
	});
</script>
