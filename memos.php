<?php 
include_once("config.php"); 


$memos= $db->query("SELECT * FROM memo LEFT JOIN friends ON memo.fid=friends.fid ORDER BY memo.mid DESC LIMIT 3");


?>

<?php include_once('header.php')?>

<section class="bg-info">
    <div class="container" style="min-height: 100vh">
        <div class="row">
            <div class="col-md-6 offset-md-3 bg-white p-2 p-md-5  mt-5">
                <h1 class="display-8 mb-4">Latest Memos</h1>

                <hr>
                <?php if($memos->num_rows>0):?>
                    <?php while ($row= $memos->fetch_assoc()):?>
                    <blockquote class="blockquote">
                        <?= $row['memo']?><br><small class="text-muted "><?=$row['name'] ?></small>
                    </blockquote><hr>
                <?php endwhile; ?>
                <?php else: ?>
                    <div class="alert alert-danger">No memos found</div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php include_once('footer.php')?>
