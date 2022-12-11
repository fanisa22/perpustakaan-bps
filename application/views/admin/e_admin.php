<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800"><?= $judul;?></h1>
        <div class="card shadow mb-4">
            <div class="card-body">
                <form method="post" action="<?= base_url()?>admin/update">
                <div class="form-group">
                    <label for="exampleInputName1">Id</label>
                    <input type="text" name="id" value="<?= $admin['id'];?>"class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Nama</label>
                    <input type="text" name="nama"  value="<?= $admin['nama'];?>" class="form-control" placeholder="Input Nama Admin" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Username</label>
                    <input type="text" name="username"  value="<?= $admin['username'];?>" class="form-control" placeholder="Input Username" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Password</label>
                    <input type="text" name="password"  value="<?= $admin['password'];?>" class="form-control" placeholder="Input Password" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Level</label>
                    <select name="level" class="form-control"required>
                 <?php 
                    if ($admin['level'] == "Super Admin") {?>
                        <option value="Super Admin" selected> Super Admin </option>
                        <option value="Admin"> Admin </option>
                    <?php } else {?>
                        <option value="Super Admin" > Super Admin </option>
                        <option value="Admin" selected> Admin </option>
                    <?php }
                    ?>
                </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary"> Update </button>
                    <a href="<?= base_url()?>admin" class="btn btn-danger"> Batal</a>
                </div>
                
            </form>
            </div>
        </div>
    </div>
</body>
</html>