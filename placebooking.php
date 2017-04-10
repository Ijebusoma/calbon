<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>

<body>
<?php include "header.php"; ?>

<form class="" action="appointment.php" method="post" id ="contact-form" >
      <div class="column dt-sc-one-half first">
          <p><input type="text" name="username" placeholder="Your Name (required)" required/> </p>
          <p><input type="text" name="phonenumber" placeholder="Your Phone (required)" required/></p>
          <p><input id="datepicker" type="text" placeholder="" name="datepicker" required><span class="icon-date-picker fa fa-calendar"></span></p>

          <p><input type="email" name="email" placeholder="Email" required/></p>

          </div>

      </div>
      <div class="column dt-sc-one-half">
          <p><textarea class="message"  placeholder="Leave a message here" required rows="10" cols="5" name="txtmessage"></textarea></p>
          <p><input type="submit" name="submit" value="Book Now" id="submitMe"></p>
      </div>
  </form>

 <script>
  $( function() {
    $( "#datepicker" ).datepicker(); //this calls the jquery function that displays the popup
                                       //calendar while the user fills the form.
  });

    </script>
