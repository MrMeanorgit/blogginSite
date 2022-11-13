let homeURL = document.getElementsByClassName('floatLeft')
let blogURL = document.getElementsByClassName('floatMiddle')
let aboutURL = document.getElementsByClassName('floatRight')
let currentURL = document.URL
const something = document.querySelector('a')

if(document.getElementsByClassName('floatLeft')[0].innerHTML==currentURL){
    homeURL[0].style.backgroundColor = '#D95D39'
    blogURL[0].style.backgroundColor = '#ffffff'
    aboutURL[0].style.backgroundColor = '#ffffff'
    console.log("working")
}
if(document.getElementsByClassName('floatMiddle')[0].innerHTML==currentURL){
    homeURL[0].style.backgroundColor = '#ffffff'
    blogURL[0].style.backgroundColor = '#D95D39'
    aboutURL[0].style.backgroundColor = '#ffffff'
}

if(document.getElementsByClassName('floatRight')[0].innerHTML==currentURL){
    homeURL[0].style.backgroundColor = '#ffffff'
    blogURL[0].style.backgroundColor = '#ffffff'
    aboutURL[0].style.backgroundColor = '#D95D39'
}
