<script src="{{asset('../assets/js/jquery-1.11.0.min.js')}}"></script>
<script src="{{asset('../assets/js/plugins.js')}}"></script>
<script src="{{asset('../assets/js/script.js')}}"></script>
{{-- <script>
document.addEventListener('DOMContentLoaded', function () {
    // Get the current page URL
    var currentUrl = window.location.pathname;

    // Remove the '/' at the beginning of the URL, if it exists
    if (currentUrl.startsWith('/')) {
        currentUrl = currentUrl.slice(1);
    }

    // Find the corresponding menu item and add the 'active' class
    var menuItems = document.querySelectorAll('.menu-item');
    menuItems.forEach(function (menuItem) {
        var anchor = menuItem.querySelector('.item-anchor');
        if (anchor.getAttribute('href') === currentUrl) {
            menuItem.classList.add('active');
        }
    });
});

</script> --}}
