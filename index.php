<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XSS Injection Challenge</title>
</head>
<body>
    <h1>Welcome to the XSS Injection Challenge!</h1>
    
    <p>Search for something:</p>
    <form method="GET" action="">
        <input type="text" name="search" placeholder="Enter your search term">
        <button type="submit">Search</button>
    </form>

    <?php
    // عرض النص المدخل من المستخدم (دون تصفية) والذي قد يحتوي على XSS
    if (isset($_GET['search'])) {
        $search = $_GET['search'];
        echo "<p>Your search query: $search</p>";
    }
    ?>

    <!-- The flag is hidden in the response when JavaScript is executed -->
    <script>
        // The flag is hidden inside a JavaScript alert when injected
        var flag = "CTF{XSS_exploited_successfully}";
    </script>
</body>
</html>
