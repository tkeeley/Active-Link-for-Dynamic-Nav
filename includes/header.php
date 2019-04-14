<style>
  li a {
    color: black;
    text-decoration: none;
  }
  .active {
    font-weight: 600 !important;
    color: red;
    border-bottom: 2px solid red;
  }

  ul {
    display: block;
    text-align: center;
  }

  li {
    list-style: none;
    display: inline-block;
    padding: 20px;
  }
</style>

<nav class="site-nav">
  <ul class="currentPage">
    <li ><a href="index.php">Home</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="services.php">Services</a></li>
    <li><a href="contact.php">Contact</a></li>
  </ul>
</nav>

<!-- Active currentPage -->
<script>
  var currentPage = document.querySelectorAll(".currentPage li a");
  for (var i = currentPage.length - 1; i >= 0; i--) {
    if (currentPage[i].href == document.URL) {
      currentPage[i].setAttribute("class", "active");
    } else {
      currentPage[i].setAttribute("class", "");
    }
  }
</script>
