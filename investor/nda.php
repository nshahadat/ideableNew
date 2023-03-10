<?php
define('ADMIN', 'C:/xampp/htdocs/ideable');
include ADMIN . '/includes/header.php';
session_start();
error_reporting(0);
?>

<div class="nda-container">
    <div class="nda-title">
        <b>Non-Disclosure Agreement</b> of an investor for searching and visiting posts
        on online platform called ‘ideable’.
    </div>
    <div class="nda-second-section">
        <div class="nda-date">
            Date: <b>
                <?php echo date("d/m/Y") ?>
            </b>
        </div>
        <div class="nda-concern">
            To whom it may concern: <b>
                <?= $_SESSION['ndaName'] ?>
            </b>, an user and investor of the online platform called ideable whose
            e-mail is <b>
                <?= $_SESSION['ndaEmail'] ?>
            </b>
        </div>
        <span>and</span>
        <div class="nda-inventor">
            <i>[Any other inventor of ideable]</i>
        </div>
    </div>
    <div class="nda-third-section">
        <div class="nda-rules">
            1. This disclosure intends to disclose information (Confidential Information) to the Recipient for the
            purpose of investing.
        </div>
        <div class="nda-rules">
            2. While registering on ideable, <i>
                <?= $_SESSION['ndaName'] ?>
            </i> is giving his full consent that <i>
                <?= $_SESSION['ndaName'] ?>
            </i> can
            search
            and view
            any post on ideable and if he wants, he can invest on the idea with proper caution and by the consent of the
            inventor. But <i>
                <?= $_SESSION['ndaName'] ?>
            </i> cannot use any information at any cost for his personal use or cannot use
            or
            implement any idea by himself without the consent of the inventor.
        </div>
        <div class="nda-rules">
            3. The Recipient undertakes not to use the confidential information for any purpose except the purpose,
            without first obtaining the written agreement of the disclosure.
        </div>
        <div class="nda-rules">
            4. The Recipient undertakes to keep the confidential information secure and not to disclose it to any third
            party who need to know the information for the same purpose, who know they owe a duty of confidence to the
            disclosure and who are bound by obligations equivalent to those in clause 2,3 above and this clause 4.
        </div>
        <div class="nda-rules">
            5. The undertakings in clauses 2 ,3 and 4 above apply to all of the information disclosed by the Discloser
            to the Recipient, regardless of the way or form in which it is disclosed or recorded but they do not apply
            to:
            <div class="nda-rules-sub">
                a. any information which is or in future comes into the public domain (unless as a result of the breach
                of this Agreement); or <br>
                b. any information which is already known to the Recipient and which was not subject to any obligation
                of confidence before it was disclosed to the Recipient by the Discloser.
            </div>
        </div>
        <div class="nda-rules">
            6. Nothing in this Agreement will prevent the Recipient from making any disclosure of the Confidential
            Information required by law or by any competent authority.
        </div>
        <div class="nda-rules">
            7. The Recipient will, on request from the Discloser, return all copies and records of the Confidential
            Information to the Discloser and will not retain any copies or records of the Confidential Information.
        </div>
        <div class="nda-rules">
            8. Neither this Agreement nor the supply of any information grants the Recipient any license, interest or
            right in respect of any intellectual property rights of the Discloser except the right to copy the
            Confidential Information solely for the Purpose.
        </div>
    </div>
</div>