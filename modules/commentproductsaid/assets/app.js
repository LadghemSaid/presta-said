console.log("App.js est correctement ajouté")
if(window.toast){
    toastr.info(window.toast)
    window.toast = undefined
}

//Affichage des date de creation en format momentJs
moment.locale('fr')
$(".p-date").map((x, i) => {
    i.innerText = moment(i.dataset.createdat).local().fromNow();
});