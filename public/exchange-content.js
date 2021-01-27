function exchangeContent(c, d) {
    c.classList.remove('showcontainer');
    c.classList.add('hidecontainer')
    setTimeout(function() {
        while (c.hasChildNodes()) {
            c.removeChild(c.lastChild);
        }
        c.innerHTML = d;
    }, 1000);
    setTimeout(function() {
        c.classList.add('showcontainer');
        c.classList.remove('hidecontainer');
    }, 1000);
}
var TIME_PER_PAGE = 10000;
var container_id_arr = ["r5", "r7", "r8"];
var page_index = -1;
window.onload = function() {
function nextPage() {
    setTimeout(nextPage, TIME_PER_PAGE);
    page_index++;
    fetch('getContent', {
        method: 'POST',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            id: page_index%3+1,
            _token: $('meta[name="csrf-token"]').attr('content')
        })   
    })
    .then(function (a) {
        return a.json(); // call the json method on the response to get JSON
    })
    .then(response => {
        container = document.getElementById(container_id_arr[page_index%3]);
        console.log(container_id_arr[page_index%3], page_index%3+1);
        exchangeContent(container, response);
    })
}
nextPage();
}