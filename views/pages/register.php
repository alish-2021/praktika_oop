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
<h3 class="mt-4">Sign up</h3>
<form action="/auth/register" class="mt-4" method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp"> 
  </div>
  <div class="mb-3">
    <label for="username" class="form-label">User name</label>
    <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp"> 
  </div>
  <div class="mb-3">
    <label for="useravatar" class="form-label">User Avatar</label>
    <input type="file" name="useravatar" class="form-control" id="useravatar" aria-describedby="emailHelp"> 
  </div>
  <div class="mb-3">
    <label for="fullname" class="form-label">Full name</label>
    <input type="text" name="fullname" class="form-control" id="fullname" aria-describedby="emailHelp"> 
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="password">
  </div>
  <div class="mb-3">
    <label for="password_confirm" class="form-label">Password confirm</label>
    <input type="password" name="password_confirm" class="form-control" id="password_confirm">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>

</html>