module.exports = {
 description: 'Super Simple Invoicing',
 themeConfig: {
 	logo: '/assets/img/logo_invoice.png',
    nav: [
      { text: 'Home', link: '/' },
      { text: 'Guide', link: '/guide/' },
      { text: 'Invoice Pakistan', link: 'https://app.invoicepakistan.com/' },
    ],
    sidebar: [
      {
        title: 'Group 1',   // required
        path: '/foo/',      // optional, which should be a absolute path.
        collapsable: false, // optional, defaults to true
        sidebarDepth: 1,    // optional, defaults to 1
        children: [
          '/guide/',
          '/installation/',
          '/advance/',
        ]
      },
      {
        title: 'Group 2',
        children: [ 
        	'/'
        ]
      }
    ]
  }

}