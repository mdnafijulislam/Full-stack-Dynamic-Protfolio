<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Welcome to My Portfolio</h2>
    <?php
        $name = "John Doe";
        $age = 30;
        $skills = ["HTML", "CSS", "JavaScript", "PHP", "Laravel"];
    ?>
    <p>My name is <?php echo $name; ?> and I am <?php echo $age; ?> years old.</p>
    <h3>My Skills:</h3>
    <ul>
        <?php foreach ($skills as $skill): ?>
            <li><?php echo $skill; ?></li>
        <?php endforeach; ?>
    </ul> 
        <?php
    $name = readline("Enter your name: ");
    echo "Hello, " . $name . "\n";
    ?>
</body>
</html>