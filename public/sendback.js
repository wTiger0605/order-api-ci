$(document).ready(function(){
    $('#loading-id').removeClass('loading');
    $('#loading-id').empty();
    $("#post-btn").click(function(){
        var site_url = $(this).attr('data-url');
        $.ajax({
            url: site_url + "/api/insert",
            method: "POST",
            data: {order_id: 15, order_number: 15, customer_address: "aaa", items: "bbb", customer_name: "ccc"},
            success: function(data){
                window.location.reload();
            }
        }).done(function() {
            window.location.reload();
        });
    });
    $('.btn-delete').click(function(){
        var site_url = $(this).attr('data-url');
        var order_id = $(this).attr('data-id');
        var part_id = $(this).attr('data-part');
        var this_button = $(this);
        $('#loading-id').addClass('loading');
        $('#loading-id').html('<div class="ripple"></div>');
        this_button.prop('disabled',true);
        // this_button.parent().remove();
        $.ajax({
            url: site_url + "/api/delete",
            method: "POST",
            dataType: 'json',
            data: {id: order_id},
            success: function(data){
            }
        }).done(function() {
        $('#loading-id').removeClass('loading');
        $('#loading-id').empty();
        this_button.prop('disabled',false);
            if (part_id == 0) {
                alert('The Order was deleted and completed successfully!');
                window.location.reload();
            } else {
                alert('The Order was deleted successfully!')
                this_button.parent().remove();
            }
        });
    });
    $(".clear-file").click(function(){
        var site_url = $(this).attr('data-url');
        var file_id = $(this).attr('data-id');
        $.ajax({
            url: site_url + "/api/clear",
            method: "POST",
            dataType: "json",
            data: {id: file_id},
            success: function(data){
                if ( file_id == "0") {$('#text-content').val('');}
                else if( file_id == "1") {$('#text-content1').val('');}
                else if( file_id == "2") {$('#text-content2').val('');}
            }
        }).done(function() {
        });
    });
    $('#setting-btn').click(function(){
        var site_url = $(this).attr('data-url');
        var w_url = $('#woocommerce-url').val();
        $.ajax({
            url: site_url + "/api/setting",
            method: "POST",
            dataType: 'json',
            data: {address: w_url},
            success: function(data){
            }
        }).done(function() {
        });
    })
});