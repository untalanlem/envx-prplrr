const searchbar = document.querySelector('.navbar-searchbar')
const searchbar_button = searchbar.querySelector('#searchsubmit')
const searchbar_text = searchbar.querySelector('#searchform div')
const searchbar_img = document.createElement('img')

searchbar_button.setAttribute('value', '')

searchbar_img.setAttribute('src', '/wp-content/uploads/2021/08/search-icon.png')
searchbar_img.classList.add('glass-img')
searchbar_text.append( searchbar_img )

searchbar.querySelector('#s').setAttribute('placeholder', 'Search')
