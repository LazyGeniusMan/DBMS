<?php 
    include 'connect.php';
    $title="Login Form";
    include 'head.php';
?>
<script>
var navbar = document.getElementById("navbar");
var br = document.getElementById("br-head");
br.remove();
navbar.remove();
</script>
<section class="hero is-primary is-fullheight">
  <div class="hero-body">
    <div class="container">
      <div class="columns is-centered">
        <div class="column is-5-tablet is-4-desktop is-3-widescreen">
        <form action="log.php?op=in" method="post" class="box">
            <div class="field">
                <label class="label">ID Pengguna</label>
                <div class="control has-icons-left">
                    <input class="input" type="text" placeholder="ID Pengguna" name="id_pengguna">
                    <span class="icon is-small is-left">
                        <i class="fas fa-user"></i>
                    </span>
                </div>
            </div>
            <div class="field">
                <label class="label">Password</label>
                <div class="control has-icons-left">
                    <input class="input" type="password" placeholder="Password" name="pass">
                    <span class="icon is-small is-left">
                        <i class="fas fa-key"></i>
                    </span>
                </div>
            </div>
            <div class="control">
                <button class="button is-success is-fullwidth">
                    <span class="icon">
                        <i class="fas fa-sign-in-alt"></i>
                    </span>
                    <span>Login</span>
                </button>
            </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>