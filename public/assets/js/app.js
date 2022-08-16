document.addEventListener('DOMContentLoaded', () => {
    const alertMsg = document.querySelector('.alert--message')

    if ( alertMsg ) {
        setTimeout(() => {
            alertMsg.style.display = 'none'
            alertMsg.remove()
        }, 3500)
    }
})