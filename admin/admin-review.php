<?php
define('ADMIN', 'C:/xampp/htdocs/ideable');
include ADMIN . '/includes/header.php';
include ADMIN . '/includes/navbar-main.php';
include ADMIN . '/includes/dbConfig.php';
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
            <th></th>
        </tr>
        <?php while ($row = mysqli_fetch_array($admin_post_search_result)) {
            $data['postID'] = $row['post_id'];
            $data['postTitle'] = $row['title'];
            $data['postReports'] = $row['report']; ?>
            <tr>
                <td><?= $data['postID'] ?></td>
                <td>
                    <?= $data['postTitle'] ?>
                </td>
                <td><?= $data['postReports'] ?></td>
                <td>
                    <input type="button" class="delete-btn" value="Delete">
                    <input type="button" class="table-btn" value="Warn">
                </td>
            </tr>
        <?php } ?>
    </table>
</div>

<?php
include ADMIN . '/includes/footer.php';
?>