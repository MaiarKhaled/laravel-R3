<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: #f1f1f1;
  padding: 20px;
}

.header {
  background-color: white;
  text-align: center;
  padding: 30px;
  font-size: 40px;
}

.row {
  display: flex;
  flex-wrap: wrap;
}

.leftcolumn {
  float: left;
  width: 75%;
  padding: 20px;
}

.rightcolumn {
  float: left;
  width: 25%;
  padding: 20px;
}

.card {
  background-color: white;
  padding: 20px;
  margin-top: 20px;
}

.footer {
  background-color: white;
  text-align: center;
  padding: 10px;
}
</style>
</head>
<body>

<div class="header">
  <h2>School Blog</h2>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>First blog post</h2>
      <h5>John Doe, Dec 1, 2023</h5>
      <p>Content of the first blog post...</p>
    </div>
    <div class="card">
      <h2>Second blog post</h2>
      <h5>Jane Smith, Dec 2, 2023</h5>
      <p>Content of the second blog post...</p>
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>About Us</h2>
      <p>Some text about the school...</p>
    </div>
    <div class="card">
      <h3>Popular Posts</h3>
      <p>Some popular post links...</p>
    </div>
  </div>
</div>

<div class="footer">
  <h2>Contact Us</h2>
  <p>Email: info@school.com</p>
</div>

</body>
</html>