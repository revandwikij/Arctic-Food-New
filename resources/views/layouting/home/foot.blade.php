<script>
    const tabs = document.querySelectorAll('.tab');
    const tabContents = document.querySelectorAll('[data-tab-content]');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            tabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');

            const target = tab.getAttribute('data-tab-target');
            tabContents.forEach(content => {
                content.style.display = content.getAttribute('id') === target.slice(1) ? 'block' : 'none';
            });
        });
    });
</script>
<script src="../assets/js/jquery-1.11.0.min.js"></script>
<script src="../assets/js/plugins.js"></script>
<script src="../assets/js/script.js"></script>
