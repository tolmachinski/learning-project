<?php
  require "header.php";

?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up</title>
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    </head>
    <body>
      
      <div class="container mt-2">
      <div class="col-md-12">
      <form action="check_post.php" method="post">
        <h2> Registration </h2>
        
        <fieldset >
          
          <legend><span class="number">1</span> Basic Info</legend>
        
          <label for="name">Name:</label>
          <input type="text" id="name" name="user_name" class="form-control">
        
          <label for="email">Email:</label>
          <input type="email" id="mail" name="user_email" class="form-control">
       
          <label for="password">Password:</label>
          <input type="password" id="password" name="user_password" class="form-control">
        
          <label>Age:</label>
          <input type="age" id="age" name="user_age" class="form-control"><br>
          
          
        </fieldset>
        <fieldset>  
        
          <legend><span class="number">2</span> Your Profile</legend>
          
         <label>Bio:</label>
          <textarea id="bio" name="user_bio" class="form-control"></textarea>
        
       
        
         <label for="job">Job Role:</label>
          <select id="job" name="user_job" class="form-control">
            <optgroup label="Web">
              <option value="frontend_developer">Front-End Developer</option>
              <option value="php_developer">PHP Developer</option>
              <option value="python_developer">Python Developer</option>
              
              <option value="web_designer">Web Designer</option>
              <option value="wordpress_developer">Wordpress Developer</option>
            </optgroup>
            <optgroup label="Mobile">
              <option value="android_developer">Android Developer</option>
              <option value="ios_developer">IOS Developer</option>
              <option value="mobile_designer">Mobile Designer</option>
            </optgroup>
            <optgroup label="Business">
              
       <option value="freelancer">Freelancer</option>
            </optgroup>
          </select>
          
          <label>Interests:</label><br>
          <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1"></label>Developer</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">Manager</label>
          </div>
         </fieldset>
       
        <button type="submit" class="btn btn-success">Sign Up</button>
        
       </form>
        </div>
      </div>

      <?php 
    require_once "footer.php";

?>
    </body>
</html>
