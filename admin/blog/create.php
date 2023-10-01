<?php
// $nameErr = '';
// $emailErr = '';
// $passwordErr = '';

// if (isset($_POST['userCreateBtn'])) {
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];
//     $role = $_POST['role'];

$titleErr = '';
$contentErr = '';
$imageErr = '';

if(isset($_POST['blogCreateBtn'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $userId = $_SESSION['user']->id;
    $created_at = date('Y-m-d H:i:s');

    $imageName = $_FILES['image']['name'];
    $imageTmpName = $_FILES['image']['tmp_name'];
    $imageType = $_FILES['image']['type'];

    if ($title == ''){
        $titleErr = 'the title field is required';
    } elseif ($content == ''){
        $contentErr = 'the content field is required';
    } elseif ($imageName == ''){
        $imageErr = 'the image field is required';
    } else {
        if(in_array($imageType, ['image/png','image/jpg','image/jpeg'])) {
            move_uploaded_file($imageTmpName, "../assets/blog-images/$imageName");
        }
        $stmt = $db->prepare("INSERT INTO blogs (title,content,image,user_id,created_at) VALUES ('$title','$content', '$imageName', $userId, '$created_at')");
        $result = $stmt->execute();
        if($result){
            echo "<script>location.href='index.php?page=blogs'</script>";
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
                    <h6 class="m-0 font-weight-bold text-primary">Blog Creation Form</h6>
                    <a href="index.php?page=blogs" class="btn btn-primary btn-sm"><i class="fas fa-backspace"></i> Back</a>
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="mb-2">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control">
                            <span class="text-danger"><?php echo $titleErr ?></span>
                        </div>
                        <div class="mb-2">
                            <label for="">Content</label>
                            <textarea name="content" id="" class="form-control" rows="7"></textarea>
                            <span class="text-danger"><?php echo $contentErr ?></span>
                        </div>

                        <div class="mb-2">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control">
                            <span class="text-danger"><?php echo $imageErr ?></span>
                        </div>
                        <button name="blogCreateBtn" class="btn btn-primary"><i class="far fa-paper-plane"></i>
                            Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>