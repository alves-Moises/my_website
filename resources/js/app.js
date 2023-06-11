import "../scss/app.scss";
import Menu from "@/Features/menu.js";

import.meta.glob(["../images/**"]);

class Slider {
    constructor() {
        this.currentSlide = 0;

        this.currentOffset = 0;

        this.START = 0;

        this.nextOffset = this.slideOffset * this.currentSlide;

        this.track = document.querySelector("[data-slider-track]");

        this.previousSlideButton = document.querySelector("[data-left-button]");

        this.nextSlideButton = document.querySelector("[data-right-button]");

        this.totalSlides = document.querySelectorAll("[data-slide]").length;

        this.slideOffset = document.querySelector("[data-slide]").offsetWidth;

        this.trackOffset = this.track.scrollWidth;
    }

    increment() {
        this.currentSlide += 1;
    }

    decrement() {
        this.currentSlide -= 1;
    }

    canMoveNext() {
        return this.currentSlide < this.totalSlides - 1;
    }

    canMoveBack() {
        return this.currentSlide < this.totalSlides;
    }

    canMoveFree() {
        return this.canMoveBack() && this.canMoveNext();
    }

    movePrevious() {
        if (this.canMoveBack()) {
            this.decrement();
            this.track.style.left = `-${this.nextOffset}px`;
        }
    }

    moveNext() {
        if (this.canMoveNext()) {
            this.increment();
            this.track.style.left = `${this.nextOffset}px`;
        }
    }

    init() {
        this.previousSlideButton.addEventListener("click", () =>
            this.movePrevious()
        );

        this.nextSlideButton.addEventListener("click", () => this.moveNext());
    }
}

document.addEventListener("DOMContentLoaded", () => {
    const slider = new Slider();
    slider.init();
    Menu();
});
