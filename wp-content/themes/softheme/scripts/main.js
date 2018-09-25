var feed = new Instafeed({
    get: 'user',
    userId: '443106390',
    limit: 8,
    sortBy: 'random',
    accessToken: '443106390.1677ed0.5c3caf56e0f44545bfbc3f595f19b1ba',
    template: '<div class="col box"><a href="{{link}}" target="_blank"><img class="img-fluid" src="{{image}}" /></a></div>',
    resolution: 'low_resolution',
})
feed.run()