
<!
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="view/css/style.css">
    <title>Document</title>
</head>
<body>
<h1><?=siteName;?></h1>
<ul>
    <?php
    if(isset($_POST['add'])) {
        echo "<li>" . $_POST['skrydis'] . "</li>";
        echo "<li>" . $_POST['asmens_kodas'] . "</li>";
        echo "<li>" . $_POST['vardas'] . "</li>";
        echo "<li>" . $_POST['pavarde'] . "</li>";
        echo "<li>" . $_POST['is_kur'] . "</li>";
        echo "<li>" . $_POST['i_kur'] . "</li>";
        if ($_POST['svoris']>20) {

            $kaina = $_POST['kaina'] + 30;
            echo "<li>" . $kaina . "</li>";
        }

        echo "<li>" . $_POST['svoris'] . "</li>";
        echo "<li>" . $_POST['pastabos'] . "</li>";
    }
    ?>
</ul>
<form method="POST">
    <select name="skrydis">
        <?php foreach($flight_nr as $flight):?>
            <option value="<?=$flight;?>"><?=$flight;?></option>
        <?php endforeach;?>
    </select>
    <select name="is_kur">
        <?php foreach($from as $from):?>
            <option value="<?=$from;?>"><?=$from;?></option>
        <?php endforeach;?>
    </select>
    <select name="i_kur">
        <?php foreach($to as $to):?>
            <option value="<?=$to;?>"><?=$to;?></option>
        <?php endforeach;?>
    </select>
    <select name="svoris">
        <?php foreach($weight as $weight):?>
            <option value="<?=$weight;?>"><?=$weight;?> kg.</option>
        <?php endforeach;?>
    </select>
    <input type="text" placeholder="vardas" name="vardas">
    <input type="text" placeholder="pavarde" name="pavarde">
    <input type="text" placeholder="asmens kodas" name="asmens_kodas">
    <input type="text" placeholder="pastabos" name="pastabos">
    <input type="text" placeholder="kaina" name="kaina">
    <button type="submit" name="add">Prideti</button>
</form>
</body>
</html>