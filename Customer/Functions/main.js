
// add-notification.php
$( document ).ready(function() {


// prevent line break at textarea => error when parse newline json to append browser
$('textarea').on('keyup', function(){
  $(this).val($(this).val().replace(/[\r\n\v]+/g, ''));
});


   $('#push').click(function(){
      var value = $('#textarea').val();
      if (value != '') {
        $.ajax({
        type:"POST",
        url:"add-notification-api.php",
        // dataType: "text",
        data:{noti:value},
        success:function(data){ 
         var json = JSON.parse( data );
          if(json['success'] = 'success'){
            $('.noti-success-message').text(json['message']);
            success:$('.noti-success-message').show(500).fadeOut(2000)
          }
        } 
        })
      }else{
        $('.noti-success-message').text('new message');
        success:$('.noti-success-message').show(500).fadeOut(2000)
      }
   });
   
   $(' #dLabel').click(function(){
      var value1 = parseInt($('.last_noti_id').text() );
      var value2 = parseInt($('.last_seen_noti').text() );
      var noti = parseInt( $('#no-number').html('0') );
      console.log(value1);
      $('.last_seen_noti').html(value1);
      if (value1 != value2) {
        // hide number 0 when it's click
        $('#no-number').html('0').hide(455);
        $.ajax({
        type:"POST",
        url:"add-notification-api.php",
        // dataType: "text",
        data:{update_noti_number:value1},
        success:function(data){ 
          // $('#no-number').html('0').hide(400);
          
         var json = JSON.parse( data );
          if(json['success'] = 'success'){
          }
        } 
        })
      }else{
      }
   })

}); //document end


function check_noti_every_one_second(){
var last_noti_id = parseInt($('.noti_id').text() );
  $.ajax({
    type:"POST",
    url:"add-notification-api.php",
    // dataType: "text",
    data:{check_last_noti_value_and_compare_to_current:last_noti_id},
    success:function(data){ 
        

     var json = JSON.parse( data );
     // if there are new rows ==>dom the number
      if(json['success'] == true){
        var last_seen_from_db = parseInt(json['last_insert'])
        var last_seen_from_dom = parseInt($('.last_seen_noti').text() );
        var last_noti_from_dom = parseInt($('.noti_id').text() );
        var current_notification_number_on_dom = parseInt($('#no-number').text())
        var new_noti_number = last_seen_from_db - last_seen_from_dom;

        $('.noti_id').html(last_seen_from_db);
        if (last_seen_from_db =! last_noti_from_dom) {
        }
        // append new value to dom
        if(json['success'] == true){
           $('.dropdown-menu').prepend(json['dom']);
        }

        console.log(new_noti_number);
        if (new_noti_number != current_notification_number_on_dom || typeof(new_noti_number) != 'undefined' || typeof(new_noti_number) != 'NaN') {
          // if not the same value
          if (new_noti_number != current_notification_number_on_dom) {
            $('#no-number').hide(0).removeClass('hide');
            $('#no-number').show(270);
            $('#no-number').text(new_noti_number);
          }
        }


        // console.log(last_seen_from_db);
        // console.log(last_seen_from_dom);
        // console.log(current_notification_number_on_dom);
        // console.log(new_noti_number);
      }
    }
  });
}


setInterval('check_noti_every_one_second()' ,450);

function nl2br (str, is_xhtml) {   
  var breakTag = (is_xhtml || typeof is_xhtml === 'undefined') ? '<br />' : '<br>';    
  return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1'+ breakTag +'$2');
}