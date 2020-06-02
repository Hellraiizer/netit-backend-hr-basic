var pageSerachCollection = window.location.search.split('?');
var loadPage             = pageSerachCollection[1] ? 
                           pageSerachCollection[1] : 
                           'Mainpage';
                   
                   
                   
             
                   
var ScriptReferrence = {
    
    registration : {
        script      : registrationScript,
        isPublic    : true,
},  


var xmlHttpRequest  = new XMLHttpRequest();
var requestMethod   = "GET";

var url             = `http://localhost/TestHR1/scripts/application-register/${loadPage}/Mainpage.html`;

xmlHttpRequest.open(requestMethod, url);