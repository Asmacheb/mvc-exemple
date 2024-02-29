document.addEventListener('DOMContentLoaded', function() {
    var submitButtons = document.querySelectorAll('input[type="submit"]');
    submitButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            var form = this.parentNode;
            var input = form.querySelector('input[type="text"]');
            input.style.display = 'inline-block';
            this.style.display = 'none';
        });
    });
});