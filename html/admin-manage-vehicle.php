<?php include 'top.php' ?>
    <div class="main-wrapper">

        <?php include 'admin-header.php'; ?>

        <!-- Sidebar Start -->
        <?php include 'admin-sidebar.php'; ?>
        <!-- Sidebar End -->

        <!-- Page Content Start -->
        <form action = "delete-vehicle.php" method="post">
        <div class="page-wrapper">
            <div class="container mt-0">
                <h2 class="mb-4">Vehicle Management</h2>
                <div class="table-responsive">               
                    <table id="vehicleTable" class="table table-striped table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Category</th>
                                <th>Plate Number</th>
                                <th>Model</th>
                                <th>Color</th>
                                <th>Speed</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                          
                                $sql = "SELECT * FROM vehicle;";
                                $output = mysqli_query($conn, $sql);
                                while($r = mysqli_fetch_array($output))
                                {
                                    echo "<tr>";
                                    echo "<td>" . $r['vehicle_id'] . "</td>";
                                    echo "<td>" . $r['category_id_fk'] . "</td>";
                                    echo "<td>" . $r['plate_number'] . "</td>";
                                    echo "<td>" . $r['model'] . "</td>";
                                    echo "<td>" . $r['color'] . "</td>";
                                    echo "<td>" . $r['speed'] . "</td>";
                                    echo "<td>";
                                    echo "<a href='edit-vehicle.php?vehicle_id={$r['vehicle_id']}' class='btn btn-warning btn-sm'>Update</a>";
                                    //echo "<button class='btn btn-warning btn-sm'>Update</button>";
                                    echo "<form method='post' action='delete.php' style='display:inline;'>";
                                    echo "<input type='hidden'  name='vehicle_id' value='{$r['vehicle_id']}'>";
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
                $('#vehicleTable').DataTable();
            });
        </script>
    </body>
</html>
