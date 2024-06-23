function swapText() {
    const fromInput = document.getElementById('from');
    const toInput = document.getElementById('to');
    const temp = fromInput.value;
    fromInput.value = toInput.value;
    toInput.value = temp;
}

function clearInput(id) {
    document.getElementById(id).value = '';
}