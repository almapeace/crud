<?php 
include_once("config.php"); 
if(isset($_GET['fid'])){
    $fid=$_GET['fid'];
}else{
    $fid=0;
}


$friend = $db->query("SELECT * FROM friends WHERE fid = $fid");

if($friend->num_rows>0){
    $friend= $friend->fetch_assoc();
    $name = $friend['name'];
    }else{
    $name="unknown";
}

$memos= $db->query("SELECT * FROM memo WHERE fid = $fid ORDER BY mid DESC");

?>

<?php include_once('header.php')?>

<section class="bg-info">
    <div class="container" style="min-height: 100vh">
        <div class="row">
            <div class="col-md-6 offset-md-3 bg-white p-2 p-md-5  mt-5">
                <h1 class="display-8 mb-4"><?= "Memo For $name" ?></h1>

                <form action="memo_action.php" method="post">
                    <input type="hidden" name="fid" value="<?= $fid?>">
                    <div class="md-3">
                        <textarea name="memo" id="" rows="3" class="form-control" placeholder="Add Memo"></textarea>
                    </div>

                    <div class="mb-3 mt-3">
                        <input type="submit" value="Add Memo" name="submit" class="btn btn-primary">
                    </div>
                </form> 
                <hr>

                <?php if($memos-> num_rows>0):?>
                    <?php while($row = $memos->fetch_assoc()):?>
                    <blockquote class="blockquote">
                        <?=$row['memo']?>
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
