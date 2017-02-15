var buildify = require('buildify');
var css_files = ["dist/css/min/styles.css","dist/css/min/form.css","dist/css/min/logo_styles.css"];
 
buildify()
  .concat(css_files)
  .save('dist/css/css-min.css')
