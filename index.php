<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Contact Us!</title>
</head>
  <body>
    <div class="Container w-50 m-auto">
        <div class="text">
            <h1 class="text-center ">Contact Us</h1>
            <hr class="w-25 m-auto bg-dark">
        </div>
        <form action = "action.php" method="POST" autocomplete="off">
          <div class="user my-4">
            <label for="username">Username: </label>
            <input type="text" name="username" id="username" class="form-control" required>
          </div> 
          <div class="email my-4">
            <label for="email">E-mail: </label>
            <input type="email" name="email" id="email" class="form-control" required>
          </div>
          <div class="contact my-4">
            <label for="contact">Contact: </label>
            <input type="contact" name="contact" id="contact" class="form-control" required>
          </div>
          <div class="address my-4">
            <label for="address">Address: </label>
            <input type="address" name="address" id="address" class="form-control" required>
          </div>
          <div class="message my-4">
            <label for="message">Message: </label>
            <textarea name="message" id="message" class="form-control" cols="30" rows="8"></textarea>
          </div>
          <button class="btn btn-success">Send message</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>