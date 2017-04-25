
(function($) {

  console.log('TEST')

  // --------- dwell bios -------------- //
  const bios = $('.bios')

  const bioArr = [
    {
      name: 'Alex Horton',
      title: 'Developer',
      img: 'http://localhost/dwell-local/wp-content/uploads/2017/04/Screen-Shot-2016-08-19-at-1.33.53-PM.png',
      bio: 'Eu laborum ad nulla sint qui adipisicing mollit est proident anim voluptate dolore dolore sunt ex irure occaecat. Enim quis sit proident Lorem culpa esse proident velit qui ex voluptate consequat velit eu. Deserunt culpa adipisicing duis velit eiusmod et enim reprehenderit fugiat non aliqua eiusmod adipisicing ut laborum velit culpa. Cupidatat ex ipsum commodo tempor aliqua et magna eiusmod veniam excepteur est ut minim consequat. Officia est culpa officia officia pariatur esse sit.',
      phone: '513-555-5555',
      email: 'alex@elevateunited.com'
    },
    {
      name: 'Alex Horton',
      title: 'Developer',
      img: 'http://localhost/dwell-local/wp-content/uploads/2017/04/Screen-Shot-2016-08-19-at-1.33.53-PM.png',
      bio: 'Eu laborum ad nulla sint qui adipisicing mollit est proident anim voluptate dolore dolore sunt ex irure occaecat. Enim quis sit proident Lorem culpa esse proident velit qui ex voluptate consequat velit eu. Deserunt culpa adipisicing duis velit eiusmod et enim reprehenderit fugiat non aliqua eiusmod adipisicing ut laborum velit culpa. Cupidatat ex ipsum commodo tempor aliqua et magna eiusmod veniam excepteur est ut minim consequat. Officia est culpa officia officia pariatur esse sit.',
      phone: '',
      email: ''
    }
  ]

  bioArr.forEach(person => {
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

        if (person.phone !== '') {
          personalInfo +=
            `
            <div class="contact">
              <p>To contact ${person.name}:</p>
              <p>Call directly at ${person.phone}</p>
              <a href='mailto:${person.email}'></a>
              <p>or</p>
              <p>Call Village Real Estate Services at (615) 383-6964</p>
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

  })


})(jQuery)
