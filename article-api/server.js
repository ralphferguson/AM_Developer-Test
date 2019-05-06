const express = require('express')
const pckg = require('./package.json')
const articles = require('./articles.json')
const app = express()

console.log(`     ${pckg.name}`);
console.log(`     v${pckg.version}`);

app.use(express.static('public'))

app.get("/articles", (req, res) => {

  res.json(articles)

})

app.listen(process.env.PORT || 8080, () => console.log('all is OK'))