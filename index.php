<?php
    require "database.php";

    $sql = "SELECT * FROM product";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        ?>
            <table border="1">
                <tr>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>Image</th>
                </tr>
                <?php
                    while($row = $result->fetch_assoc()) {
                        ?>
                            <tr>
                                <td><a href="product/<?php echo $row['alias'] ?>"><?php echo $row['name'] ?></a></td>
                                <td><?php echo $row['description'] ?></td>
                                <td><img style="width: 50%;" src="images/<?php echo $row['image'] ?>" alt="<?php echo $row['image'] ?>"></td>
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