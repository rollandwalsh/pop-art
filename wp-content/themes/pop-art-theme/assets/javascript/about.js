// CAPABILITIES

const listItems = Array.from(document.getElementById('aboutCapabilitiesList').childNodes);
const contentItems = Array.from(document.getElementById('aboutCapabilitiesContent').childNodes);

function switchCapability(e) {
	const contentSectionName = e.target.dataset.section;
	const contentSection = document.querySelector(`div[data-section=${contentSectionName}Content]`);
	
	function removeActive(e) {
		if (e.className == 'active') {
			e.classList.remove('active');
		}
	}
	
	listItems.forEach(listItem => removeActive(listItem));
	e.target.classList.add('active');
	contentItems.forEach(contentItem => removeActive(contentItem));
	contentSection.classList.add('active');
}

listItems.forEach(listItem => listItem.addEventListener('mouseenter', switchCapability));