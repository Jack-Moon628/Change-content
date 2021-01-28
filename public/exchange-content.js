function exchangeContent(id, data) {
    // exchange content
    c = document.getElementById(id);
    c.classList.remove('showcontainer');
    c.classList.add('hidecontainer')
    setTimeout(function() {
        while (c.hasChildNodes()) {
            c.removeChild(c.lastChild);
        }
        c.innerHTML = data;
    }, 1000);
    setTimeout(function() {
        c.classList.add('showcontainer');
        c.classList.remove('hidecontainer');
    }, 1000);
}

function changeStyle(id, style_arr) {
    console.log(id, style_arr);
    $(id).css("transition", "all 2s");
    // $(id).css(style_arr[0], style_arr[1]);
    style_arr.map(style => $(id).css(style[0], style[1]));
}


var TIME_PER_PAGE = 10000;
var container_id_arr = ["r5", "r7", "r8"];
var styles = [
    [["background-color", "yellow"], ["color", "red"]],
    [["background-color", "red"], ["color", "blue"]],
    [["background-color", "blue"],["color", "yellow"]]
]; 
var page_index = -1;
window.onload = function() {
function nextPage() {
    setTimeout(nextPage, TIME_PER_PAGE);
    page_index++;
    //Set style
    var id = "#".concat(container_id_arr[page_index]);
    changeStyle(id, styles[page_index%3]);
    // styles[page_index].map(style_arr => changeStyle(id, style_arr));

    //change content
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
        
        // console.log(container_id_arr[page_index%3], page_index%3+1);
        exchangeContent(container_id_arr[page_index%3], response);
    })
}
nextPage();
}