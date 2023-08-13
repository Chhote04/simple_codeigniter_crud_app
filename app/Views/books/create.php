<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple CI Crud App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php

                                    use Kint\Zval\Value;

                                    echo base_url('assets/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
</head>

<body>
    <div class="container-fluid bg-dark shadow-sm">
        <div class="container pb-2 pt-2">
            <div class="text-white h4">
                Simple Codeigniter 4 CRUD App
            </div>
        </div>
        <div class="bg-white shadow-sm">
            <div class="container">
                <div class="row">
                    <div class="nav nav-underline">
                        <div class="nav-link">Books / View</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12 text-right">
                <a href="<?php echo base_url('books') ?>" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <div class="card-header-title">Create Books</div>
                    </div>
                    <div class="card-body">
                        <form name="createForm" id="createForm" method="post">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" id="name" placeholder=" Enter Name" class="form-control <?php echo (isset($validation) && $validation->hasError('name')) ? 'is-invalid' : ''; ?>" value="<?php echo set_value('name'); ?>" required>
                                <?php
                                if (isset($validation) && $validation->hasError('name')) {
                                    echo '<p class="invalid-feedback">' . $validation->getError('name') . '</p>';
                                }
                                ?>

                            </div>
                            <div class="form-group">
                                <label>Author</label>
                                <input type="text" name="author" id="author" placeholder="Enter Author" class="form-control <?php echo (isset($validation) && $validation->hasError('author')) ? 'is-invalid' : ''; ?>" value="<?php echo set_value('author'); ?>" required>
                                <?php
                                if (isset($validation) && $validation->hasError('author')) {
                                    echo '<p class="invalid-feedback">' . $validation->getError('author') . '</p>';
                                }
                                ?>
                            </div>
                            <div class="form-group">
                                <label>ISBN No.</label>
                                <input type="text" name="isbn_no" id="isbn_no" class="form-control" placeholder="Enter ISBN No." value="<?php echo set_value('isbn_no'); ?>" required>

                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>