function AddBookmark(title, href)
{
        if((typeof window.sidebar == "object") && (typeof window.sidebar.addPanel == "function") ) {
//                window.sidebar.addPanel( document.title, location.href,  "" );
                window.sidebar.addPanel( title, href,  "" );
	} else if( document.all ) {
		if(navigator.appName.indexOf('Microsoft') >= 0 ) {
//			window.external.AddFavorite( location.href, document.title );
			window.external.AddFavorite( href, title );
		} else if (navigator.appName && navigator.appName.indexOf("Netscape")>=0 ) {
			document.alert( "To bookmark press Ctrl-D in browser" );
		}
	} else if( window.opera && window.print ) {
		return true;
	}
}

function processNewArticle(myhref){
	var userInput = prompt('Number of articles', '1');
	if (userInput != '' && userInput != null) {
		var userNum = parseInt(userInput);
		if (userNum > 0 && userNum <= 20){
			myhref.href = myhref.href + "&articleCount=" + userNum;
			return true;
		}
		alert("Number of articles must be >= 1 and <= 20");
	}
	return false;
}