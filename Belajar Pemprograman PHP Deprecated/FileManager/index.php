<!-- ===== File ===== -->

<?php

$pesan = "Apa Kabar";
file_put_contents("contain.txt", $pesan);

$isiFile = file_get_contents("contain.txt");
echo $isiFile;

?>

<!-- ===== Menyimpan Dalam Format Serialize dan JSON ===== -->

<?php
echo "<br><hr>";

$anggota = [
    ['nama' => 'budi', 'nilai' => 'A'],
    ['nama' => 'caca', 'nilai' => 'A'],
    ['nama' => 'dian', 'nilai' => 'B'],
    ['nama' => 'eko', 'nilai' => 'C'],
    ['nama' => 'fafa', 'nilai' => 'A'],
];

$data = serialize($anggota);
file_put_contents("data.txt", $data);

$output = file_get_contents("data.txt");
echo $output . "<br>";
$hasil = unserialize($output);
print_r($hasil);
?>


<!-- ===== Membuat Aplikasi Todo Membuat Template ===== -->

<?php
echo "<br><hr>";
$todos = [];
if (file_exists('todo.txt')) {
    $file = file_get_contents('todo.txt');
    $todos = unserialize($file);
}

if (isset($_POST['todo'])) {
    $data = $_POST['todo'];
    $todos[] = [
        'todo' => $data,
        'status' => 0
    ];
    file_put_contents('todo.txt', serialize($todos));
    header('Location: index.php');
}
if (isset($_GET['status'])) {
    $todos[$_GET['key']]['status'] = $_GET['status'];
    file_put_contents('todo.txt', serialize($todos));
    header('Location: index.php');
}

print_r($todos);
?>

<h1>Todo List</h1>
<form method="POST">
    <label>Apa Kegiatan Mu hari ini </label>
    <input type="text" name="todo">
    <button type="submit">Simpan</button>
</form>

<ul>
    <?php foreach ($todos as $key => $value): ?>
        <li>
            <input type="checkbox" name="todo" onclick="window.location.href='index.php?status=<? if ($value['status'] == 1) echo '0';
                                                                                                else echo '1'; ?> &key=<?php echo $key ?>'"
                <?php if ($value['status'] == 1) echo 'checked' ?>>
            <label><?php echo $value['todo']; ?>
                <?php if ($value['status'] == 1) echo '<del>' . $value['todo'] . '</del>';
                else echo $value['todo']; ?>
            </label>
            <a href="#">Hapus</a>
        </li>
    <?php endforeach; ?>
</ul>