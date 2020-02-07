jQuery.ajax({
url: '<?php echo admin_url('admin-ajax.php'); ?>',
type: "POST",				
data: {'action':'func_name','datavalues': formData }, 
success: function(data) {			


},
complete : function(data)
{					

},
error : function ()
{

}
}).then(function(response){

});


/* code for functions.php */

add_action( 'wp_ajax_func_name', 'func_name' );
add_action( 'wp_ajax_nopriv_func_name', 'func_name' );

function func_name() {
}
