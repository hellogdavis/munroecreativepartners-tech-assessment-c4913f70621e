var FilterActions = (function() {
	var pageNumber = 0;

	var callAjax = function(page, postType) {
		console.log(postType);
		pageNumber = page;
		var xhr = new XMLHttpRequest();
		xhr.open('POST', my_ajax.ajaxurl, true);
		xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded;');
		xhr.send('action=filterposts&posttype=' + postType + "&page_number=" + pageNumber);

		if(document.querySelectorAll('.spinner-load').length > 0) {
			document.querySelector('.spinner-load').style.display = "block";
		}

		xhr.onreadystatechange = function () {
			if (xhr.readyState === 4) {
				if (xhr.status === 200) {
					var response = JSON.parse(xhr.responseText);
					console.log(response, 'response');
					var posts = document.querySelector('.posts-row');
					posts.insertAdjacentHTML('beforeend', response['posts']);
					bubbleAnimation(response['args']['posts_per_page']);
					if(response['last_page'] === response['page']) {
						document.querySelector('.load-more').style.display = "none";
					} else {
						document.querySelector('.load-more').style.display = "inline-block";
					}

					if(document.querySelectorAll('.spinner-load').length > 0) {
						document.querySelector('.spinner-load').style.display = "none";
					}
				} else {
					console.log('Error: ' + xhr.status);
				}
			}
		};
	}

	var loadMore = function(postType) {
		console.log(postType);
		pageNumber++;
		callAjax(pageNumber, postType);
	}

	function bubbleAnimation(postsPerPage) {
        if(document.querySelectorAll('.bubbles').length > 0) {
            let bubbles = document.querySelectorAll('.bubbles');
            let bubblesArray = Array.prototype.slice.call(bubbles);
            let newBubbles = bubblesArray.slice(parseInt(postsPerPage) * -1);
            console.log(newBubbles);
            for(let x = 0; x < newBubbles.length; x++) {
                let tlImageText = gsap.timeline();
                let animation = tlImageText
                .from(newBubbles[x].querySelector('.image-text-c1'), {duration: 1, ease: "elastic.out(1, 0.3)", x: 100, y: -100})
                .from(newBubbles[x].querySelector('.image-text-c2'), {duration: 1, ease: "elastic.out(1, 0.3)", x: 100, y: -100}, "-=.8")
                .from(newBubbles[x].querySelector('.image-text-c3'), {duration: 1, ease: "elastic.out(1, 0.3)", x: -65, y: 65}, "-=1")
                .from(newBubbles[x].querySelector('.image-text-c4'), {duration: 1, ease: "elastic.out(1, 0.3)", x: -65, y: 65}, "-=.8")
            }
        }
	}
	return {
		callAjax: callAjax,
		loadMore: loadMore,
	}
})();

document.addEventListener('click', function(event) {
	if(event.target.matches('.load-more')) {
		FilterActions.loadMore(event.target.getAttribute('data-posttype'));
	}
}, false);