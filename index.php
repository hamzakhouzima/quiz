

<?php
// include 'data.php';
?>



<!DOCTYPE html>


<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quiz App</title>
    <link rel="stylesheet" href="style.css" />
    
  </head>
  <body>
    <div class="quiz-app">
      <div class="quiz-info">
        <!-- <div class="category">Category: <span>HTML</span></div> -->
        <div class="count" >Questions Count: <span></span></div>
      </div>
      <div class="quiz-area"></div>
      <div class="answers-area"></div>
      <button class="submit-button">Submit Answer</button>
      <div class="bullets">
        <div class="spans"></div>
        <div class="countdown"></div>
      </div>
      <div class="results"></div>
    </div>

    <script src="main.js"></script>
    <!-- <link rel="stylesheet" href="style.css" /> -->
  </body>
</html>