
const $open = document.querySelector('#open-m');
const $close = document.querySelector('#close-m');
const $nav = document.querySelector('#nav-movil');
const $contentMovil = document.querySelector('.movil-layout');

$open.addEventListener('click', () =>{
	$close.classList.add('d-block');
	$open.classList.add('d-none');
	$contentMovil.classList.add('mostrar');
});

$close.addEventListener('click', () =>{
	$open.classList.remove('d-none');
	$close.classList.remove('d-block');
	$contentMovil.classList.remove('mostrar');		
});