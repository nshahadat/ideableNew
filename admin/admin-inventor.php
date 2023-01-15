<?php
define('ADMIN', 'C:/xampp/htdocs/ideable');
include ADMIN . '/includes/header.php';
include ADMIN . '/includes/navbar-main.php';
include ADMIN . '/includes/dbConfig.php';
?>
<div class="username-btn"><button><?php echo $username; ?></button></div>
        <a href="investor-logout.php">
            <div class="logout-btn"><button>logout</button></div>
        </a>
<div class="table-container">
        <hr>
        <input type="text" id="myInput" onkeyup='tableSearch()' placeholder="Name">
        <table class="table" id="myTable" data-filter-control="true" data-show-search-clear-button="true">
            <tr>
                <th>Inventor Id</th>
                <th>Inventor Name</th>
                <th>Inventor Email</th>
                <th>OTP</th>
                <th>Inventor Details</th>
                <th>Inventor Dp Dir</th>
                <th></th>
            </tr>
            <tr>
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>yes</td>
                <td>no</td>
                <td><input type="button" class="delete-btn" value="Delete"></td>
            </tr>
            <tr>
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>yes</td>
                <td>no</td>
                <td><input type="button" class="delete-btn" value="Delete"></td>
            </tr>
            <tr>
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>yes</td>
                <td>no</td>
                <td><input type="button" class="delete-btn" value="Delete"></td>
            </tr>
            <tr>
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>yes</td>
                <td>no</td>
                <td><input type="button" class="delete-btn" value="Delete"></td>
            </tr>
            <tr>
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>yes</td>
                <td>no</td>
                <td><input type="button" class="delete-btn" value="Delete"></td>
            </tr>
            <tr>
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>yes</td>
                <td>no</td>
                <td><input type="button" class="delete-btn" value="Delete"></td>
        </table>
    </div>

    <?php
include ADMIN . '/includes/footer.php';
?>