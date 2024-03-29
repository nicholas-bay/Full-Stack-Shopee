<?php
$errMsg = $_SESSION['login_valid'];
$pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';
?>

<div class="offcanvas offcanvas-end gradient-coolsky" data-bs-scroll="true" tabindex="-1" id="account">
  <div class="offcanvas-header">
    <h1 class="offcanvas-title">Account</h1>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body text-white">
    <div class='container'>
      <div class='row d-flex justify-content-center align-items-center p-3'>
        <div class='card color-dimblack bor-rad'>
          <span class="err" style="margin-top: 22px;">* Required Field</span>
          <form method='POST' action='../server/users.php'>
            <div class='row text-center'>
              <div class='card-body'>
                <input type='text' name='username' placeholder='Username' required><span class="err"> *</span>
              </div>
            </div>
            <div class='row text-center'>
              <div class='card-body'>
                <input type='text' name='password' placeholder='Password' required><span class="err"> *</span>
              </div>
            </div>
            <div class='row text-center'>
              <span class="err"><?php echo $errMsg; ?></span>
              <?php $_SESSION['login_valid'] = ""; ?>
              <div class='card-body'>
                <input type='submit' class='btn btn-cus' name='login' value='Login'>
                <input type='submit' class='btn btn-cus' name='signup' value='Sign Up'>
              </div>
            </div>
          </form>
          <div class='row text-center'>
            <div class='card-body'>
              <form method='POST' action='../server/users.php'>
                <?php if ($_SESSION['username'] != 'User') echo "<input type='submit' class='btn btn-cus' name='logout' value='Log Out'>"; ?>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
    $sql = "SELECT * FROM $tableuser WHERE username = '" . $_SESSION['username'] . "'";
    $user = $conn->query($sql);
    while ($row = $user->fetch_assoc()) {
      echo "
        <div class='container'>
          <div class='row d-flex justify-content-center align-items-center p-3'>
            <div class='card color-dimblack bor-rad'>
              <form method='POST' action='../server/users.php'>
                <div class='row text-center'>
                  <div class='card-body'>
                    <h1 class='card-title'>Edit Account</h1>
                  </div>
                </div>
                <div class='row text-center'>
                  <div class='card-body'>
                    <h5 class='card-title'>Username</h5>
                  </div>
                </div>
                <div class='row text-center'>
                  <div class='card-body'>
                    <input type='text' name='username' value='" . $row['username'] . "' required>
                  </div>
                </div>
                <div class='row text-center'>
                  <div class='card-body'>
                    <h5 class='card-title'>Password</h5>
                  </div>
                </div>
                <div class='row text-center'>
                  <div class='card-body'>
                    <input type='text' name='password' value='" . $row['password'] . "' required>
                  </div>
                </div>
                <div class='row text-center'>
                  <div class='card-body'>
                    <input type='submit' class='btn btn-cus' name='update' value='Update'>
                    <input type='submit' class='btn btn-cus' name='delete' value='Delete'>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      ";
    }
    ?>
  </div>

</div>