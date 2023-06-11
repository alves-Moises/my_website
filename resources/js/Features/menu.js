const toggleMenu = (link) => {
    const CLASS_NAME = "-visible";

    const overlay = document.querySelector(".global-overlay");

    const menu = document.querySelector(".menu-mobile");

    overlay.classList.toggle(CLASS_NAME);

    menu.classList.toggle(CLASS_NAME);
};

const goToTarget = (event, element, elements, delay = 500) => {
    clearActiveLinks(elements);

    setTimeout(() => {
        element.classList.add("-active");

        window.location.href = event.target.getAttribute("href");
    }, delay);
};

const clearActiveLinks = (links) => {
    links.forEach((link) => {
        link.classList.remove("-active");
    });
};

const listenToggleButtons = () => {
    const CLICK_EVENT = "click";

    const closeButton = document.querySelector(".close");

    const menuButton = document.querySelector(".main-header > .icon");

    menuButton.addEventListener(CLICK_EVENT, toggleMenu);

    closeButton.addEventListener(CLICK_EVENT, toggleMenu);
};

const listenLinks = () => {
    const mobileLinks = document.querySelectorAll(
        ".menu-mobile > .navigation > .link"
    );

    const desktopLinks = document.querySelectorAll(
        ".main-header > .navigation > .link"
    );

    console.log(desktopLinks)

    desktopLinks.forEach((link) => {
        link.addEventListener("click", (event) => {
            event.preventDefault();
            const delay = 0;
            goToTarget(event, link, desktopLinks, delay);
        });
    });

    mobileLinks.forEach((link) => {
        link.addEventListener("click", (event) => {
            event.preventDefault();
            toggleMenu(link);
            goToTarget(event, link, mobileLinks);
        });
    });
};

const Menu = () => {
    listenToggleButtons();

    listenLinks();
};

export default Menu;
