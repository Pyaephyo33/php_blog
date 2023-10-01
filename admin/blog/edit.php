<?php
$blogId = $_GET['blog_id'];

#get old blog 
$stmt = $db->prepare("SELECT * FROM blogs WHERE id=$blogId");
$stmt->execute();
$blog = $stmt->fetchObject();

#update blog 
$titleErr = '';
$contentErr = '';
$imageErr = '';

if (isset($_POST['blogUpdateBtn'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $userId = $_SESSION['user']->id;

    $imageName = $_FILES['image']['name'];
    $imageTmpName = $_FILES['image']['tmp_name'];
    $imageType = $_FILES['image']['type'];

    if ($title == '') {
        $titleErr = 'the title field is required';
    } elseif ($content == '') {
        $contentErr = 'the content field is required';
    } else {
        if($imageName == ''){
            $stmt = $db->prepare("UPDATE blogs SET title='$title', content='$content' WHERE id=$blogId ");
        } else {
            // delete old image
            $oldImageName = $blog->image;
            if(!empty($oldImageName)){
                unlink("../assets/blog-images/$oldImageName");
            }

            if (in_array($imageType, ['image/png', 'image/jpg', 'image/jpeg'])) {
                move_uploaded_file($imageTmpName, "../assets/blog-images/$imageName");
            }
            $stmt = $db->prepare("UPDATE blogs SET title='$title', content='$content', image='$imageName' WHERE id=$blogId ");
        }     
        $result = $stmt->execute();
        if ($result) {
            echo "<script>sweetAlert(' updated a blog', 'blogs')</script>";
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
                    <h6 class="m-0 font-weight-bold text-primary">Blog Update Form</h6>
                    <a href="index.php?page=blogs" class="btn btn-primary btn-sm"><i class="fas fa-backspace"></i> Back</a>
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="mb-2">
                            <label for="">Title</label>
                            <input type="text" name="title" value="<?php echo $blog->title ?>" class="form-control">
                            <span class="text-danger"><?php echo $titleErr ?></span>
                        </div>
                        <div class="mb-2">
                            <label for="">Content</label>
                            <textarea name="content" id="" class="form-control" rows="7"><?php echo $blog->content ?></textarea>
                            <span class="text-danger"><?php echo $contentErr ?></span>
                        </div>

                        <div class="mb-2">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control">
                            <img src="../assets/blog-images/<?php echo $blog->image ?>" alt="" style="width:100px;" class="my-2">
                            <span class="text-danger"><?php echo $imageErr ?></span>
                        </div>
                        <button name="blogUpdateBtn" class="btn btn-primary"><i class="far fa-paper-plane"></i>
                            Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>