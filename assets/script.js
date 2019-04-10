const mainSearchContainer = document.querySelector('.main_search_background')
const searchFilterAll = document.querySelectorAll('.search_filter')
const selectSearchAll = document.querySelectorAll('.search_select-hidden')
console.log('pute');



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
