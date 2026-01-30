<h2>Danh sách sản phẩm</h2>
<table border="1" style="border-collapse: collapse; width: 100%; text-align: left;">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Giá</th>
            <th>Mã danh mục</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $p): ?>
        <tr>
            <td>
                <?= $p['id'] ?>
            </td>
            <td>
                <?= $p['name'] ?>
            </td>
            <td>
                <?= number_format($p['price']) ?>đ
            </td>
            <td>
                <?= $p['category_id'] ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>