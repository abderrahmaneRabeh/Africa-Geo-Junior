function filterBy(filter) {

    let towns = document.querySelectorAll('.town');
    let capital = document.querySelectorAll('.capital');

    if (filter === 'capital') {
        towns.forEach(town => town.classList.add('d-none'));
        capital.forEach(capital => capital.classList.remove('d-none'));
    } else if (filter === 'town') {
        towns.forEach(town => town.classList.remove('d-none'));
        capital.forEach(capital => capital.classList.add('d-none'));
    } else {
        towns.forEach(town => town.classList.remove('d-none'));
        capital.forEach(capital => capital.classList.remove('d-none'));
    }
}
console.log("test");

window.setTimeout(function () {
    console.log(document.querySelectorAll('.town'));
}, 1000)