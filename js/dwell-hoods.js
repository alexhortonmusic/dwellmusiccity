'use strict';

(function($) {

  // ------------ nashville neighborhoods ---------- //
  $.ajax({
    data: 'json',
    url: 'http://localhost/dwell-local/wp-content/themes/dwell-custom/js/hoods.json'
  })
  .done(function(hoodObj) {
    console.log('Work')
    fillHoodTemplate(hoodObj.hoods)
  })
  .fail(function() {
    console.log('FAIL')
  })

  // populates neighborhood template
  const fillHoodTemplate = (hoods) => {
    for(let hoodName in hoods) {
      // grabs jQuery object
      let grabHoodElement = $(`.${hoodName}`)

      // ---- check if url is a neighborhood page ------ //
      let baseUrl = window.location.href

      // regex to check for neighborhood page
      let hoodTest = /neighborhood/g.test(baseUrl)

      // if hoodTest is false, don't run logic
      if ( hoodTest === true ) {
        console.log('is a neighborhood page')
        // grabs current page name
        let currentPage = grabHoodElement[0].classList[1]

        // hoodName and currentPage should be equal

        let hood = hoods[hoodName]

        let hoodTemplate =
        `
        <div class="page-wrap">
        <div class="hood-title">
        <p>${hood.title}</p>
        </div>
        <div class="hood-info">
        <p class="main">${hood.main}</p>
        <p class="extra extra-hide">${hood.extra}</p>
        <p class='read-more'>Read more</p>
        <p class='read-less extra extra-hide'>Less</p>
        </div>
        <div class="hood-extras">
        <div class="restaurants">
        <p>Restaurants</p>
        <div>
        <ul>
        `
        // loops through restaurants array
        for(let i = 0; i < hood.restaurants.length; i++) {
          hoodTemplate += `<li><a href='#'>${hood.restaurants[i]}</a></li>`
        }

        hoodTemplate +=
        `
        </ul>
        </div>
        </div>
        <div class="attractions">
        <p>Attractions</p>
        <div>
        <ul>
        `
        // loops through attractions array
        for(let i = 0; i < hood.attractions.length; i++) {
          hoodTemplate += `<li><a href='#'>${hood.attractions[i]}</a></li>`
        }

        hoodTemplate +=
        `
        </ul>
        </div>
        </div>
        <div class="shopping">
        <p>Shopping</p>
        <div>
        <ul>
        `
        // loops through attractions array
        for(let i = 0; i < hood.shopping.length; i++) {
          hoodTemplate += `<li><a href='#'>${hood.shopping[i]}</a></li>`
        }

        hoodTemplate +=
        `
        </ul>
        </div>
        </div>
        <div class="housing">
        <p>Housing</p>
        <div>
        <ul>
        `
        // loops through attractions array
        for(let i = 0; i < hood.shopping.length; i++) {
          hoodTemplate += `<li><a href='#'>${hood.shopping[i]}</a></li>`
        }

        hoodTemplate +=
        `
        </ul>
        </div>
        </div>
        </div>
        </div>
        `

        // fills page
        grabHoodElement.append(hoodTemplate)

        // triggers function to allow user to read more/read less
        readMore()

      } else {
        console.log('not a neighborhood page')
        break
      }
    }
  }

  // shows add'l hood info
  const readMore = () => {
    $('.read-more').click(function() {
      $('.extra').removeClass("extra-hide")
      $('.read-more').addClass("extra-hide")
      readLess()
    })
  }

  // hides add'l hood info
  const readLess = () => {
    $('.read-less').click(function() {
      $('.extra').addClass("extra-hide")
      $('.read-more').removeClass("extra-hide")
    })
  }
})(jQuery)
