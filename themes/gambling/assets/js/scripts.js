import $ from 'jquery'
window.$ = window.jQuery = $;
import Swal from 'sweetalert2'// core version + navigation, pagination modules:

import Swiper, { Navigation, Pagination, EffectFade, EffectFlip } from 'swiper';

import AOS from 'aos';
import * as Mask from 'jquery.maskedinput';

// configure Swiper to use modules
Swiper.use([Navigation, Pagination, EffectFade, EffectFlip]);



const App = {
    gamesParamsCardsSlider: () => {
        const gamesParamsCards = $('.games-params-cards');
        if ( gamesParamsCards && gamesParamsCards.length ) {
            gamesParamsCards.each(function() {
                const self = $(this);
                const slider = new Swiper(self.find('.swiper-container').get(0), {
                    slidesPerView: 1.171875,
                    // slidesPerView: 'auto',
                    spaceBetween: 16
                });
            });
        }
    },
    bonusCodesCardsSlider: () => {
        const gamesParamsCards = $('.bonus-codes-cards');
        if ( gamesParamsCards && gamesParamsCards.length ) {
            gamesParamsCards.each(function() {
                const self = $(this);
                const slider = new Swiper(self.find('.swiper-container').get(0), {
                    slidesPerView: 1,
                    spaceBetween: 16,
                    pagination: {
                        el: self.find('.swiper-pagination').get(0),
                        type: 'bullets',
                        clickable: true
                    },
                });
            });
        }
    },
    tabsNavSlider: () => {
        const tabsNavSlider = $('.tabs');
        if ( tabsNavSlider && tabsNavSlider.length ) {
            const showTab = (tabs, index) => {
                if (index === undefined) return false;
                
                tabs.find('.tabs-nav__link').removeClass('_active');
                tabs.find('.tabs-nav__link').eq(index).addClass('_active');
                tabs.find('.tabs-content__item').removeClass('_active');
                tabs.find('.tabs-content__item').eq(index).addClass('_active');
            };

            tabsNavSlider.each(function() {
                const self = $(this);
                const slider = new Swiper(self.find('.swiper-container').get(0), {
                    slidesPerView: 'auto',
                    slideToClickedSlide: true,
                    freeMode: true,
                    spaceBetween: 10,
                    on: {
                        click: function (e) {
                            showTab(self, e.clickedIndex);
                        },
                    }
                });
            });
        }
    },
    accordion: () => {
        const accordionTrigger = $('.accordion-item__heading');
        accordionTrigger.on('click', function (e) {
           $(this).toggleClass('_active');
        });
    },
    headerSearchToggle: () => {
        $('.header-search__btn').on('click', function (e) {
            $('.header-search-form__wrapper').toggleClass('_show');
        });
    },
    headerNavToggle: () => {
        $('.header-nav__btn, .mobile-nav__btn').on('click', function (e) {
            $('body').toggleClass('_show-mobile-nav');
        });
    },
    toggleMobileSubNav: () => {
        $('.mobile-nav-menu-item__link.hasSubNav').on('click', function (e) {
            e.preventDefault();
            $(this).toggleClass('_showSubNav');
        });
    },
    _initFunctions() {
        this.toggleMobileSubNav();
        this.headerNavToggle();
        this.headerSearchToggle();
        this.gamesParamsCardsSlider();
        this.bonusCodesCardsSlider();
        this.tabsNavSlider();
        this.accordion();
    },
    _init: function () {
        this._initFunctions();
    }
}
App._init();
