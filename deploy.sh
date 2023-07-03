wget --no-clobber --convert-links -nH --cut-dirs=2 -r -p -E -e robots=off -U mozilla http://localhost/annandmatthew.co/www/ -P /Applications/MAMP/htdocs/annandmatthew.co/docs
git add .
git commit -m "deploying changes"
git push