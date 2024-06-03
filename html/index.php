<?php
if (isset($_GET['userInput'])) {
    $userInput = $_GET['userInput'];
    header("X-Custom-Header: $userInput");

}
// レスポンスを生成
echo "<h1>Log Injection Demo</h1>";
echo "<p>Your input has been logged.</p>";
?>
<!-- <!DOCTYPE html>
<html>
<head>
    <title>HTTP Header Injection Demo</title>
</head>
<body>
    <h1>HTTP Header Injection Demo</h1>
</body>
</html> -->
