<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/css/app.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <?php include 'include/header.php'; ?>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title m-b-0">Admin</h4>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="./dashboard.php">
                                <i class="fas fa-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">Withdraw</li>
                        <li class="breadcrumb-item">Form</li>
                    </ul>

                    <div class="section-body">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12">
                                <form id="add-account" class="form-group" action="add-account.php" method="post" enctype="multipart/form-data">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Withdraw</h4>
                                        </div>
                                        <div class="card-body">

                                            <div class="form-group">
                                                <label>User Type</label>
                                                <select class="form-control" name="district" id="">
                                                    <option value="">Select Type</option>
                                                    <option selected value="">Doctor</option>
                                                    <option value="">User</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>User</label>
                                                <select class="form-control" name="district" id="">
                                                    <option value="">Select Doctor</option>
                                                    <option selected value="">Doctor 1</option>
                                                    <option value="">Doctor 2</option>
                                                    <option value="">User 3</option>
                                                    <option value="">User 3</option>
                                                </select>
                                            </div>

                                            <p>Available Balance - 1000 </p>




                                            <div class="form-group">
                                                <label>Amount</label>
                                                <input type="number" class="form-control" name="name" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Withdraw Process</label>
                                                <input type="text" class="form-control" name="name" placeholder="Cash / bKash / EFT / Hand" required>
                                            </div>

                                        </div>
                                        <div class="card-footer text-left">
                                            <button class="btn btn-primary mr-1" type="submit" name="submit">Withdraw</button>
                                            <button class="btn btn-secondary" type="reset">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <?php include 'include/footer.php'; ?>
        </div>
    </div>
    <script>
        setTimeout(function() {
            if ($('#msg-err').length > 1) {
                $('#msg-err').remove();
                window.location = window.location.href;
            }
        }, 7000)

        function getAge() {
            var dateString = $("#date_of_birth").val();
            var today = new Date();
            var birthDate = new Date(dateString);
            var age = today.getFullYear() - birthDate.getFullYear();
            var m = today.getMonth() - birthDate.getMonth();
            if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }
            $("#age").val(age);
        }

        $('#marital_status').on('change', function(e) {
            var optionSelected = $("option:selected", this);
            var valueSelected = this.value;
            if (valueSelected == "single") {
                $('#spouse_name').val('');
                $('#spouse_name').attr('readonly', true);

            } else {
                $('#spouse_name').attr('readonly', false);
            }
        });
    </script>
    <!-- General JS Scripts -->
    <script src="assets/js/app.min.js"></script>
    <!-- JS Libraies -->
    <!-- Page Specific JS File -->
    <!-- Template JS File -->
    <script src="assets/js/scripts.js"></script>
    <!-- Custom JS File -->
    <script src="assets/js/custom.js"></script>
</body>

</html>