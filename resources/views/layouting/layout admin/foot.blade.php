<script>
    // Get the current path of the page
    var currentPath = window.location.pathname;

    // Remove the trailing slash if present
    currentPath = currentPath.replace(/\/$/, "");

    // Find the corresponding navigation link and add 'active' class
    var navLinks = document.querySelectorAll(".navbar-nav .nav-link");
    navLinks.forEach(function(link) {
        var linkPath = link.getAttribute("href");
        if (linkPath === currentPath) {
            link.classList.add("active");
        }
    });
</script>
