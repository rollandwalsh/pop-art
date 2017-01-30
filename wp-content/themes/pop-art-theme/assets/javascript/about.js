function removeActive(e) {
	if (e.classList && e.classList.contains('active')) {
		e.classList.remove('active');
	}
}

// CAPABILITIES

var listItems = Array.from(document.getElementById('aboutCapabilitiesList').childNodes);
var contentItems = Array.from(document.getElementById('aboutCapabilitiesContent').childNodes);

function switchCapability(e) {
	var contentSectionName = e.target.dataset.section;
	var contentSection = document.querySelector('div[data-section=' + contentSectionName + 'Content]');

	listItems.forEach(listItem => removeActive(listItem));
	e.target.classList.add('active');
	contentItems.forEach(contentItem => removeActive(contentItem));
	contentSection.classList.add('active');
}

listItems.forEach(listItem => listItem.addEventListener('mouseenter', switchCapability));

// MEMBERS

var memberContainer = document.querySelector('div.about-management-team-members');
var members = Array.from(document.getElementsByClassName('about-management-team-member'));
var bios = Array.from(document.getElementsByClassName('about-management-team-bio'));

function showBio(e) {
	if (e.target.classList.contains('about-management-team-member')) {
		var selectedMember = e.target;
	} else {
		var selectedMember = e.target.parentElement;
	}
	
	if (!memberContainer.classList.contains('active')) {
		memberContainer.classList.add('active');
	}

	var name = selectedMember.dataset.name;
	var selectedBio = document.querySelector('div.about-management-team-bio[data-name=' + name + ']');
	
	members.forEach(member => removeActive(member));
	selectedMember.classList.add('active');
	bios.forEach(bio => removeActive(bio));
	selectedBio.classList.add('active');
}

members.forEach(member => member.addEventListener('mouseenter', showBio));
