<?php 
ob_start("ob_gzhandler"); // compress html output
$header = array('title' => 'Contact Us' ,
                'page' => 'contact' ,
                'description' => 'Tope M. Agbeyo group managing director and Chief Executive Officer of Cornfield Transnational Limited. A Holder of a Masters Degree in Media and Communication from Birmingham City University, Birmingham, United Kingdom. He established  Cornfield Transnational Limited  and other affiliated companies to cater for the diverse needs of people  in several sectors. The company today is a reflection of his creative, professional and managerial capabilities. ' 
               );

include('inc/header.php') 
?>

 <link rel="stylesheet" href="css/contact.css">

<script type="text/javascript">
    $(document).ready(function(){ fullheader() });
</script>

<script type="text/javascript">

//Validate email address check
function isValidEmail(email) {
    var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
    return pattern.test(email);
}


  $(document).ready(function(){

    $('#contactform').submit(function(e){
      e.preventDefault();
      var myform = $(this) ;

      $('.required').each(function(index, val) {
         /* iterate through array or object */
         var len = $(this).val().length ;
        var str = $(this).attr('data-alert') ;

        if( len < 3 ){
          $('#showAlert').fadeIn('fast').html( str ); 
            $(this).focus();
            exit();
        }else if(index == 1 && !isValidEmail($(this).val()) ){
          $('#showAlert').fadeIn('fast').html( str ); 
          $(this).focus();
            exit();
        }
      });

      var Loading = "<img scr='img/ajax_loader_red_32.gif' /> Sending message...." ;
      $('#action').val("sendMessage");
      $('#showAlert').html( Loading ).fadeIn('fast'); 
      $(this).find(':submit').attr('disabled', 'disabled');

      // do ajax sending
      $.ajax({
        url: 'engine/contact.php',
        data: $(this).serialize() ,
        type: 'post' ,
        success: function(returnedData){
        myform.find(':submit').removeAttr('disabled');
        eval(returnedData);
        },
        error: function ( jqXHR, exception ){
        myform.find(':submit').removeAttr('disabled');
        $('#showAlert').html( "an error occured, please try again." ).fadeIn('fast');
        }
        });

    });

  });

function sendSuccess(){
  $('#showAlert').html( "<span style='color:green;'><i class='fa fa-check'></i> Your message has been sent sucessfully</span>" ).fadeIn('fast').delay(2000).fadeOut('fast'); 
  $('.required').each(function(){
    $(this).val("");
  });

}

function sendError(){
  $('#showAlert').html( "<i class='fa fa-exclamation-triangle'></i> your message failed to send, please try again." ).fadeIn('fast').delay(2000).fadeOut('fast'); 
}
</script>



<div class="contact-page">

<fieldset class="contact-form">
        <legend>get in touch with us</legend>

        <form method="POST" id="contactform">

        <span>Your feedback is highly valued and we look forward to <br> hearing from you.</span>

        <div id="showAlert">
         
        </div>


        <p><label for="name">name</label>
        <input type="text" placeholder="Firstname lastname" data-alert="please enter your fullname" class="required" name="name" id="name" ></p>

        <p><label for="email">email</label>
        <input type="text" placeholder="your email address" data-alert="please enter a valid email address" class="required" name="email" id="email" ></p>

        <p><label for="message">message</label>
        <textarea name="message" placeholder="Your message" data-alert="message field is empty" class="required" id="message"></textarea></p>
            
        <p><label for=""></label><input type="submit" value="send message"></p>

        <input type="hidden" id="action" name="action" value="">
        
        </form>

        </fieldset>

        <section class="contact-info" >

        <figure class="address">
            <strong>office address</strong>
            <p>House 2BE Transit, <br>
               Federal Ministry of Works & Housing Estate, <br>
             Obafemi Awolowo Way, <br> Alausa,
             Ikeja, <br> Lagos, Nigeria.
               </p>
        </figure>

        <figure class="email">
            <strong>email</strong>
            <p><a href="mailto:info@cornfieldtransnationalltd.com">info@cornfieldtransnationalltd.com</a></p>
        </figure>

        <figure class="time">
            <strong>business hours</strong>
            <p>Monday – Friday (9am - 5pm) GMT +1</p>
        </figure>

        <figure class="phone">
            <strong>phone</strong>
            <p>+234 (0) 803 969 7585</p>
        </figure>

            
        </section>

        <div class="clear"></div>



    
</div>

        
     <?php require_once 'inc/footer.php' ?>

     <?php ob_flush(); flush() ; ?>