document.addEventListener('DOMContentLoaded', () => {
    const editButton = document.getElementById('editButton');
    const saveButton = document.getElementById('saveButton');
    const cancelButton = document.getElementById('cancelButton');
    const editModal = document.getElementById('editModal');
    const dayInput = document.getElementById('day');
    const morningInput = document.getElementById('morning');
    const afternoonInput = document.getElementById('afternoon');
    let currentRow;

    // Abre el modal para editar el horario
    editButton.addEventListener('click', () => {
        const selectedRow = document.querySelector('tr.selected');
        if (selectedRow) {
            currentRow = selectedRow;
            dayInput.value = selectedRow.cells[0].textContent;
            morningInput.value = selectedRow.cells[1].textContent;
            afternoonInput.value = selectedRow.cells[2].textContent;
            editModal.style.display = 'block';
        } else {
            alert('Por favor, selecciona una fila para editar.');
        }
    });

    // Guarda los cambios
    saveButton.addEventListener('click', () => {
        currentRow.cells[1].textContent = morningInput.value;
        currentRow.cells[2].textContent = afternoonInput.value;
        editModal.style.display = 'none';
    });

    // Cancela la edición
    cancelButton.addEventListener('click', () => {
        editModal.style.display = 'none';
    });

    // Selecciona la fila al hacer clic
    const rows = document.querySelectorAll('#horariosTable tbody tr');
    rows.forEach(row => {
        row.addEventListener('click', () => {
            rows.forEach(r => r.classList.remove('selected'));
            row.classList.add('selected');
        });
    });
});
