# Article API #

### Overview ###
The article API was created with NodeJS (and Express JS), and deployed using Github and Heroku. The location of the API is https://mysterious-meadow-98649.herokuapp.com/articles.

### Challenges ###
One notable difference between the files you provided, and the final assignmet is that the app.js file has been renamed server.js. It took a couple of hours troubleshooting this only to realise that the name of the file necessarily needed to be server.js.

## Separation of Function and Content ##
The articles are placed in a JSON file, so that the core code of the application remains separate from the articles (and their content); making it easier to update.
