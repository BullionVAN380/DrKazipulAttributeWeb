<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Players List</title>
   <link rel="stylesheet" href="style.css" >

    <style>
        table {
            border-collapse:collapse;;
            width: 70%;
            margin: auto;
            margin-top: 5%;
            margin-bottom: 5%;

        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: brown;
        }
        tr:nth-child(even) {
            background-color: burlywood;
        }
        tr{
            background: orange;
        }
        tr:hover {
            background-color: white;
        }
   
        .header{
            background-image: url("field2.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            padding: 20px;
            text-align: center;
            font-size: 30px;
            font-weight: bold;
            color: #111;
            margin-bottom: 20px;
            margin-top: 40px;
            margin-left: 20px;
            margin-right: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 3, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
    </style>
</head>
<body >
<div class="header">
<?php
include "connect.php";

// Check if a delete request was made
if (isset($_POST['delete'])) {
    $emailToDelete = $_POST['email'];
    $deleteQuery = "DELETE FROM `atributes` WHERE email = ?";
    $stmt = $conn->prepare($deleteQuery);
    $stmt->bind_param("s", $emailToDelete);
    
    if ($stmt->execute()) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . $stmt->error;
    }
    $stmt->close();
}

// Check if the connection is still open
if ($conn->ping()) {
    $query = "SELECT * FROM `atributes`";

    // Execute the query
    $result = $conn->query($query);

    if ($result) {
        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Action</th></tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["firstname"] . "</td>";
                echo "<td>" . $row["lastname"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>";
                // Edit form
                echo '<form method="post" action="edit.php">';
                echo '<input type="hidden" name="email" value="' . $row["email"] . '">';
                echo '<input type="submit" name="edit" value="Edit">';
                echo '</form>';
                // Delete form
                echo '<form method="post" action="" onsubmit="return confirm(\'Are you sure you want to delete this record?\');">';
                echo '<input type="hidden" name="email" value="' . $row["email"] . '">';
                echo '<input type="submit" name="delete" value="Delete">';
                echo '</form>';
                echo "</td>";
                echo "</tr>";
            }

            // End HTML table
            echo "</table>";
        } else {
            echo "0 results";
        }
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "Error: Database connection is closed.";
}

$conn->close();
?>
</div>
</body>
</html>


