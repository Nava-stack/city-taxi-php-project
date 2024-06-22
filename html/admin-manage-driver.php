<?php include 'top.php' ?>
    <div class="main-wrapper">

        <?php include 'admin-header.php'; ?>

        <!-- Sidebar Start -->
        <?php include 'admin-sidebar.php'; ?>
        <!-- Sidebar End -->

        <!-- Page Content Start -->
        <form action = "delete-driver.php" method="post">
        <div class="page-wrapper">
            <div class="container mt-0">
                <h2 class="mb-4">Driver Management</h2>
                <div class="table-responsive">
                <!-- <form method="post" action="">
                    <button class="btn btn-warning btn-sm" value="Search All" name="searchAll">Search All</button>
                </form> -->
 
                
                    <table id="driverTable" class="table table-striped table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Username</th>
                                <!-- <th>Password</th> -->
                                <th>Email</th>
                                <th>NIC</th>
                                <th>Phone Number</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                          
                                $sql = "SELECT * FROM drivers;";
                                $output = mysqli_query($conn, $sql);
                                while($r = mysqli_fetch_array($output))
                                {
                                    echo "<tr>";
                                    echo "<td>" . $r['driver_id'] . "</td>";
                                    echo "<td>" . $r['name'] . "</td>";
                                    echo "<td>" . $r['username'] . "</td>";
                                    //echo "<td>" . $r['password'] . "</td>";
                                    echo "<td>" . $r['email'] . "</td>";
                                    echo "<td>" . $r['NIC'] . "</td>";
                                    echo "<td>" . $r['phone_number'] . "</td>";
                                    echo "<td>";
                                    echo "<a href='edit-driver.php?driver_id={$r['driver_id']}' class='btn btn-warning btn-sm'>Update</a>";
                                    //echo "<button class='btn btn-warning btn-sm'>Update</button>";
                                    echo "<form method='post' action='delete.php' style='display:inline;'>";
                                    echo "<input type='hidden'  name='driver_id' value='{$r['driver_id']}'>";
                                    echo "<button type='submit' class='btn btn-danger btn-sm' name='delete'>Delete</button>";
                                    echo "</td>";
                                    echo "</tr>";
                                }
                           
                            ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </form>
        </div>
        <!-- Page Content End -->

        <?php include 'script.php'; ?>

        <!-- DataTables Initialization Script -->
        <script>
            $(document).ready(function () {
                $('#driverTable').DataTable();
            });
        </script>
    </body>
</html>
