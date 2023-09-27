<?php

?>
<div class="container-fluid">
    <!-- Content Row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">User List</h6>
                    <a href="index.php?page=users-create" class="btn btn-primary btn-sm"><i class="fa fa-plus" aria-hidden="true"></i> Add New</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Role</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- <?php
                                foreach ($categories as $category) :

                                ?>
                                    <tr>
                                        <td><?php echo $category->id ?></td>
                                        <td><?php echo $category->name ?></td>
                                        <td>
                                            <form method="post">
                                                <input type="hidden" name="category_id" value="<?php echo $category->id ?>">
                                                <a href="" class="btn btn-success btn-sm">Edit</a>
                                                <button name="categoryDeleteBtn" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php
                                endforeach
                                ?> -->

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>