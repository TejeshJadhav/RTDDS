<?php include('header.php'); ?>

<!-- if you need user information, just put them into the $_SESSION variable and output them here -->
<!--Hey, <?php echo $_SESSION['user_name']; ?>. You are logged in.
Try to close this browser tab and open it again. Still logged in! ;)-->

<!-- because people were asking: "index.php?logout" is just my simplified form of "index.php?logout=true" -->
<nav class="navbar">
  <div class="navbar-brand">
    <a class="navbar-item">sSync</a>
  </div>
  <div class="navbar-menu">
    <a href="index.php" class="navbar-item">Dashboard</a>
    <a href="index.php?logout" class="navbar-item">Logout</a>
  </div>
</nav>
<section>

</section>
<section class="section">
  <div class="container is-fluid">
    <canvas id="myChart" width="400" height="400"></canvas>
  </div>
</section>

<?php include('charts.php'); ?>
<script>
    var ctx = document.getElementById("myChart");
    var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: [12, 109, 5,12, 19,, 19, 3,19, 5,12, 19,12, 19, 5,12, 19, 2, 3],
        datasets: [{
            label: 'Amplitude',
            data: [12, 109, 5,12, 19,, 19, 3,19, 5,12, 19,12, 19, 5,12, 19, 2, 3],
        }],
        lineTension: 0.1
    },

});
</script>

<?php include('footer.php'); ?>
