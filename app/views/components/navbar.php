<nav class="navbar">
  <div class="navbar-logo">
    <a href="<?= ROOT ?>"><img src="<?= ROOT ?>/assets/images/logo.png" alt="Green Lease Logo" /></a>
  </div>
  <div class="hamburger" onclick="toggleMenu()">&#9776;</div>
  <ul class="navbar-links">
    <li><a href="<?= ROOT ?>">Home</a></li>
    <li><a href="<?= ROOT ?>/about">About</a></li>
    <li><a href="<?= ROOT ?>/contact">Contact</a></li>

    <?php if (isset($_SESSION['id'])): ?>
      <!-- Marketplace link is visible only when logged in -->
      <li><a href="<?= ROOT ?>/marketplace">Marketplace</a></li>

      <li>
        <?php
        if ($_SESSION['role_id'] == 1) {
          echo '<a href="' . ROOT . '/admin">Dashboard</a>';
        } elseif ($_SESSION['role_id'] == 2) {
          echo '<a href="' . ROOT . '/supervisor">Dashboard</a>';
        } elseif ($_SESSION['role_id'] == 3) {
          echo '<a href="' . ROOT . '/sitehead">Dashboard</a>';
        } elseif ($_SESSION['role_id'] == 4) {
          echo '<a href="' . ROOT . '/landowner">Dashboard</a>';
        } elseif ($_SESSION['role_id'] == 5) {
          echo '<a href="' . ROOT . '/buyer">Dashboard</a>';
        } elseif ($_SESSION['role_id'] == 6) {
          echo '<a href="' . ROOT . '/worker">Dashboard</a>';
        }
        ?>
      </li>
      <li><a href="<?= ROOT ?>/login/logout">Logout</a></li>
    <?php else: ?>
      <!-- Marketplace link is not shown for non-logged-in users -->
      <li><a href="<?= ROOT ?>/login">Login</a></li>
    <?php endif; ?>
  </ul>
</nav>