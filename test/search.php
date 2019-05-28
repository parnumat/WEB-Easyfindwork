<?php
    include 'connect.php';
    $sql = "select * from member where mem_name like '%{$_POST['itemname']}%'";
    $query = mysql_query($sql);
?>
<div class="col-md-12">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ลำดับ</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>PROFILE</th>
                <th>สนใจ</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; while ($result = mysql_fetch_assoc($query)) { ?>
            <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $result['ID'];?></td>
                <td><?php echo $result['mem_name'];?></td>
                <td><?php echo $result['email'];?></td>
                <td><?php echo "PROFILE";?></td>
                <td><?php echo "สนใจ";?></td>
            </tr>
            <?php $i++; } ?>
        </tbody>
    </table>
</div>