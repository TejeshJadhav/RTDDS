<?php include('header.php'); ?>

    <!-- if you need user information, just put them into the $_SESSION variable and output them here -->
    <!--Hey, <?php echo $_SESSION['user_name']; ?>. You are logged in.
Try to close this browser tab and open it again. Still logged in! ;)-->

    <!-- because people were asking: "index.php?logout" is just my simplified form of "index.php?logout=true" -->
    <nav class="navbar">
        <div class="navbar-brand">
            <a class="navbar-item"></a>
        </div>
        <div class="send">
            <a href="index.php?logout" class="navbar-item"><input type="submit" value="LOGOUT"></a>
        </div>
    </nav>
<section>
    <div class="container">
        <div><h1 class="title">My Devices</h1></div>
            <?php include('devices.php'); ?>
        </div>      
</section>

    <section class="section">
        <div class="container">
            <div>
                <h2> Create New Device</h2>
                <br>
                
                <div class="columns">
                    <div class="column is-one-quarter">
                        <div class="field">
                            Device Name : <input type="text" placeholder="device name" id="device_name" class="input">
                        </div>
                        <div class="field">
                            Device IP : <input type="text" placeholder="device IP" id="device_ip" class="input">

                        </div>
                        <div class="field">
                            <input type="submit" id="device_create" value="Add Device" class="button" style="background: #474f70; color: #fff;">
                        </div>
                    </div>
                    <div class="column">
                        <canvas id="myChart" style="width: 480px; height:320px;"></canvas>          
                    </div>
                </div>
                
                
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
                                    location.reload();
                                    // alert("Device created successfully");
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
</section>
<hr>
    <?php include('charts.php'); ?>
        <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["Device 1", "Device 2", "Device 3", "Device 4", "Device 5", "Device 6"],
                    datasets: [{
                        label: 'Data',
                        data: [12, 19, 3, 5, 2, 0],
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
