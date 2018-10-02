<?php include('header.php'); ?>

    <!-- if you need user information, just put them into the $_SESSION variable and output them here -->
    <!--Hey, <?php echo $_SESSION['user_name']; ?>. You are logged in.
Try to close this browser tab and open it again. Still logged in! ;)-->

    <!-- because people were asking: "index.php?logout" is just my simplified form of "index.php?logout=true" -->
    <nav class="navbar">
        <div class="navbar-brand">
            <a class="navbar-item"></a>
        </div>
        <div class="navbar-menu">
            <a href="index.php?logout" class="navbar-item">Logout</a>
        </div>
    </nav>
    <div>
        <div>
            <input type="text" placeholder="device name" id="device_name">
            <input type="text" placeholder="device IP" id="device_ip">
            <input type="button" id="device_create">
            <script>
                document.getElementById("device_create").addEventListener("click", function() {
                    var device_name = document.getElementById("device_name").value;
                    var device_ip = document.getElementById("device_ip").value;
                    var data = {
                        device_name: device_name,
                        device_ip: device_ip
                    };
                    $.ajax({
                        url: "/api/device/create.php",
                        type: "POST",
                        data: data,
                        //                        contentType: "application/x-www-form-urlencoded",
                        dataType: "json",
                        success: function(Data, status) {
                            if (status == "success") {
                                console.log("Data: " + Data);
                            } 
//                                else {
//                                alert(Please change Device Name and Id);
//                            }
                        }
                    });
                });
            </script>
        </div>
    </div>
    <section class="section">
        <div class="container is-fluid">
            <canvas id="myChart" width="400" height="400"></canvas>
        </div>
    </section>
    <?php include('charts.php'); ?>
        <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                    datasets: [{
                        label: '# of Votes',
                        data: [12, 19, 3, 5, 2, 3],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });

        </script>

        <?php include('footer.php'); ?>
