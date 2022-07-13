const searchResult = document.querySelector(".searchResult");
const noDonorsMsg = document.getElementsByClassName("noDonorsMsg");
const donorCard = document.getElementsByClassName("donorCard");

if (noDonorsMsg.length || donorCard.length){
    window.scrollTo({ top: searchResult.offsetTop - 100, behavior: 'smooth'});
}
