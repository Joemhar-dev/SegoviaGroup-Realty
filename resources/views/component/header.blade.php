<div class="header">

    <div class="title">
            <img src="{{ asset('images/sg_logo.jpeg') }}">
            <a href="#home"><h1>SG Realty</h1></a>
    </div>
    <div class="nav-menu">
            <a href="../views/index.php" id="home">Home</a>
            <a href="../properties/for-sale.php" id="for-sale">For Sale</a>
            <a href="#" id="for-lease">For Lease</a>
            <a href="#" id="about">About Us</a>
            <a href="#" id="partners">Our Partners</a>
            <a href="#" id="contact">Contact Us</a>
    </div>
    <!-- Toggle Button -->
    <button id="sidebarToggle" type="button" class="menu-button" aria-labelledby="menuButtonLabel">
  <span class="menu-button__line">
    <span id="menuButtonLabel" style="display: none">Menu Button</span>
  </span>
</button>
    <!-- <button id="sidebarToggle" class="btn btn-primary mt-3">Toggle Sidebar</button> -->

</div>
 <!-- Sidebar -->
 <div id="sidebar" class="">
  <h3>Menu</h3>
    <nav class="nav">
      <a href="{{ url('/')}}" class="nav-link" id="home-sidebar">Home</a>
      <a href="#" class="nav-link">For Sale</a>
      <a href="#" class="nav-link">For Lease</a>
      <a href="#" class="nav-link">About Us</a>
      <a href="#" class="nav-link">Our Partners</a>
      <a href="#" class="nav-link">Contact Us</a>
    </nav>
  </div>

  <!-- Overlay -->
  <div id="sidebar-overlay"></div>

  <script>
document.getElementById('sidebarToggle').addEventListener('click', function () {
  const sidebar = document.getElementById('sidebar');
  const overlay = document.getElementById('sidebar-overlay');
  sidebar.classList.toggle('active');
  overlay.classList.toggle('active');
});

document.getElementById('sidebar-overlay').addEventListener('click', function () {
  const sidebar = document.getElementById('sidebar');
  const overlay = document.getElementById('sidebar-overlay');
  sidebar.classList.remove('active');
  overlay.classList.remove('active');
});
</script>

