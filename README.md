# twitterHashtagMap
Search for Twitter hashtags around the world. Uses the Twitter and Google APIs to place the recent hashtags on the map.

## Notes
- Using Composer, a dependency manager for PHP.
- SSL problem on Windows, solution: https://wordpress.org/support/topic/ssl-certificate-problem-1
- Google, create credentials to access APIs.
- Twitter, create Access Token to access APIs.
- Some users may not have geo enabled on tweets. Location, coordinates, etc, can not be found. Needs to use the location of the user instead. Using statuses->user->location.
- Need to convert the city names into lat and lng information. Temporary cache should be used for optimization.
