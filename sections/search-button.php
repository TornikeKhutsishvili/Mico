<?php

if (isset($_GET['q'])) {
    $query = trim($_GET['q']);
    echo "<h2>Results for: " . htmlspecialchars($query) . "</h2>";
} else {
    echo "<h2>No search query provided.</h2>";
}

?>