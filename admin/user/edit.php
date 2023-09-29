<?php
$userId = $_GET['user_id'];

# get user
$stmt = $db->prepare("SELECT * FROM users WHERE id=$userId");
$stmt->execute();
$user = $stmt->fetchObject();

$nameErr = '';
$emailErr = '';
$passwordErr = '';

if (isset($_POST['userUpdateBtn'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    if ($name == '') {
        $nameErr = 'the name field is required';
    } elseif ($email == '') {
        $emailErr = 'the email field is required';
    } else {
        if($password == '') {
            $stmt = $db->prepare("UPDATE users SET name='$name', email='$email', role='$role' WHERE id=$userId");
        } else {
            $password = md5($password);
            $stmt = $db->prepare("UPDATE users SET name='$name', email='$email', password='$password', role='$role' WHERE id=$userId");
        }

        $result = $stmt->execute();
        if ($result) {
            echo "<script>location.href='index.php?page=users'</script>";
        }
    }
}
?>
<div class="container-fluid">
    <!-- Content Row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">User Edit Form</h6>
                    <a href="index.php?page=users" class="btn btn-primary btn-sm"><i class="fas fa-backspace"></i> Back</a>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="mb-2">
                            <label for="">Name</label>
                            <input type="text" name="name" value="<?php echo $user->name ?>" class="form-control">
                            <span class="text-danger"><?php echo $nameErr ?></span>
                        </div>
                        <div class="mb-2">
                            <label for="">Email</label>
                            <input type="email" name="email" value="<?php echo $user->email ?>" class="form-control">
                            <span class="text-danger"><?php echo $emailErr ?></span>
                        </div>
                        <div class="mb-2">
                            <label for="">Role</label>
                            <select name="role" id="" class="form-control">
                                <option value="admin" <?php if ($user->role == 'admin') : ?> selected <?php endif ?>>Admin</option>
                                <option value="user" <?php if ($user->role == 'user') : ?> selected <?php endif ?>>User</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="">Password</label>
                            <input type="checkbox" onclick="showPasswordInput()" id="checkbox">
                            <input type="text" name="password" id="password-input" class="form-control" style="display: none" placeholder="Enter New Password">
                            <span class="text-danger"><?php echo $passwordErr ?></span>
                        </div>
                        <button name="userUpdateBtn" class="btn btn-primary"><i class="far fa-paper-plane"></i>
                            Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function showPasswordInput() {
        let checkbox = document.getElementById('checkbox')
        let passwordInput = document.getElementById('password-input')
        if (checkbox.checked) {
            passwordInput.style.display = 'block'
        } else {
            passwordInput.style.display = 'none'
        }
    }
</script>