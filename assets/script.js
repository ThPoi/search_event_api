const mainSearchContainer = document.querySelector('.main_search_background')
const searchFilterAll = document.querySelectorAll('.search_filter')
const selectSearchAll = document.querySelectorAll('.search_select-hidden')

const submitGenre = document.querySelector('.submit-genre')
const selectSubmitGenre = document.querySelector('.select-genre')
const selectSubmitGenreOption = document.querySelectorAll('.select-genre option')

const selectFamily = document.querySelector('.checkbox-family')
const selectFamilyInput = document.querySelector('.checkbox-family-input')

const submitDate = document.querySelector('.submit-date')
const selectSubmitDate = document.querySelector('.select-date')

const loader = document.querySelector('.loader_container')
const eventContainer = document.querySelector('.event_container')

const searchInput = document.querySelector('.main_search_event input')

const submitCountry= document.querySelector('.submit-country')
const searchFilterCountry = document.querySelector('.search-filter-country')
const searchFilterCountryOption = document.querySelector('.search-filter-country option')


const loaderChange = () =>
{
  loader.classList.toggle('loader_display')
  eventContainer.classList.toggle('hidden')

}

searchFilterAll.forEach(function(_searchFilter, index)   
{

    _searchFilter.addEventListener('click', () => {

        selectSearchAll.forEach(function(_selectSearch) 
        {
            if(_selectSearch.classList.contains('search_select-block'))
            {
                _selectSearch.classList.toggle('search_select-block')
            }
        })
        const searchSelect = document.querySelector(`.select-${index}`)
        searchSelect.classList.toggle('search_select-block')    

})})

let paramsString = new URL(window.location.href)

let query_string = paramsString.search

let searchParams = new URLSearchParams(query_string)

let newUrl = ''


if(searchParams.has('genre'))
{  
  selectSubmitGenreOption.forEach(function(_elementOption, index)
  {
    if(_elementOption.value == searchParams.get('genre'))
    {
      _elementOption.setAttribute('selected', '')
    }
  })
}
if(searchParams.has('country'))
{  
  selectFilterCountryOption.forEach(function(_elementOption, index)
  {
    if(_elementOption.value == searchParams.get('country'))
    {
      _elementOption.setAttribute('selected', '')
    }
  })
}

if(searchParams.has('family'))
{
  selectFamilyInput.setAttribute('checked', '')
}
if(searchParams.has('keyword'))
{
  searchInput.value = searchParams.get('keyword')
}

submitGenre.addEventListener('click', function()
{
  loaderChange()
  const valueSelectGenre = selectSubmitGenre[selectSubmitGenre.selectedIndex].value
  searchParams.delete('genre')
  searchParams.append('genre', valueSelectGenre)
  selectSubmitGenreOption[selectSubmitGenre.selectedIndex].setAttribute('selected', 'selected')
  paramsString.search = searchParams.toString()
  newUrl += paramsString.toString()
  window.location.href = newUrl
})

submitCountry.addEventListener('click', function()
{
  loaderChange()
  const valueSelectCountry = searchFilterCountry[searchFilterCountry.selectedIndex].value
  searchParams.delete('country')
  searchParams.append('country', valueSelectCountry)
  searchFilterCountryOption[searchFilterCountry.selectedIndex].setAttribute('selected', 'selected')
  paramsString.search = searchParams.toString()
  newUrl += paramsString.toString()
  window.location.href = newUrl
})


submitDate.addEventListener('click', function()
{
  loaderChange()
  const valueSelectDate = selectSubmitDate.value
  searchParams.delete('date')
  searchParams.append('date', valueSelectDate)
  paramsString.search = searchParams.toString()
  newUrl += paramsString.toString()
  window.location.href = newUrl
})
 
searchInput.addEventListener('keypress', (_event) => {
  if(_event.code==='Enter') 
  {
    const valueSearchInput = searchInput.value
    searchParams.delete('keyword')
    searchParams.append('keyword', valueSearchInput)
    paramsString.search = searchParams.toString()
    newUrl += paramsString.toString()
    window.location.href = newUrl
  }
})

selectFamily.addEventListener('click', () => {
    
  loaderChange()
  if(!(selectFamilyInput.hasAttribute('checked')))
  {
    searchParams.append('family', 'yes')
  }
  else
  {
    searchParams.delete(`family`)
    
  }
  paramsString.search = searchParams.toString()
  newUrl = paramsString.toString()
  window.location.href = newUrl

})

    



if(!(searchParams.has('latitude') || searchParams.has('longitude') || searchParams.has('country')))
{
  getMyPosition()
}


function getMyPosition() {
    loaderChange()

    console.log("Appel à getCurrentPosition()");
    
    window.navigator.geolocation.getCurrentPosition(function(position) {
      
      console.log("Position trouvée : Latitude="+position.coords.latitude+" Longitude="+position.coords.longitude);
      console.log(position.coords);
      searchParams.delete('latitude')
      searchParams.delete('longitude')

      searchParams.append('latitude', position.coords.latitude)
      searchParams.append('longitude', position.coords.longitude)
      paramsString.search = searchParams.toString()
      newUrl = paramsString.toString()
      window.location.href = newUrl

    }, function(error) {
      console.log("Erreur de géoloc N°"+error.code+" : "+error.message);
      console.log(error);
      loaderChange()


    });
   }