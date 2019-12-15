function encodeForAjax(input){
    return Object.keys(input).map(function(k){
        return encodeURIComponent(k) + '=' + encodeURIComponent(input[k])
    }).join('&');
}