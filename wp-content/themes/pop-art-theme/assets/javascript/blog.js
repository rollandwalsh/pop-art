var filterList = Array.from(document.querySelectorAll('#blogFilterList a'));
var posts = Array.from(document.querySelectorAll('.post'));

function changeActive(e) {
	$('#blogFilterList li.active').removeClass('active');
	console.log(e.target.closest('li'));
}

function filterBlogs(e) {
	var selected = e.target.textContent;
	selected = selected.replace(/\s+/g, '-').toLowerCase();
	selectedClass = 'category-' + selected;
	if (selectedClass == 'category-all') {selectedClass = 'post'}
	var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
	
	posts.forEach(post => {
		if (post.classList.contains(selectedClass)) {
			$(post).fadeIn();
		} else {
			$(post).fadeOut();
		}
	});
	
	changeActive(e)
}

$('#blogFilterList a').on('click', function(e) {
	e.preventDefault();
	filterBlogs(e);
})
