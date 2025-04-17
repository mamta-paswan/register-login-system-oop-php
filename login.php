<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Register System Using PHP</title>

  <script type="module" src="http://localhost:5173/src/main.js"></script>


</head>

<body>
  <?php include_once "templates/header.php" ?>


  <div class="min-h-screen flex  gap-5 items-center justify-center bg-base-200">
    <div class="card w-full max-w-sm shadow-2xl bg-base-100">
      <form class="card-body space-y-2" method="POST" action="/process/login.php">
        <h2 class="text-center text-xl font-bold">Login</h2>

        <div class="form-control space-y-1">
          <label class="label"><span class="label-text">Email</span></label>
          <input type="email" name="email" placeholder="email" class="input input-bordered" required />
        </div>

        <div class="form-control space-y-1">
          <label class="label"><span class="label-text">Password</span></label>
          <input type="password" name="password" placeholder="password" class="input input-bordered" required />
        </div>
        <div class="form-control mt-6">
          <button class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>

  <?php include_once "templates/footer.php" ?>
</body>

</html>