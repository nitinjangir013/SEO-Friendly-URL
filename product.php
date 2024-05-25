<?php
    require "database.php";
    $alias = mysqli_real_escape_string($conn, $_GET['alias']);
    $sql = "SELECT * FROM product WHERE alias = '$alias'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        ?>
            <table border="1">
                <?php
                    while($row = $result->fetch_assoc()) {
                        ?>
                            <tr>
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['description'] ?></td>
                                <td><img style="width: 50%;" src="../images/<?php echo $row['image'] ?>" alt="<?php echo $row['image'] ?>"></td>
                            </tr>
                        <?php
                    }
                ?>
            </table>
        <?php
    } else {
        echo "0 results";
    }


    // Close the connection
    $conn->close();
?>