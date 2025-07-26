 <!-- custom js link-->
 <script src="{{ asset('frontend/assets/js/script.js') }}" defer></script>
 <!-- ionicon link-->
 <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
 <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

 {{-- script Dashboard frontend --}}
 <script>
    document.addEventListener('DOMContentLoaded', function() {
        var dropdownTogglers = document.querySelectorAll('[data-dropdown-toggler]');
        dropdownTogglers.forEach(function(toggler) {
            toggler.addEventListener('click', function() {
                var dropdownMenu = toggler.nextElementSibling;
                dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
            });
        });
    });
</script>
