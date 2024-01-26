import './bootstrap.js';
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import './styles/app.scss'
import './bootstrap';
require('bootstrap');

import 'bootstrap-icons/font/bootstrap-icons.css';

const burgerMenu = document.querySelector(".burger-menu");
const navMenu = document.querySelector(".nav-menu");

burgerMenu.addEventListener("click", () => {
    burgerMenu.classList.toggle("active");
    navMenu.classList.toggle("active");
  })
  
  document.querySelectorAll(".navbar-link").forEach(n => n.addEventListener("click", () => {
    burgerMenu.classList.remove("active");
    navMenu.classList.remove("active");
  }))