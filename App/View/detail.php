<div class="container mt-3">
    <a type="button" class="btn btn-primary mt-3 mb-3" href="index.php?page=list">Back</a>

    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th style="text-align: center" colspan="2">Chi Tiết</th>
        </tr>
        </thead>
        <tr>
            <th>Tên</th>
            <td><?php echo $product->name ?></td>
        </tr>
        <tr>
            <th>Hãng</th>
            <td><?php echo $product->fullname ?></td>
        </tr>
        <tr>
            <th>Giá</th>
            <td><?php echo $product->price ?></td>
        </tr>
        <tr>
            <th>Số lượng</th>
            <td><?php echo $product->quantity ?></td>
        </tr>
        <tr>
            <th>Mô tả</th>
            <td><?php echo $product->description ?></td>
        </tr>
    </table>

</div>