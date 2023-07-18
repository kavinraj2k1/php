<!DOCTYPE html>
<html>

<head>
    <title>Display Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #007BFF;
        }

        .route-description {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="route-description">
        <h1>Route Description</h1>
        <?php
        session_start();
        if (isset($_SESSION['output'])) {
            echo "<p>" . $_SESSION['output'] . "</p>";
            unset($_SESSION['output']);
        } else {
            echo "<p>No Details about this places</p>";
        }
        ?>
    </div>
</body>

</html>