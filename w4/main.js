const body = document.body;
document.addEventListener('mouseover', function (event) {
if (event.target.tagName === 'ARTICLE') {
body.style.backgroundColor = 'rgba(0, 0, 0, 0.3)';
}
});
document.addEventListener('mouseout', function (event) {
if (event.target.tagName === 'ARTICLE') {
body.style.backgroundColor = '';
}
});