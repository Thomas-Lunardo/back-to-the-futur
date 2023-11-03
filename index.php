<?php
require 'setTime.php';
?>

<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back to Donington</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
</head>
<body class="container-fluid">
    <header>
<nav>
  <ul>
    <li><strong>Back to Donington</strong></li>
  </ul>
</nav>
<main>
<h1>Use the Dolorean and get some Rock'n Roll !</h1>
</header>
    <article  class="container">
        <header>
            <h2><?php echo $destinationTime->format('M j, Y, g:i a');?></h2>
        </header>
        <p>Destination time</p>
    </article>
    <article class="container">
        <header>
            <h2><?php echo $presentTime->format('M j, Y, g:i a');?></h2>
        </header>
        <p>Present time</p>
    </article>
    <article class="container">
        <header>
            <h2><?php echo $timeDifference->format('%y years %m months %d days %h hours %i minutes');?></h2>
        </header>
        <p>The distance between those two dates</p>
    </article>
    <article class="container">
        <header>
            <h2><?php echo $caburbantToReachTheDate  . ' liters';?></h2>
        </header>
        <p>The carburant you need for reach the date</p>
    </article>
    </main>
    <footer>
    <article class="container">
        <h2>Don't be late !</h2>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/-nOsqA5ArDk?si=NGtvkVFdLyLIzgbU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </article>
    </footer>
</body>
</html>