const mainSearchContainer = document.querySelector('.main_search_background')
const searchFilterAll = document.querySelectorAll('.search_filter')
const selectSearchAll = document.querySelectorAll('.search_select-hidden')

const checkboxChoices = document.querySelectorAll('.checkbox_choices')
const checkboxInput = document.querySelectorAll('.checkbox_choices input')

const submitGenre = document.querySelector('.submit-genre')
const selectSubmitGenre = document.querySelector('.select-genre')
const selectSubmitGenreOption = document.querySelectorAll('.select-genre option')

const submitDate = document.querySelector('.submit-date')
const selectSubmitDate = document.querySelector('.select-date')

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
  searchParams.get('genre')
  selectSubmitGenreOption.forEach(function(_elementOption, index)
  {
    console.log(_elementOption)
    console.log(searchParams.get('genre'))

    if(_elementOption == searchParams.get('genre'))
    {
      console.log('ok')
    }
  })
}

submitGenre.addEventListener('click', function()
{
  const valueSelectGenre = selectSubmitGenre[selectSubmitGenre.selectedIndex].value
  searchParams.delete('genre')
  searchParams.append('genre', valueSelectGenre)
  paramsString.search = searchParams.toString()
  newUrl += paramsString.toString()
  selectSubmitGenreOption[selectSubmitGenre.selectedIndex].setAttribute('selected', 'selected')
  window.location.href = newUrl
  console.log(selectSubmitGenreOption[1])



})

submitDate.addEventListener('click', function()
{
  const valueSelectDate = selectSubmitDate.value
  searchParams.delete('date')
  searchParams.append('date', valueSelectDate)
  paramsString.search = searchParams.toString()
  newUrl += paramsString.toString()
  window.location.href = newUrl
})
 
 
 
 
 
 
// checkboxChoices.forEach(function(_checkboxChoice, indexChoice)
// {
//   _checkboxChoice.addEventListener('click', () => {
    
//     console.log(indexChoice)
//     searchParams.delete(`categorie`)
//     searchParams.append('categorie', checkboxInput[indexChoice].value)

//     paramsString.search = searchParams.toString()
//     newUrl = paramsString.toString()
//     window.location.href = newUrl
//   })
// })
    


if(!(searchParams.has('latitude') || searchParams.has('longitude') || searchParams.has('country')))
{
  getMyPosition()
}


function getMyPosition() {
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
      searchParams.delete('country')
      searchParams.append('country', 'FR')
      paramsString.search = searchParams.toString()
      newUrl += paramsString.toString()
      window.location.href = newUrl
    });
   }