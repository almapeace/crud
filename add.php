<?php include_once 'header.php'; ?>

<section class="bg-info">
    <div class="container">
        <div class="row align-items-center" style="min-height: 100vh;">
            <div class="col-md-4 offset-md-4 bg-white p-5">
                <h1 class="text-center h3 text-muted">Add A Friend</h1>
                <form action="add_action.php" method="post">
                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter friend's name">
                    </div>
                    <div class="mb-3">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter friend's phone">
                    </div>
                    <div class="mb-3">
                        <label for="birthday">Birthday</label>
                        <input type="date" name="birthday" id="birthday" class="form-control" placeholder="Enter friend's birthday">
                    </div>
                    <div class="mb-3">
                        <input type="submit" name="submit" class="btn btn-info col-12" value="Add friend">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include_once 'footer.php'; ?>