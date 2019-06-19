<html>

<body>
    <?php
    include 'dbConfig.php';
    $sql = mysqli_query($con, "select * from ckeditor");
    ?>
    <table border="2px">
        <tr>
            <th>
                title
            </th>
            <th>details</th>
        </tr>
        <?php while ($data = mysqli_fetch_assoc($sql)) { ?>
            <tr>

                <td>
                    <?php echo $data['title'] ?>
                </td>
                <td>
                    <?php echo $data['details'] ?>
                </td>

            </tr>
        <?php } ?>
    </table>
</body>

</html>