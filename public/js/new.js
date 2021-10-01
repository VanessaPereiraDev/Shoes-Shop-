
function changeIcon(from, to) {
    const icon = document.querySelector('#icon')
    icon.addEventListener('click', (e) => {
        let iconEl = e.currentTarget.children[0].children[0]; 0
        iconEl.getAttribute('href') === from
            ? iconEl.setAttribute('href', to)
            : iconEl.setAttribute('href', from)
    })
}

changeIcon('#eye', "#eye-slash")
