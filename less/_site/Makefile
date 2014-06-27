
.PHONY: less


server:
	jekyll server --watch --baseurl=

less:
	lessc less/giornata.less css/giornata.css --clean-css

css: less

dist: 
	cp -R bower_components/stampa/fonts .