const mainSearchContainer = document.querySelector('.main_search_background')
const searchFilterAll = document.querySelectorAll('.search_filter')
const selectSearchAll = document.querySelectorAll('.search_select-hidden')

searchFilterAll.forEach(function(searchFilter, index)   
{

    searchFilter.addEventListener('click', () => {

        selectSearchAll.forEach(function(selectSearch) 
        {
            if(selectSearch.classList.contains('search_select-block'))
            {
                selectSearch.classList.toggle('search_select-block')
            }
        })
        const searchSelect = document.querySelector(`.select-${index}`)
        searchSelect.classList.toggle('search_select-block')    

})})


function getMyPosition() {
    console.log("Appel à getCurrentPosition()");
    
    window.navigator.geolocation.getCurrentPosition(function(position) {
      console.log("Position trouvée : Latitude="+position.coords.latitude+" Longitude="+position.coords.longitude);
      console.log(position.coords);
    }, function(error) {
      console.log("Erreur de géoloc N°"+error.code+" : "+error.message);
      console.log(error);
    });
   }