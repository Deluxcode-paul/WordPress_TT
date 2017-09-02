(function($) {
 $('.add_favourite').click(function () {

     var id = $(this).data('id');

     $.ajax({
        url: favourites.ajaxurl,
        type: 'post',
        data: {
            action: 'add_to_favourites',
            id: id
        },
        success: function (result) {
            alert(result);
        }
     });
 })
})(jQuery);