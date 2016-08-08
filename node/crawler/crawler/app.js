var request = require('request');
var cheerio = require('cheerio');

request('http://chanyouji.com/', function (error, response, body) {
    if (!error && response.statusCode == 200) {
        $ = cheerio.load(body);

        console.log($);

    }

});
