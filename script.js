    document.addEventListener('DOMContentLoaded', function() {
        var editButtons = document.querySelectorAll('.edit_button');
        editButtons.forEach(function(button, index) {
            button.addEventListener('click', function() {
                var formRow = document.querySelectorAll('.form_row')[index];
                var form = formRow.querySelector('form');
                form.style.display = form.style.display === 'none' || form.style.display === '' ? 'block' : 'none';
            });
        });
    });
const formSelector = document.getElementById("formSelector");
	formSelector.addEventListener("change", function() {
	const selectedFormId = this.value;
	const forms = document.querySelectorAll("form");
	
	forms.forEach(form => {
		if (form.id === selectedFormId) {
			form.classList.remove("add_form");
		} else {
			form.classList.add("add_form");
		}
	});
});
