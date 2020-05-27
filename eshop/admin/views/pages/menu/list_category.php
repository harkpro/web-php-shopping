<div class="card-header" id="headingCategory">
    <h5 class="mb-0">
    <button class="btn btn-outline-success w-100" data-toggle="collapse" data-target="#collapseCategory" aria-expanded="true" aria-controls="collapseCategory">
    Loại sản phẩm
    </button>
    </h5>
</div>
<div id="collapseCategory" class="collapse" aria-labelledby="headingCategory" data-parent="#accordion">
    <div class="card-body">
    <form action="index.php?option=menu&cat=insert" method="post">
        <fieldset class="form-group">
            <?php foreach ($list_category as $row) : ?>
            <div class="form-check">
                <input class="form-check-input" name="itemcat" type="radio" value="<?=$row['id']?>" id="itemcategory<?=$row['slug']?>">
                <label class="form-check-label" for="itemcategory<?=$row['slug']?>">
                    <?=$row['name']?>
                </label>
            </div>
            <?php endforeach; ?>
        </fieldset>
        <fieldset class="form-group">
            <input type="hidden" name="type" value="category">
            <button class="btn btn-outline-dark form-control" type="submit" name="THEM">Thêm</button>
        </fieldset>
    </form>
    </div>
</div>