<?php

// Получение значений коэффициентов квадратного уравнения
$a = intval($_GET['a'] ?? 0);
$b = intval($_GET['b'] ?? 0);
$c = intval($_GET['c'] ?? 0);

// Вычисление дискриминанта
$d = $b * $b - 4 * $a * $c;

// Массив для хранения корней
$roots = [];

// Вычисление корней
if ($d > 0) {
    $roots = [
        (-$b - sqrt($d)) / (2 * $a),
        (-$b + sqrt($d)) / (2 * $a)
    ];
} elseif ($d === 0) {
    $roots[] = -$b / (2 * $a);
}

// Количество корней
$countOfRoots = count($roots);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Квадратные уравнения</title>
</head>
<body>
<form action="example-02.php" method="get">
    <fieldset>
        <label for="a">ax<sup>2</sup> = </label>
        <input type="number" id="a" name="a" value="<?php echo $a ?>" required>

        <label for="b">bx = </label>
        <input type="number" id="b" name="b" value="<?php echo $b ?>" required>

        <label for="c">c = </label>
        <input type="number" id="c" name="c" value="<?php echo $c ?>" required>

        <button type="submit">
            Calculate
        </button>
    </fieldset>
</form>

<?php if ($countOfRoots === 2) : ?>
    <?php foreach ($roots as $index => $root): ?>
        <strong>x<sub><?php echo $index + 1 ?></sub></strong> = <?php echo $root ?>
    <?php endforeach; ?>
<?php elseif ($countOfRoots === 1): ?>
    <strong>x<sub>1</sub></strong> = <?php $roots[0] ?>
<?php else: ?>
    <strong>Корней нет!</strong>
<?php endif; ?>

</body>
</html>
