const burgerButton = document.querySelector('.burger-button');
const listMobile = document.querySelector('.list-mobile');
const close = document.querySelector('.close');

burgerButton.addEventListener('click', () => {
    listMobile.style.display = 'block';
    close.style.display = 'block';
});
close.addEventListener('click', () => {
    listMobile.style.display = 'none';
    close.style.display = 'none';
    videoAlert.style.transform = 'translateY(-100%)';
});

// no video
const noVideo = document.querySelector('.no-video');
const videoAlert = document.querySelector('.video-alert');
noVideo.addEventListener('click', () => {
    videoAlert.style.transform = 'translateY(0%)';
    close.style.display = 'block';
});

function ada() {
    if(document.getElementById("input-search").value==="") { 
        document.getElementById('button-search').disabled = true; 
    } else { 
        document.getElementById('button-search').disabled = false;
    }
}