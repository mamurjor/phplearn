<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
    <title>Document</title>
</head>
<body>
    

<form  id="myform">
<label for="field"> UserName </label>
<input type="text"  id="username" name="username">

<label for="field"> email </label>
<input type="email"  id="email" name="email">
<br/>

<label for="field"> course_fee </label>
<input type="number"  id="course_fee" name="course_fee">
<br/>


<label for="password">Password</label>
<input id="password" name="password" />
<br/>
<label for="password_again">Again</label>
<input class="left" id="password_again" name="password_again" />
<br>

<input type="submit" value="Registration">
</form>



<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script>
// just for the demos, avoids form submit
jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});
$( "#myform" ).validate({
  rules: {
    username: {
      required: true,
    //   minlength: 8,
    //   maxlength: 10
    rangelength: [8, 10]
    },
    email: {
      required: true,
      email: true
    },
    course_fee: {
        required: true,
        min:2500
    },
    password: "required",
    password_again: {
      equalTo: "#password"
    }
  },
  messages: {
    email: "ami moto message",
    course_fee: "course fee 30000"
  }
 
});
</script>
</body>
</html>