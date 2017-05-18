'use strict';

(function($) {
  // ----- use this for production ------
  // const baseURL = window.location.origin
  // console.log(baseURL)
  const baseURL = 'http://localhost/dwell-local'

  // ----- populate featured listings ------- //
  let featuredListings = $('.featured-listings-list')

  $.ajax({
    data: 'json',
    url: baseURL + '/wp-content/themes/dwell-custom/js/featuredprops.json'
  })
  .done(function(props) {
    console.log('SUCCESS')
    props.featuredProps.forEach(buildProps)
  })
  .fail(function() {
    console.log('FAIL')
  })


  // --- delete this when site goes to production
  const buildProps = (prop, i) => {

    let property =
    `
      <a href="${baseURL}/${prop.listingLink}">
        <div id='prop-${i}' class='listing' style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('${prop.mainImg}');">
            <div class='prop-info'>
              <p class='address'>${prop.address}</p>
              <p class='price'>$${prop.price}</p>
            </div>
        </div>
      </a>

    `
    featuredListings.append(property)
  }



})(jQuery)
