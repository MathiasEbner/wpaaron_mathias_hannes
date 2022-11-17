#!/bin/sh
npx sass ./src/sass/style.scss ./public/wp-content/themes/aaron/style.css
cp ./src/index.php ./public/wp-content/themes/aaron
cp ./src/header.php ./public/wp-content/themes/aaron
cp ./src/footer.php ./public/wp-content/themes/aaron
cp ./src/functions.php ./public/wp-content/themes/aaron
cp ./src/favicons/*.* ./public/wp-content/themes/aaron
cp -R ./src/images ./public/wp-content/themes/aaron
cp -R ./src/fonts ./public/wp-content/themes/aaron
npx esbuild ./src/js/main.js --bundle --outfile=./public/wp-content/themes/aaron/main.js  --minify

