<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="script.js" defer></script>
    <title>Fictional Product Landing</title>
</head>
<body>
    <header>
        <h1>Fictional Product</h1>
        <p>Your Innovative Solution</p>
    </header>
    <body>
    <main>
        <section class="product">
            <div class="product-image">
                <img src="https://rocka.co.za/wp-content/uploads/2022/08/e4759a90b95897a58b2f4a5326169c32.png" alt="Product Image">
            </div>
            <div class="product-details">
                <h2>Discover the Next-Gen Product</h2>
                <p>Experience the future with our revolutionary product that will transform the way you live and work.</p>
                <ul>
                    <li>Enhanced efficiency and productivity</li>
                    <li>Seamless integration with your daily tasks</li>
                    <li>Advanced features for a modern lifestyle</li>
                </ul>
            </div>
        </section>
        <section class="contact">
            <h2>Contact Us</h2>
            <div class="response-container">
    <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $message = $_POST["message"];
        }
    ?>
                <form id="contact-form" action="index.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                <button type="submit">Submit</button>
                <p1 id="response-text"></p1>
            </form>
        </section>
    </main>
</body>
</html>
