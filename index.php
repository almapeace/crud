<?php include_once 'config.php'; ?>

<?php $list = $db->query("SELECT * FROM friends"); ?>

<?php include_once 'header.php'; ?>

<section class="bg-info">
    <div class="container">
        <div class="row align-items-center" style="min-height: 100vh;">
            <div class="col-md-8 offset-md-2 bg-white p-5">
                <h1 class="text-center h3 text-muted">Friends</h1>
                
                <?php if($list->num_rows > 0): ?>
                    <table class="table table-stripped table-hover">
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Birthday</th>
                            <th>Action</th>
                        </tr>
                     <?php while($row = $list->fetch_assoc()): ?>
                            <tr>
                                <td><?=$row['name']?></td>
                                <td><?=$row['phone']?></td> 
                                <td><?=$row['birthday']?></td>
                                <td>
                                    <a href="delete.php?fid=<?=$row['fid']?>" class="badge badge-pills bg-danger text-decoration-none">x</a>
                                    <a href="update.php?fid=<?=$row['fid']?>" class="badge badge-pills bg-success text-decoration-none">Update</a>
                                    <a href="memo.php?fid=<?=$row['fid']?>" class="badge badge-pills bg-primary text-decoration-none">Memo</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </table>
                <?php else: ?>
                    <div class="alert alert-danger">No Friends Found</div>
                <?php endif; ?>
            </div>
        </div>
    </div> 
</section>

<?php include_once 'footer.php'; ?>
    
 