<?php

?>
<div class="container-fluid">
    <!-- Content Row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">User Create Form</h6>
                    <a href="index.php?page=users" class="btn btn-primary btn-sm"><i class="fas fa-backspace"></i> Back</a>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="mb-2">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control">
                            <span class="text-danger">test</span>
                        </div>
                        <div class="mb-2">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control">
                            <span class="text-danger">test</span>
                        </div>
                        <div class="mb-2">
                            <label for="">Role</label>
                            <select name="role" id="" class="form-control">
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                            <span class="text-danger">test</span>
                        </div>
                        <div class="mb-2">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control">
                            <span class="text-danger">test</span>
                        </div>
                        <button name="categoryCreateBtn" class="btn btn-primary"><i class="far fa-paper-plane"></i> 
                         Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>