let searchField = document.querySelector("#searchField");
let focusedItem = -1;
let searchRows = [];
let input = document.querySelector("#autocomplete");

function coincidence(storage) {//поиск совпадений в базе
    searchField.innerHTML = '';
    focusedItem = -1;
    let value = input.value.toUpperCase();
    if (value) {
        let coincidencePreps = [];
        storage.forEach((key) => {
            key = key.toUpperCase();
            if (key.indexOf(value) !== -1) {
                coincidencePreps.push(key.toLowerCase());
            }
        })
        show(coincidencePreps);
    }
}

function show(coincidencePreps) {//формирование и показ окна поиска
    searchRows.length = 0;
    coincidencePreps.forEach(prep => {
        let searchRow = document.createElement('div');
        searchRow.textContent = prep;
        searchRow.classList.add('active');
        searchField.appendChild(searchRow);
        searchRows.push(searchRow);
    });
}

function focusedItemSwitch(arrow) {//навигация по поиску
    if (arrow === "down") {
        if (focusedItem >= searchRows.length - 1) {
            focusedItem = 0;
        } else {
            focusedItem++;
        }
    } else if (arrow === "up") {
        if (focusedItem <= 0) {
            focusedItem = searchRows.length - 1;
        } else {
            focusedItem--;
        }
    }
}

function replaceClass() {//замена фокуса
    searchRows.forEach(item => {
        item.classList.remove('focus');
    });
    if (searchRows.length) {
        searchRows[focusedItem].classList.add('focus');
        input.value = searchRows[focusedItem].textContent;
    }
}

function navigation(storage) {//навигация клавишами
    input.addEventListener('keyup', (key) => {
        let keyCode = key.keyCode;
        if (keyCode === 40) { // arrow down
            key.preventDefault();
            focusedItemSwitch("down");
            replaceClass();

        } else if (keyCode === 38) { //arrow up
            key.preventDefault();
            focusedItemSwitch("up");
            replaceClass();

        } else if (keyCode === 13) { // enter
            if (input.value) {
                searchField.innerHTML = '';
                searchRows.length = 0;
                input.value = "";
            }
        } else {
            coincidence(storage);
        }
    })
}

function autocomplete(storage) {
    navigation(storage);
    document.querySelector("#form").addEventListener("submit", e => {
        if (input.value) {
            e.preventDefault();
            searchField.innerHTML = '';
            searchRows.length = 0;
            input.value = "";
        } else {
            e.preventDefault();
            alert("Введите название препарата!");
        }
    })
}

