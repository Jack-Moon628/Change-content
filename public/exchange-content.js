

function exchangeContent(o, n) {
    // exchange content. id is the id of content that you want to change content. data is a string value you want to exchange to.
    if(o.classList.contains('showcontainer')) {
        o.classList.remove('showcontainer');
    }
    o.classList.add('hidecontainer')
    setTimeout(function() {
        n.style.opacity = '0';
        o.appendAFTER(n);
        o.remove();
    }, 1000);
    setTimeout(function() {
        n.classList.add('showcontainer');
        n.classList.remove('hidecontainer');
    }, 1000);
}

function compareFile(data) {
    var old_content = document.getElementsByTagName("html")[0];
    var new_dom = new DOMParser().parseFromString(data, "text/html");

    compareDom(old_content, new_dom.firstChild);

}

function compareDom(old_d, new_d) {
    console.log(old_d);
    console.log('----------------------');
    console.log(new_d);
    // console.log(old_d.tagName);
    if(old_d.tagName == 'NOSCRIPT') {
        console.log('NOSCRIPT');
    }
    else {
        // divList[0].isEqualNode(divList[2])
        if(old_d.isEqualNode(new_d)) {
            if(!new_d.hasChildNodes()) {
                exchangeContent(old_d, new_d);
                console.log('exchange');
            }
            else {
                var old_chi = old_d.children;
                var new_chi = new_d.children;
                for (let i = 0; i < new_chi.length; i++) {
                    compareDom(old_chi[i], new_chi[i]);
                    // console.log(old_chi[i], new_chi[i]);
                }
            }
        }
        else {
            console.log('same');
        }
    }
}

// function changeStyle(id, style_arr) {
//     //change style. id is the id of content that you want to change style. style_arr is styles array.
//     $(id).css("transition", "all 2s");
//     style_arr.map(style => $(id).css(style[0], style[1]));
// }


var TIME_PER_PAGE = 10000;
// var container_id_arr = ["r5", "r7", "r8"];
// var styles = [
//     [["background-color", "yellow"], ["color", "red"]],
//     [["background-color", "red"], ["color", "blue"]],
//     [["background-color", "blue"],["color", "yellow"]]
// ]; 
var page_index = -1;
window.onload = function() {
function nextPage() {
    setTimeout(nextPage, TIME_PER_PAGE);
    page_index++;
    //Set style
    // var id = "#".concat(container_id_arr[page_index]);
    // changeStyle(id, styles[page_index%3]);

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
        // exchangeContent(container_id_arr[page_index%3], response);
        compareFile(response);
    })
}
nextPage();
}