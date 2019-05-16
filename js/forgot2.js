document.addEventListener('deviceready', function () {
    cordova.plugins.email.isAvailable(
        function (isAvailable) {
            alert("is email mobile available? " + (isAvailable ? "Yes" : "No"));
            if(isAvailable){
             window.plugin.email.open({
                 to:      'indrarikkudo@yahoo.com',
                 subject: 'Greetings',
                 body:    'How are you? Nice greetings from Leipzig'
             }, callback, scope);
           }
        }
    );
}, false);

function callback(){
    console.log("callback function");
}

function scope(){
    console.log("scope function");
}