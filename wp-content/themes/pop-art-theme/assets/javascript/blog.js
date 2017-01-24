const filterList = Array.from(document.querySelectorAll('#blogFilterList a'));
const posts = Array.from(document.querySelectorAll('.post'));

function changeActive(e) {
	document.querySelector('#blogFilterList li.active').classList.remove('active');
	e.target.parentElement.classList.add('active');
}

function filterBlogs(e) {
	e.preventDefault();
	let selected = e.target.textContent;
	selected = selected.replace(/\s+/g, '-').toLowerCase();
	selectedClass = 'category-' + selected;
	if (selectedClass == 'category-all') {selectedClass = 'post'}
	const animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
	
	posts.forEach(post => {
		if (post.classList.contains(selectedClass)) {
			$(post).fadeIn();
		} else {
			$(post).fadeOut();
		}
	});
	
	changeActive(e)
}

filterList.forEach(filterItem => filterItem.addEventListener('click', filterBlogs));