const validator = require('html-validator')
const fs = require('fs')
var options = {
  format: 'text',
ignore: 'Error: '
}
 
fs.readFile( 'dist/index.php', 'utf8', (err, html) => {
  if (err) {
    throw err;
  }  
  options.data = html
 
  validator(options)
    .then((data) => {
      console.log(data)
    })
    .catch((error) => {
      console.error(error)
    })
})
    
