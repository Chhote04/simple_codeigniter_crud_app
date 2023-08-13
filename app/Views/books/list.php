<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple CI Crud App</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
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
                        <div class="nav-link">Books / List</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12 text-right">
                <a href="<?php echo base_url('books/create') ?> " class="btn btn-primary">ADD</a>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <?php
                if (!empty($session->getFlashdata('success'))) {
                ?>
                    <div class="alert alert-success">
                        <?php echo $session->getFlashdata('success'); ?>
                    </div>
                <?php
                }
                ?>
                <?php
                if (!empty($session->getFlashdata('error'))) {
                ?>
                    <div class="alert alert-danger">
                        <?php echo $session->getFlashdata('error'); ?>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <div class="card-header-title">Books</div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>ISBN .No</th>
                                <th>Author</th>
                                <th width="150">Action</th>
                            </tr>
                            <?php if (!empty($books)) {
                                foreach ($books as $book) { ?>
                                    <tr>
                                        <td><?php echo $book['id'] ?></td>
                                        <td><?php echo $book['title'] ?></td>
                                        <td><?php echo $book['isbn_no'] ?></td>
                                        <td><?php echo $book['author'] ?></td>
                                        <td>
                                            <a href="<?php echo base_url('books/edit/' . $book['id']); ?>" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="#" onclick="deleteConfirm(<?php echo $book['id'] ?>);" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                <?php }
                            } else { ?>
                                <tr>
                                    <td colspan="5">Record Not Found</td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
)

</html>

<script>
    function deleteConfirm(id) {
        if (confirm("Are you sure you want to delete?")) {
            window.location.href = '<?php echo base_url('books/delete/') ?>' + id
        }
    }
</script>