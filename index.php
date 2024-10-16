<?php
include 'config.php';
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
// echo "GET['id']: ".$_GET['id'];
// echo "<br>";
if (!isset($_GET['id']) || empty($_GET['id'])) {
    // header("Location: https://www.google.com");
    // exit();
} else { 
include 'function.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data ? 'Digital Signature Verification' : 'Invalid'; ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- <script src="assets/app.js"></script> -->
    <!-- add css style from style.css -->
     <link rel="stylesheet" href="assets/style.css">  
     <style>
        /* Card Header */
.card-header {
    background-color: <?php echo $data ? '#28a745' : '#dc3545'; ?>;
    color: white;
    font-size: 1.25rem;
}
     </style>
</head>
<body>
    <div class="container"> 
        <div class="header">
        <h2>RS Islam PKU Muhammadiyah Palangka Raya</h2>
            <img src="https://rsipalangkaraya.online/verifqr/logo.png" width="60px" alt="Company Logo">
        </div>

        <div class="card">
            <div class="card-header text-center">
                <?php echo $data ? 'Verification Result' : 'Invalid'; ?>
            </div>
            <div class="card-body">
                <?php if ($data): ?>
                    <h3 class="mb-4">Congratulations!</h3>
                    <p class="lead">The document has been successfully registered and verified.</p>
                    <ul class="list-unstyled">
                        <li class="list-info">
                            <span class="list-info-label">Document ID</span>
                            <span class="list-info-text"><?php echo str_replace("/", "",$data['nomor']); ?></span>
                        </li>
                        <li class="list-info">
                            <span class="list-info-label">Document Type</span>
                            <span class="list-info-text"><?php echo $type; ?></span>
                        </li>
                        <li class="list-info">
                            <span class="list-info-label">Verification Date</span>
                            <span class="list-info-text"><?php echo formatDate($data['tanggal']); ?></span>
                        </li> 
                    </ul>
                    <div class="card mt-4 text-center">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Patient</th>
                                    <th scope="col">Date Registered</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo $data['pasien']; ?></td>
                                    <td><?php echo formatDate($data['tanggal']); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <p>Has been signed by the RSI PKU Muhammadiyah Palangka Raya Hospital health officer as follows :</p>
                    <div class="card mt-4 text-center">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Doctor</th>
                                    <th scope="col">Practice License</th>
                                    <th scope="col">Date Signed</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo $data['dokter']; ?></td>
                                    <td><?php echo $data['sip']; ?></td>
                                    <td><?php echo formatDate($data['tanggal']); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4 text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path fill="#28a745" fill-rule="evenodd" d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10m4.53-11.47-5 5a.75.75 0 0 1-1.06 0l-3-3a.75.75 0 1 1 1.06-1.06L11 13.94l4.47-4.47a.75.75 0 1 1 1.06 1.06" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-success">That is true and recorded in our audit trail</span>
                    </div>
                    <p class="mt-4 text-center">
                        To ensure the validity of this statement, please make sure the URL of your browser is 
                        <a href="#" target="_blank">https://rsipalangkaraya.online</a>
                    </p>
                <?php else: ?>
                    <h3 class="mb-4 text-danger">Document Invalid</h3>
                    <p class="lead text-danger">The document you are looking for could not be found.</p>
                    <p>It might have been modified or deleted.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php } ?>
