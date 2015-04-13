(function(window, document, $){
	$(document).ready(function() {

    // Enable Materialize select
		$('select').material_select();

    // File Input Path
    $('.file-field').each(function() {
      var path_input = $(this).find('input.file-path');
      $(this).find('input[type="file"]').change(function () {
        path_input.val($(this)[0].files[0].name);
        path_input.trigger('change');
      });
    });

    // Reenable primary link functionality
    $('.primary a, .secondary a').on('click', function() {
      window.location = $(this).attr('href');
    });
	});
})(window, document, jQuery);
