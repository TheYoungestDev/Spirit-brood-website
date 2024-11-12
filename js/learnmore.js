    // Expand and collapse program overview when "Learn More" is clicked
        document.querySelectorAll('.learn-more').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const overview = this.closest('.program').querySelector('.overview');
                overview.classList.toggle('expanded');
            });
        });