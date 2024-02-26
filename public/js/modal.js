    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('modal');
        const cancelButton = document.getElementById('cancelButton');
        const submitNilaiButton = document.getElementById('submitNilaiButton');
        const modalState = localStorage.getItem('modalState');

        if (modalState !== 'visible') {
            modal.classList.add('hidden');
            localStorage.setItem('modalState', 'hidden');
        }

        cancelButton.addEventListener('click', () => {
            modal.classList.add('hidden');
        });

        submitNilaiButton.addEventListener('click', () => {
            modal.classList.add('hidden');
            localStorage.setItem('modalState', 'hidden');
            nilaiForm.submit();
        });
    });

    const nilaiButton = document.getElementById('nilaiButton');
    const modal = document.getElementById('modal');
    const nilaiForm = document.getElementById('nilaiForm');

    nilaiButton.addEventListener('click', () => {
        modal.classList.remove('hidden');
        localStorage.setItem('modalState', 'visible');
    });
