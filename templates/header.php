<?php include_once "./bootstrap.php" ?>


<div class="navbar bg-base-100 shadow-sm">
  <div class="flex-1">
    <a href="<?= APP_URI; ?>" class="btn btn-ghost text-xl">Auth System</a>
  </div>

  <div class="flex-1">
    <ul
      tabindex="0"
      class="menu menu-sm dropdown-content flex-row ">
      <li><a href="login.php">login</a></li>
      <li><a href="register.php">Register</a></li>
    </ul>
  </div>

  <div class="flex gap-2">
    <input type="text" placeholder="Search" class="input input-bordered w-24 md:w-auto" />
    <div class="dropdown dropdown-end">
      <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full">
          <img
            alt="Tailwind CSS Navbar component"
            src="https://img.freepik.com/premium-vector/men-icon-trendy-avatar-character-cheerful-happy-people-flat-vector-illustration-round-frame-male-portraits-group-team-adorable-guys-isolated-white-background_275421-286.jpg?w=900" />
        </div>
      </div>
      <ul
        tabindex="0"
        class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow ">
        <li>
          <a class="justify-between">
            Profile
          </a>
        </li>
        <li><a>Settings</a></li>
        <li><a>Logout</a></li>
      </ul>
    </div>
  </div>
</div>