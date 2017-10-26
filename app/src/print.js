function printFunction() {
			let myWindow = window.open('', 'PRINT', 'height=600,width=600');
    		myWindow.document.write('<html><head>');
            myWindow.document.write('<title>' + document.title  + '</title>');
            myWindow.document.write('<meta charset="utf-8">');
            myWindow.document.write('<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">');
            myWindow.document.write('<link rel="stylesheet" type="text/css" media="print" href="css/application.css" />');
            myWindow.document.write('<link rel="stylesheet" type="text/css" media="print" href="css/eq.css" />');
			myWindow.document.write('</head><body >');
            myWindow.document.write(document.getElementById('print_me').innerHTML);
            myWindow.document.write('<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>');
            myWindow.document.write('<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>');
            myWindow.document.write('<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>');
			myWindow.document.write('</body></html>');
			myWindow.document.close();
			myWindow.focus();
			myWindow.print();
			myWindow.close();
			return true;
		}

