// public/js/ajax.js
function sendAjaxRequest(url, method, data = {}, successCallback, errorCallback) {
    fetch(url, {
        method: method,
        headers: {
            'Content-Type': 'application/json',
            'X-Requested-With': 'XMLHttpRequest',
        },
        body: method !== 'GET' ? JSON.stringify(data) : null,
    })
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            return response.json();
        })
        .then(data => successCallback(data))
        .catch(error => errorCallback(error));
}
