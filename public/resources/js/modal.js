document.getElementById('open-modal-btn').addEventListener('click', ()=> [
    document.getElementById('modal-wrapper').classList.remove("hidden")
]);

document.getElementById('close-btn').addEventListener('click', ()=> [
    document.getElementById('modal-wrapper').classList.toggle("hidden")
]);
