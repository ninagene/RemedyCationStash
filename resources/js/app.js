import './bootstrap';
import 'preline';


// import Alpine from 'alpinejs';

// window.Alpine = Alpine;

// Alpine.start();

(!localStorage.getItem("hs_theme") &&
        window.matchMedia("(prefers-color-scheme: dark)").matches)
 {
    document.documentElement.classList.add("dark");
} else {
    document.documentElement.classList.remove("dark");
}
