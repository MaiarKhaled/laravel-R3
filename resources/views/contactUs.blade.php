<!DOCTYPE html>
<html>
<head>
  <title>Contact Us</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .container {
      width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #f8f8f8;
    }
    .form-group {
      margin-bottom: 20px;
    }
    input[type="text"],
    input[type="email"],
    textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    button {
      padding: 10px 20px;
      background-color: #04AA6D;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Contact Us</h1>
    <form action="send_email.php" method="post">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="message">Message:</label>
        <textarea name="message" required></textarea>
      </div>
      <button type="submit">Send Email</button>
    </form>
  </div>
</body>
</html>