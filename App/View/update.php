<div class="container mt-4">
    <form method="post">
        <div class="form-group">
            <label for="exampleFormControlInput1">Tên</label>
            <input type="text" name="name" value="<?php echo $product->name?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Chọn hãng</label>
            <select class="form-control" name="classify" id="exampleFormControlSelect1">
                <?php foreach ($classifys as $classify): ?>
                    <option value="<?php echo $classify->id ?>"><?php echo $classify->name ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Giá</label>
            <input type="number" name="price" class="form-control" value="<?php echo $product->price?>" id="exampleFormControlInput1">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Số Lượng</label>
            <input type="number" name="quantity" class="form-control" value="<?php echo $product->quantity?>" id="exampleFormControlInput1">
        </div>
        <!--        <div class="form-group">-->
        <!--            <label for="exampleFormControlInput1">Số Lượng</label>-->
        <!--            <input type="datetime-local" name="date" class="form-control" id="exampleFormControlInput1">-->
        <!--        </div>-->
<!--        <div class="form-group">-->
<!--            <label for="exampleFormControlInput1">mô tả</label>-->
<!--            <input type="text" name="description" class="form-control" id="exampleFormControlInput1">-->
<!--        </div>-->

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Mô tả</label>
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"><?php echo $product->description?></textarea>
                </div>
        <button>Update</button>
    </form>
    <a type="button" class="btn btn-primary mt-3 mb-3"  href="index.php?page/list">Back</a>
</div>