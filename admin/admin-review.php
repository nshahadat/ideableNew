<?php
define('ADMIN', 'C:/xampp/htdocs/ideable');
include ADMIN . '/includes/header.php';
include ADMIN . '/includes/navbar-main.php';
include ADMIN . '/includes/dbConfig.php';
session_start();
?>
<?php
$admin_post_search_sql = "SELECT * FROM $post";
$admin_post_search_result = mysqli_query($mysqli, $admin_post_search_sql) or die(mysqli_error($mysqli));

$data = [];
?>
<div class="table-container">
    <hr>
    <!-- <input type="text" id="myInput" onkeyup='tableSearch()' placeholder="Name"> -->
    <table class="table" id="myTable" data-filter-control="true" data-show-search-clear-button="true">
        <tr>
            <th>Post Id</th>
            <th>Post Title</th>
            <th>Reports</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = mysqli_fetch_array($admin_post_search_result)) {
            $data['postID'] = $row['post_id'];
            $data['postTitle'] = $row['title'];
            $data['postReports'] = $row['report'];
            $data['invName'] = $row['inventor_name'];
            $data['invEmail'] = $row['inventor_email']; ?>
            <tr>
                <td><?= $data['postID'] ?></td>
                <td>
                    <?= $data['postTitle'] ?>
                </td>
                <td><?= $data['postReports'] ?></td>
                <td>
                    <form action="#" method="POST">
                        <input type="submit" class="delete-btn" value="Delete" name="delete_btn">
                        <input type="hidden" name="hidden_postid" value="<?= $data['postID'] ?>">
                        <input type="submit" class="table-btn" value="Warn" name="warn_btn">
                        <input type="hidden" name="hidden_invname" value="<?= $data['invName'] ?>">
                        <input type="hidden" name="hidden_invemail" value="<?= $data['invEmail'] ?>">
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>

<?php
if (isset($_POST['delete_btn'])) {

    $postID_hidden = $_POST['hidden_postid'];
    $delete_post_sql = "DELETE FROM $post WHERE post_id = '$postID_hidden' ";
    $mysqli->query($delete_post_sql) or die($mysqli->error);

    echo "<script>alert('This post has been deleted');
    window.location='/ideable/admin/admin-review.php';</script>";
}

if (isset($_POST['warn_btn'])) {


    $_SESSION['warn_invname'] = $_POST['hidden_invname'];
    $_SESSION['warn_invemail'] = $_POST['hidden_invemail'];

    echo "<script>window.location='/ideable/admin/warn-user.php';</script>";
}
?>

<?php
include ADMIN . '/includes/footer.php';
?>