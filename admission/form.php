<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tiny.cloud/1/API_KEY/tinymce/6/tinymce.min.js"></script>

    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
    <title>Document</title>
</head>
<body>
    <h1>Admission Form</h1>

    <form action="save.php" method="post" enctype="multipart/form-data">

    <!-- <select name="course_name[]" id="" multiple>
        <option value="0" >Select Your Course</option>
    <option value="wp" selected>  Fullstack WP Developemnt
    </option>
    <option value="laravel">Full Stackt Laravel Development</option>

    <option value="laravel">Full Stackt Laravel Development</option>
    </select> -->
    
 <textarea name="shortdes" id="myTextarea" cols="30" rows="10">


</textarea> </br></br>

    <!-- <input type="search" name="search_data" id="">

    <input type="datetime-local" name="" id=""> -->

    <!-- <input type="week" name="" id=""> -->

    <!-- <label for="usernmae">User Name</label>
    <input type="text" name="username" id=""> </br></br>

    <label for="email">user email</label>

    <input type="email" name="email" id=""> </br></br>

    <label for="password">Password</label>

    <input type="password" name="password" id=""> </br></br>

    <label for="shortdes">Short Description</label>

 <textarea name="shortdes" id="" cols="30" rows="10">


   </textarea> </br></br>

   <label for="Gender">Gender</label>
   <input type="radio" name="gender" value="male" id=""> Male

   <input type="radio" name="gender" value="female" id=""> Female
   <input type="radio" name="gender" value="other" id=""> other </br></br>
   <label for="bestteacher">Best Teacher</label>

   <input type="checkbox" name="bestteacher[]" value="hadi" id=""> Hadi 
   <input type="checkbox" name="bestteacher[]" value ="jaman"id=""> Jaman
   <input type="checkbox" name="bestteacher[]"  value="hadijaman" id=""> hadi jaman  </br></br>
   
   <label for="coursefee">Course Fee</label>

   <input type="number" name="course_fee" id=""> </br> </br>
   <label for="cell">Write Your Cell Number</label>

   <input type="tel" name="cell" id="">  </br> </br>

   <label for="birthDate">Birht Date</label>
   <input type="date" name="birthdate" id=""> </br> </br> 

   <label for="color">Write Your Best Color</label>

   <input type="color" name="color" id="">  </br> </br> 

   <label for="classtime">Class Time</label>
   <input type="time" name="classtime" id=""> </br> </br>

   <label for="websiteurl">Web Site URL</label>

   <input type="url" name="websiteurl" id=""> </br> </br>

   <label for="iamge">Upload Your Photo</label>

   <input type="file" name="image" id=""> </br> </br>

   <label for="month">Month </label>

   <input type="month" name="course_star_month" id="">

   <input type="hidden" name="ip" value=""> -->


 
    <!-- <input type="range" name="price_range" min="1" max="100" id=""> -->

   <input type="submit" value="Submit">

   <!-- <input type="reset" value="reset"> -->

  

    </form>
    <script>
        tinymce.init({
                    selector: '#myTextarea'
        });
    </script>
</body>
</html>