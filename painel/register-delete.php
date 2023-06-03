<?php 
require_once 'authentication.php';
require_once 'includes/header.php';

echo $tool->base64url_decode($_GET['code']);

?>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Delete Users</h1>

            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active>"<a href="register-view.php">Users</a></li>
                <li class="breadcrumb-item active">Delete Users</li>
            </ol>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            <strong> Delete User</strong>
                        </div>
                        <div class="card-body">

                        </div>
                    </div>  
                </div>
            </div>
        </div>




<?php
require_once 'includes/footer.php';
require_once 'includes/scripts.php';
?>