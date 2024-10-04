// Function to handle button clicks
function handleStatusChange(event) {
    const button = event.target;
    const marketItem = button.closest('.market-item');
    const statusElement = marketItem.querySelector('.status');

    if (button.classList.contains('pass-btn')) {
        statusElement.textContent = 'Passed';
        statusElement.classList.add('status-passed');
        statusElement.classList.remove('status-failed');
    } else if (button.classList.contains('fail-btn')) {
        statusElement.textContent = 'Failed';
        statusElement.classList.add('status-failed');
        statusElement.classList.remove('status-passed');
    }
}

// Add event listeners to all buttons
const passButtons = document.querySelectorAll('.pass-btn');
const failButtons = document.querySelectorAll('.fail-btn');

passButtons.forEach(button => {
    button.addEventListener('click', handleStatusChange);
});

failButtons.forEach(button => {
    button.addEventListener('click', handleStatusChange);
});