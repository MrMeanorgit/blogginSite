let homeURL = document.getElementsByClassName('floatLeft')
let blogURL = document.getElementsByClassName('floatMiddle')
let aboutURL = document.getElementsByClassName('floatRight')
let currentURL = document.URL
const something = document.querySelector('a')

    let pageName =document.getElementsByClassName('recent')[0]?.textContent?.trim().replace("\n","")
    if(pageName=='Recent Blogs'){
        homeURL[0].style.backgroundColor = '#D95D39'
        blogURL[0].style.backgroundColor = '#ffffff'
        aboutURL[0].style.backgroundColor = '#ffffff'
    }
    else if(pageName=='All My Blogs'){
        homeURL[0].style.backgroundColor = '#ffffff'
        blogURL[0].style.backgroundColor = '#D95D39'
        aboutURL[0].style.backgroundColor = '#ffffff'
    }else{
            homeURL[0].style.backgroundColor = '#ffffff'
            blogURL[0].style.backgroundColor = '#ffffff'
            aboutURL[0].style.backgroundColor = '#D95D39'
            
    }
    
