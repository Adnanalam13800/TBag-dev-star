<?php 
session_start();
require_once("Master.php");
$master = new Master();
$page = isset($_GET['page']) ? $_GET['page'] : "home";
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once("include/header.php") ?>
<body>
    <main>
    <div id="main-wrapper">
        <div class="container px-5 my-3" >
            <script>
                start_loader()
            </script>
            <?php if(is_file("pages/{$page}.php")): ?>
            <?php include_once("pages/{$page}.php") ?>
            <?php else: ?>
            <?php include_once("pages/404.php") ?>
            <?php endif; ?>
        </div>
    </div>
    </main>
    <div class="modal fade rounded-0" id="FormModal" tabindex="-1" data-bs-backdrop='static'>
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable rounded-0">
            <div class="modal-content rounded-0">
            <div class="modal-header rounded-0">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body rounded-0">
            </div>
            <div class="modal-footer rounded-0">
                <button type="submit" form="" class="btn btn-primary btn-sm submit-btn rounded-0">Save</button>
                <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>

    <div class="modal fade rounded-0" id="ViewModal" tabindex="-1" data-bs-backdrop='static'>
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable rounded-0">
            <div class="modal-content rounded-0">
            <div class="modal-header rounded-0">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body rounded-0">
            </div>
            <div class="modal-footer rounded-0">
                <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
</body>
</html>