'use strict';

// for hoods json
// {
//   "title": "",
//   "main": "",
//   "extra": "",
//   "restaurants": [""],
//   "rr-links": [""],
//   "attractions": [""],
//   "att-links": [""],
//   "shopping": [""],
//   "shop-links": [""],
//   "housing": [""],
//   "house-links": [""],
//   "imgs": [""]
// }


(function($) {

  // --------- dwell bios -------------- //
  let bioArr

  $.ajax({
    data: 'json',
    url: 'http://localhost/dwell-local/wp-content/themes/dwell-custom/js/bios.json'
  })
  .done(function(obj) {
    console.log('Work')
    bioArr = obj.bios
    bioArr.forEach(buildBios)
  })
  .fail(function() {
    console.log('FAIL')
  })

  const bios = $('.bios')
  const buildBios = person => {
    let personalInfo =
    `
    <div class="bio-person">
      <div class="img">
        <img src="${person.img}" alt="${person.name} headshot">
      </div>
      <div class="info">
        <div class="name">
          <p>${person.name}</p>
        </div>
      <div class="title">
        <p>${person.title}</p>
      </div>
      <div class="bio-p">
        <p>${person.bio}</p>
      </div>`

    // if the team member is not a realtor, they won't have their contact listed, so it will skip to the else
    if (person.phone !== '') {
      let firstName = person.name.split(' ')[0]
      personalInfo +=
      `
          <div class="contact">
            <div class='phone-email'>
              <div class='phone'>
                <i class="fa fa-phone fa-lg" aria-hidden="true"></i>
                <p>${person.phone}</p>
                <a href="tel:+${person.phone}">${person.phone}</a>
              </div>
              <div class='email'>
                <i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i>
                <a href='mailto:${person.email}'>Email ${firstName}</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      `
    } else {
      personalInfo +=
      `
        </div>
      </div>
      `
    }
    bios.append(personalInfo)
  }

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

  const fillHoodTemplate = (hoods) => {
    for(let hoodName in hoods) {
      // grabs jQuery object
      let grabHoodElement = $(`.${hoodName}`)

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

      grabHoodElement.append(hoodTemplate)
    }
  }

})(jQuery)
