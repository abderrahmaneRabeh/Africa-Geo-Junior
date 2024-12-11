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

function search() {

    let searchBar = document.getElementById('searchBar');

    let searchBarValue = searchBar.value.toLowerCase();

    console.log(searchBarValue);


    let towns = document.querySelectorAll('.town');
    let capital = document.querySelectorAll('.capital');



}

window.setTimeout(function () {
    console.log(document.querySelectorAll('.town'));
}, 1000)