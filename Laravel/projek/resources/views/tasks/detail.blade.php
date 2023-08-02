
@foreach ($tasks as $task)
<section class="content">
    <div class="content">
        <ul>
            <li>Nama : <?= $task['nama']?></li>
            <li>Harga Jual :<?= $task['harga_jual']?></li>
            <li>stok : <?= $task['stok']?></li>
            <li>Jenis Produk : <?= $task['prod']?></li>
        </ul>
    </div>
</section>
@endforeach