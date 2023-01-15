<?php
define('ADMIN', 'C:/xampp/htdocs/ideable');
include ADMIN . '/includes/header.php';
include ADMIN . '/includes/navbar-main.php';
include ADMIN . '/includes/dbConfig.php';
?>
<?php
$admin_post_search_sql = "SELECT * FROM $inventor";
$admin_post_search_result = mysqli_query($mysqli, $admin_post_search_sql) or die(mysqli_error($mysqli));

$data = [];
?>
<div class="table-container">
    <hr>
    <!-- <input type="text" id="myInput" onkeyup='tableSearch()' placeholder="Name"> -->
    <table class="table" id="myTable" data-filter-control="true" data-show-search-clear-button="true">
        <tr>
            <th>Inventor Id</th>
            <th>Inventor Name</th>
            <th>Inventor Email</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = mysqli_fetch_array($admin_post_search_result)) {
            $data['invID'] = $row['inventor_id'];
            $data['invName'] = $row['inventor_name'];
            $data['invEmail'] = $row['inventor_email']; ?>
            <tr>
                <td><?= $data['invID'] ?></td>
                <td>
                    <?= $data['invName'] ?>
                </td>
                <td><?= $data['invEmail'] ?></td>
                <td>
                    <form action="#" method="POST">
                        <input type="submit" class="delete-btn" value="Delete" name="delete_btn">
                        <input type="hidden" name="hidden_invid" value="<?= $data['invID'] ?>">
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>

<?php
if (isset($_POST['delete_btn'])) {

    $invID_hidden = $_POST['hidden_invid'];
    $delete_user_sql = "DELETE FROM $inventor WHERE inventor_id = '$invID_hidden' ";
    $mysqli->query($delete_user_sql) or die($mysqli->error);

    echo "<script>alert('This user has been deleted');
    window.location='/ideable/admin/admin-inventor.php';</script>";
}
?>

<?php
include ADMIN . '/includes/footer.php';
?>