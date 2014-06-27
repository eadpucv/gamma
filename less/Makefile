
.PHONY: less


server:
	jekyll server --watch --baseurl=

less:
	lessc less/giornata.less ../style.css --clean-css

css: less

dist: 
	cp -R bower_components/stampa/fonts .