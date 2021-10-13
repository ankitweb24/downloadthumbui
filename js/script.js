let url_Field = document.querySelector('.card_header input');
let card_Body = document.querySelector('.card_body');
let thumb = card_Body.querySelector('.thumbnail');
let hiddenInput = document.querySelector('.hidden-input');
let download_Btn = document.querySelector('.download_Btn');
// console.log(url_Field);
// console.log(card_Body);
// console.log(thumb);
// console.log(hiddenInput);
// console.log(download_Btn);

url_Field.addEventListener('keyup', (e)=>{
    // get the value of the input
    let origanalValue  =url_Field.value;
    if(origanalValue.indexOf("https:www.youtube.com/watch?v=") != 1){
        let videoUrl = origanalValue.split("v=")[1].substring(0, 11);
        // console.log(videoUrl);
        let videoImageUrl = `https://img.youtube.com/vi/${videoUrl}/maxresdefault.jpg`;
        if(thumb.src = videoImageUrl){
            thumb.style.display = "block";
        }else{
            thumb.style.display = "none";
        }
    }

    hiddenInput.value = thumb.src;



})
