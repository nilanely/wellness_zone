document.addEventListener("DOMContentLoaded", () => {
    let buttons = document.querySelectorAll(".recipe-types-menu li button")
    buttons.forEach(button => {
        button.addEventListener("click", clickEvent => {
            let currentButtonId = clickEvent.target.id
            alert("Has pulsado un botón :D " + currentButtonId)
        })
    })
})
