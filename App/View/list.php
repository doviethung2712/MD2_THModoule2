</div>

<div class="container mt-4">
    <h1 class="text-center">Danh sách mặt hàng</h1>
    <div class="row">
        <div class="col-9">
            <form method="post" class="form-inline my-2 my-lg-0">
                <h5>Nhập tên hàng: </h5>
                <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search"
                       aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        <div class="col-3">
            <a type="button" class="btn btn-success" href="index.php?page=create">Thêm mặt hàng</a>
            <!--            <a href="index.php?page=create-hang">Thêm Loại</a>-->
        </div>
        <table class="table mt-3">
            <thead class="thead-blue">
            <tr>
                <th>#</th>
                <th>Tên hàng</th>
                <th>Loại hàng</th>
                <th colspan="2"></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($products as $key => $product): ?>
                <tr>
                    <td><?php echo $key + 1 ?></td>
                    <td><a href="index.php?page=detail&id=<?php echo $product->id ?>"><?php echo $product->name ?></a>
                    </td>
                    <td><?php echo $product->fullname ?></td>
                    <td><a href="index.php?page=update&id=<?php echo $product->id ?>">Chỉnh sửa</a></td>
                    <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa mặt hàng <?php echo $product->name ?> ?')"
                           href="index.php?page=delete&id=<?php echo $product->id ?>">Xóa</a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>

        </table>
    </div>