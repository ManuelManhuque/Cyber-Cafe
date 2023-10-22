let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () => {
    navbar.classList.toggle('active');
    searchForm.classList.remove('active');
    cartItem.classList.remove('active');
}

let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () => {
    searchForm.classList.toggle('active');
    navbar.classList.remove('active');
    cartItem.classList.remove('active');
}

let cartItem = document.querySelector('.cart-items-conteiner');

document.querySelector('#cart-btn').onclick = () => {
    cartItem.classList.toggle('active');
    navbar.classList.remove('active');
    searchForm.classList.remove('active');
}

window.onscroll = () => {
    navbar.classList.remove('active');
    searchForm.classList.remove('active');
    cartItem.classList.remove('active');
}


// aqui comeca o comportamento do login
const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});
// aqui termina o comportamento do login


// dropdown menu comeca aqui

// const dropdowns = document.querySelectorAll('.dropdown');

// dropdowns.forEach(dropdown => {
//     const select = dropdown.querySelector('.select');
//     const caret = dropdown.querySelector('.caret');
//     const menu = dropdown.querySelector('.menu');
//     const options = dropdown.querySelectorAll('.menu li');
//     const selected = dropdown.querySelector('.selected');

//     select.addEventListener('click', () => {
//         select.classList.toggle('select-clicked');
//         caret.classList.toggle('select-rotate');
//         menu.classList.toggle('menu-open');
//     });

//     options.forEach(option => {
//         select.innerText = option.innerText;
//         select.classList.remove('select-clicked');
//         caret.classList.remove('caret-rotate');
//         menu.classList.remove('menu-open');

//         options.forEach(option =>{
//             option.classList.remove('active');
//         });
//         option.classList.add('active')
    

//     });
// });


// const dropdowns = document.querySelectorAll('.dropdown');

// dropdowns.forEach(dropdown => {
//     const select = dropdown.querySelector('.select');
//     const caret = dropdown.querySelector('.caret');
//     const menu = dropdown.querySelector('.menu');
//     const options = dropdown.querySelectorAll('.menu li');
//     const selected = dropdown.querySelector('.selected');

//     select.addEventListener('click', () => {
//         select.classList.toggle('select-clicked');
//         caret.classList.toggle('select-rotate');
//         menu.classList.toggle('menu-open');
//     });

//     options.forEach(option => {
//         option.addEventListener('click', () => {
//             // Aqui, definimos o conteúdo selecionado com base na opção clicada
//             selected.innerText = option.innerText;

//             // Removemos as classes relacionadas ao menu suspenso
//             select.classList.remove('select-clicked');
//             caret.classList.remove('caret-rotate');
//             menu.classList.remove('menu-open');

//             // Removemos a classe "active" de todas as opções
//             options.forEach(option => {
//                 option.classList.remove('active');
//             });

//             // Adicionamos a classe "active" apenas à opção clicada
//             option.classList.add('active');
//         });
//     });
// });

// dropdown menu acaba aqui






// dropdown 3.0 menu comeca aqui

var a_parent =  document.querySelectorAll(".a_parent");
var dd_menu_a = document.querySelectorAll(".dd_menu_a");

a_parent.forEach(function(aitem){

		aitem.addEventListener("click", function(){
			a_parent.forEach(function(aitem){
				aitem.classList.remove("active");
			})
			dd_menu_a.forEach(function(dd_menu_item){
				dd_menu_item.classList.remove("active");
			})
			aitem.classList.add("active");
		})
})

dd_menu_a.forEach(function(dd_menu_item){

		dd_menu_item.addEventListener("click", function(){
			dd_menu_a.forEach(function(dd_menu_item){
				dd_menu_item.classList.remove("active");
			})
			dd_menu_item.classList.add("active");
		})
})

// dropdown 3.0 menu termina aqui