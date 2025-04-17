<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Register System Using PHP</title>
  <script type="module" src="http://localhost:5173/src/main.js"></script>


</head>

<body>
  <?php include_once "./templates/header.php" ?>


  <div class="container mx-auto px-4 bg-base-200">
    <div class="hero min-h-screen bg-base-200">
      <div class="hero-content flex-col lg:flex-row-reverse gap-10 px-5">
        <img
          src="https://img.freepik.com/premium-photo/3d-smartphone-png-personal-data-protection-remix-transparent-background_53876-1040310.jpg?w=1380"
          class="max-w-sm rounded-lg shadow-2xl" alt="Hero Image" />
        <div>
          <h1 class="text-5xl font-bold text-primary">Secure Login & Registration</h1>
          <p class="py-6 text-base-content">
            A modern and secure authentication system built with PHP, Vite, TailwindCSS, and DaisyUI.
            Start managing your users efficiently, with clean UI and powerful backend integration.
          </p>
          <div class="flex gap-4">
            <a href="/register.php" class="btn btn-primary">Get Started</a>
            <a href="/login.php" class="btn btn-outline btn-primary">Login</a>
          </div>
        </div>
      </div>
    </div>
  </div>



  <?php include_once "./templates/footer.php" ?>
</body>

</html>