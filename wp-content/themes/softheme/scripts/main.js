var feed = new Instafeed({
    get: 'user',
    userId: '2918214459',
    limit: 8,
    sortBy: 'random',
    accessToken: '2918214459.1677ed0.9774bec2225b4925b99cc7ef5a787c84',
    template: '<div class="col box"><a href="{{link}}"><img class="img-fluid" src="{{image}}" /></a></div>',
    resolution: 'low_resolution',
})
feed.run()