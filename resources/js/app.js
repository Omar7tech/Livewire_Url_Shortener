import './bootstrap';



document.addEventListener('livewire:navigated', function () {
    const copyButtons = document.querySelectorAll('.copy-btn');

    copyButtons.forEach(button => {
        button.addEventListener('click', function () {
            const shortCode = button.getAttribute('data-shortcode');

            navigator.clipboard.writeText(shortCode)
                .then(() => {
                    const copiedText = button.querySelector('.copied-text');
                    copiedText.classList.remove('hidden');

                    setTimeout(() => {
                        copiedText.classList.add('hidden');
                    }, 2000);
                })
                .catch((err) => {
                    console.error('Failed to copy:', err);
                });
        });
    });
});
