<?php
/** Task 1: Create 1 dominoe with random sections
* Create 1 array to hold the css class
* Use rand() to get a number 0 to count(sections) - 1, count(section) will return the length of a section
*  Loop over sections to get random number of dots
*   Output the HTML for a dominoe
*/
$nums = ['zero', 'one', 'two', 'three', 'four', 'five', 'six'];

/** Task 2: Create 100 random dominoes
* Use for loop to create 100 dominoes
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dominoes with PHP</title>
  <link rel="stylesheet" href="dominoes.css">
</head>
<body>
  <h1>RUBY HUI's Dominoes</h1>
  <div class="dominoes">
    <!-- REMOVE THE DEMO CODE -->
    <?php for ($i = 0; $i < 100; $i++) : ?>

    <div class="domino">
      <div class="dots <?php echo $nums[rand(0, count($nums) - 1)]; ?>">
        <?php for ($j = 0; $j < rand(0, count($nums) - 1); $j++) : ?>
        <div class="dot"></div>
        <?php endfor; ?>
      </div>

      <div class="dots <?php echo $nums[rand(0, count($nums) - 1)]; ?>">
        <?php for ($a = 0; $a < rand(0, count($nums) - 1); $a++) : ?>
        <div class="dot"></div>
        <?php endfor; ?>
      </div>
    </div>
    <?php endfor; ?>
  </div>
</body>
</html>