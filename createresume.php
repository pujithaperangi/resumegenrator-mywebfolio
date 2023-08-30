<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
   
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
   <style>
    fieldset {
    border: 1px solid #ccc;
    padding: 10px;
    margin: 20px 0;
  }

  legend {
    font-weight: bold;
  }
    </style>
</head>
<body>
    
   

        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            echo "<h2>Submitted Details:</h2>";
            echo "<p>Name: " . $_POST["name"] . "</p>";
            echo "<p>Headline: " . $_POST["headline"] . "</p>";
            echo "<p>Objective: " . $_POST["objective"] . "</p>";
            echo "<p>Email: " . $_POST["email"] . "</p>";
            echo "<p>Mobile: " . $_POST["contact"] . "</p>";
            echo "<p>Address: " . $_POST["address"] . "</p>";
            echo "<p>Skills: " . implode(", ", $_POST["skill"]) . "</p>";
            // Extract and display other fields as needed
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> 
    <script>
        // JavaScript code for adding skills goes here...
    </script>
</body>
</html>
