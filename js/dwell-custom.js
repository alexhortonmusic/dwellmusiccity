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

  // ----- Calls to Actions buttons ----- //

  $('.cta-home').hover(
    function() {
      console.log('on it')
      $('.cta-home a').addClass('cta-home-hover')
    },
    function() {
      console.log('off it')
      $('.cta-home a').removeClass('cta-home-hover')
    }
  )

  // --------- Vimeo Video covers -------- //


  let homepageCover = $('#homepage-video-cover')

  homepageCover.click(function() {
    $('.vimeo-cover').addClass('video-hide')

    // --- AUTOPLAY ONLY WORKS ON DESKTOP FOR NOW
    $('.vimeo-cover-wrap').append(
      `
        <div class="video-box">
          <iframe src="https://player.vimeo.com/video/148142207?autoplay=1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
      `)
  })

})(jQuery)
