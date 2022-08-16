document.addEventListener('DOMContentLoaded', () => {
    const alertMsg = document.querySelector('.alert--message')

    if ( alertMsg ) {
        setTimeout(() => {
            alertMsg.style.display = 'none'
        }, 3500)
    }
})