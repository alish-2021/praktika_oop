<?php
use App\Services\Page;
?>

<!DOCTYPE html>
<html lang="en">
<?php 
Page::part('head');
?>
<body>
<?php 
Page::part('navbar');
?>
<div class="container"> 
   <div class="jumbotron mt-4">
      <h1 class="display-4">Hello World</h1>
      <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit numquam vitae itaque accusamus, assumenda voluptas?</p>
      <hr class="mt-4">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, nesciunt possimus cupiditate aliquid cumque quibusdam quo deserunt. Eos, officiis ducimus?</p>
      <a href="/login" role="button" class="btn-primary btn btn-lg">Sign in</a>
   </div>
</div>

</body>

</html>