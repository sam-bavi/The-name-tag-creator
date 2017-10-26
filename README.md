## PHP web-app created ass part of my 'php','mysql','apache' development course.
###### The assigment goal was to create a web-app that could be used to print out visitor nameTags that could be used both as identification and to gather a list in case of emergencies.

*Parts of the code mosly text is in bits in swedish, but the code Is well formated And should be a good base for a starters php project and bootstrap project. Lots of knowledge comes from https://www.codeschool.com/courses/close-encounters-with-php*

**Known Issues**
```
- Save name tag preview as png does not work on Safari, a fix is on Its way
- Parts of css is mallformed when saved as .png
```

**To do**
```
- Add function a function for adding pictures
- Create a 'lists' page that shows all active records in the database sorted by date
```

**Caveats**
```
- All records in the database are shown on the bottom of the page for debug purpose, comment out `php` at the end of `/app(views/content.php` to remove this.
- Most of `php` errors are reported, to remove this comment out the first 3 php lines in `index.php`
- Password to mysql is hard coded in `/app/src/RequestRepository.php`
```
