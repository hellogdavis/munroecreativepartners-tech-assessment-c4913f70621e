gsap.registerPlugin(ScrollTrigger);
(function() { 

    // Hero Slider
    (function($) {
        $(document).ready(function() {
            var slider2 = $('.slider2').bxSlider({
				mode: 'horizontal',
				pager: true,
				auto: true,
				useCSS: true,
				controls: false,
				stopAutoOnClick: true,
				preloadImages: 'all',
				//autoHover: true,
				touchEnabled: false,
				easing: 'ease-in-out',
                nextText: '<div class="arrow-next"></div>',
                prevText: '<div class="arrow-prev"></div>',
                // touchEnabled: false,
            });
            
			$('.pager2 > div').on('click', function() {
                $('.active-pager').removeClass('active-pager');
                slider2.goToSlide(parseInt(this.getAttribute('data-index')));
                $(this).addClass('active-pager');
            });
            let sliders = document.querySelectorAll('section.slider');
            for(var x = 0; x < sliders.length; x++) {
                sliders[x].classList.add('transition');
                sliders[x].style.opacity = "1";
            }
			
			
        });
        
    })(jQuery);

    // Team Grid
	/*
    jQuery(document).ready(function() {
        jQuery('.open-popup-link').magnificPopup({
            type:'inline',
            midClick: true,
            removalDelay: 350,
        });
    });
	*/
    // Line Steps DooDads
	/*
    (function() {
        if(document.querySelectorAll('.steps-line .number').length > 0) {
           let tlStepsLine = gsap.timeline({
               scrollTrigger: {
                   trigger: ".steps-line .number",
                   start: "center center",
               }
           });
           let animation = tlStepsLine
           .from(document.querySelectorAll('.steps-line__line'), {duration: .3, opacity: 0, y: 40, })
           .from(document.querySelectorAll('.steps-line__item'), {duration: .3, opacity: 0, y: -40, stagger: .3 })
        }
    })();
	*/
    // Card Icons
    (function() {
        if(document.querySelectorAll('.cards-icon-repeater').length > 0) {
            let tlCardsRepeater = gsap.timeline({
                scrollTrigger: {
                    trigger: ".cards-icon-repeater",
                    start: "center bottom",
                }
            });
            let images = document.querySelectorAll('.cards-icon-repeater .card');
            for(let x = 0; x < images.length; x++) {
                let animation = tlCardsRepeater
                    .from(images[x].querySelector('.image__shrink'), {duration: .4, ease: 'power1.out', opacity: "0", y: '-30px'}, "-=" + (x === 0 ? "0" : ".2"))
                    .from(images[x].querySelector('.info'), {duration: .4, ease: 'power1.out', opacity: "0", y: '20px'}, "-=.3")
            }
        }
    })();
	
	
	// Card Image Row
    (function() {
        if(document.querySelectorAll('.cards-image-row').length > 0) {
            let tlCardsRepeater = gsap.timeline({
                scrollTrigger: {
                    trigger: ".cards-image-row",
                    start: "center bottom",
                }
            });
            let images = document.querySelectorAll('.cards-image-row .card');
            for(let x = 0; x < images.length; x++) {
                let animation = tlCardsRepeater
                    .from(images[x].querySelector('.image__shrink'), {duration: .4, ease: 'power1.out', opacity: "0", y: '-30px'}, "-=" + (x === 0 ? "0" : ".2"))
                    .from(images[x].querySelector('.info'), {duration: .4, ease: 'power1.out', opacity: "0", y: '20px'}, "-=.3")
            }
        }
    })();
	
	 // Rewards Promo (Text-Image Block)
    (function() {
        if(document.querySelectorAll('.text-image').length > 0) {
            let tlTextImage = gsap.timeline({
                scrollTrigger: {
                    trigger: ".text-image",
                    start: "center bottom",
                }
            });
			let promoImage = document.querySelectorAll('.text-image .image__shrink');
			let promoAnim = tlTextImage
			.from(promoImage, {duration: 0.75, ease: Back.easeOut.config(2), scale: '0.7', opacity:0.75});
        }
    })();
	
	
	 // Mobile Menu (Card Icon Section Block)
    (function() {
        if(document.querySelectorAll('.cards-icon-sections .mobile-section-image').length > 0) {
			
            
			let mobileMenuImages = document.querySelectorAll('.cards-icon-sections .mobile-section-image');
			for(let x = 0; x < mobileMenuImages.length; x++) {
				let tlMenuMobileImage = gsap.timeline({
					scrollTrigger: {
						trigger: mobileMenuImages[x],
						start: "center bottom",
					}
				});
				let mobileMenuAnim = tlMenuMobileImage
				.from(mobileMenuImages[x], {duration: 0.75, ease: Back.easeOut.config(2), scale: '0.7', opacity:0.75},"-=" + (x === 0 ? "0" : ".2"));
			}
			
        }
    })();
	
	// Desktop Menu (Card Icon Section Block)
    (function() {
        if(document.querySelectorAll('.cards-icon-sections .card').length > 0) {
			
            
			let desktopMenuImages = document.querySelectorAll('.cards-icon-sections .card');
			for(let x = 0; x < desktopMenuImages.length; x++) {
				let tlMenuDesktopImage = gsap.timeline({
					scrollTrigger: {
						trigger: desktopMenuImages[x],
						start: "top bottom",
					}
				});
				let desktopMenuAnim = tlMenuDesktopImage
				.from(desktopMenuImages[x], {duration: 0.75, ease: Back.easeOut.config(2), scale: '0.7', opacity:0.75},"-=" + (x === 0 ? "0" : ".2"));
			}
			
        }
    })();

    // Partners Grid
	/*
    (function() {
        if(document.querySelectorAll('.partners-grid').length > 0) {
            let tlCardsRepeater = gsap.timeline({
                scrollTrigger: {
                    trigger: ".partners-grid",
                    start: "center bottom",
                }
            });
            let cards = document.querySelectorAll('.partners-grid .partner__item');
            for(let x = 0; x < cards.length; x++) {
                let animation = tlCardsRepeater
                    .from(cards[x].querySelector('.partners-icon'), {duration: .4, ease: 'power1.out', opacity: "0", y: '-30px'}, "-=" + (x === 0 ? "0" : ".2"))
                    .from(cards[x].querySelector('.info'), {duration: .4, ease: 'power1.out', opacity: "0", y: '20px'}, "-=.3")
            }
        }
    })();
	*/
	
    // Posts Slider
	/*
    if(document.querySelectorAll('#posts-slider').length > 0) {
        window.addEventListener('load', function(){
            var slider = tns({
              "container": "#posts-slider",
              "items": 2,
              "slideBy": "page",
              "mouseDrag": true,
              "swipeAngle": false,
              "speed": 400,
              "nav": false,
              "lazyload": true,
              "gutters": 0,
              "controlsText": ["", ""],
              "responsive": {
                  "10": {
                    "items": 1,
                    "gutters": 0,
                  },
                  "900": {
                    "items": 2,
                    "gutter": 30,
                  }
                },
            });
            document.querySelector('[data-controls="prev"]').setAttribute('aria-label', 'previous slide');
            document.querySelector('[data-controls="next"]').setAttribute('aria-label', 'next slide');
        });
    }
	*/
    // Posts Slider
	/*
    if(document.querySelectorAll('.quotes-slider').length > 0 && document.querySelector('.quotes-slider').getAttribute('data-init') === 'true') {
        window.addEventListener('load', function(){
            var slider = tns({
              "container": ".quotes-slider",
              "items": 1,
              "slideBy": "page",
              "mouseDrag": true,
              "swipeAngle": false,
              "speed": 400,
              "nav": false,
              "lazyload": true,
              "gutters": 0,
              "controlsText": ["", ""],
              "responsive": {
                  "10": {
                    "items": 1,
                    "gutters": 0,
                  },
                  "900": {
                    "items": 1,
                    "gutter": 0,
                  }
                },
            });
            document.querySelector('[data-controls="prev"]').setAttribute('aria-label', 'previous slide');
            document.querySelector('[data-controls="next"]').setAttribute('aria-label', 'next slide');
        });
    }
	*/
    // Fellows Slider
	/*
    if(document.querySelectorAll('#fellows-slider').length > 0) {
        window.addEventListener('load', function(){
            var slider = tns({
              "container": "#fellows-slider",
              "items": 1,
              "slideBy": "page",
              "mouseDrag": true,
              "swipeAngle": false,
              "speed": 400,
              "nav": false,
              "lazyload": true,
              "gutters": 0,
              "controlsText": ["", ""],
              "loop": false,
              "rewind": true,
              "responsive": {
                  "10": {
                    "items": 1,
                    "gutters": 0,
                  },
                  "900": {
                    "items": 1,
                    "gutter": 0,
                  }
                },
            });
            document.querySelector('[data-controls="prev"]').setAttribute('aria-label', 'previous slide');
            document.querySelector('[data-controls="next"]').setAttribute('aria-label', 'next slide');

            let bubbles = document.querySelectorAll('.fellows-slider .bubbles-2');
            let animations = [];
            
            for(let x = 0; x < bubbles.length; x++) {
                let tlImageText = gsap.timeline();
                let animation = tlImageText
                .delay(.35)
                .from(bubbles[x].querySelector('.slide-text-c1'), {duration: 1, ease: "elastic.out(1, 0.3)", x: 100, y: -100})
                .from(bubbles[x].querySelector('.slide-text-c2'), {duration: 1, ease: "elastic.out(1, 0.3)", x: 100, y: -100}, "-=.8")
                .from(bubbles[x].querySelector('.slide-text-c3'), {duration: 1, ease: "elastic.out(1, 0.3)", x: -65, y: 65}, "-=1")
                .from(bubbles[x].querySelector('.slide-text-c4'), {duration: 1, ease: "elastic.out(1, 0.3)", x: -65, y: 65}, "-=.8");
                // animation.pause();
                animations.push(animation);
            }

            slider.events.on('transitionStart', function() {
                var info = slider.getInfo(),
                  indexPrev = info.indexCached,
                  indexCurrent = info.index;

                animations[indexCurrent].restart(true, false);
            });

            ScrollTrigger.create({
              trigger: bubbles,
              onEnter: function() {animations[0].restart(true, false)},
            });
        });
    }
	*/
   
	// Stats Row
    /*
   if(document.querySelectorAll('.stats').length > 0) {
        console.log('stats if');
       let scrollTriggerStart = window.matchMedia('(max-width: 700px)').matches ? "top bottom" : "1% 99%";
       let tlStatsRow = gsap.timeline({
           scrollTrigger: {
               trigger: "#stats",
               start: scrollTriggerStart,
           }
       });
       console.log(scrollTriggerStart);
       tlStatsRow.set('.stats .stat', {opacity: 0});
       let stats = document.querySelectorAll('.stats .stat-card');
       for(let i = 0; i < stats.length; i++) {
           let stat = stats[i].querySelector('.stat');
           let statText = stat.innerHTML.match(/[\d\,]+|\D+/g);
           let newStat = document.createElement('span');

           for(let k = 0; k < statText.length; k++) {
               let number = document.createElement('span');
               if(isNumeric(statText[k])) {
                   number.classList.add('numberVal');    
                   number.innerHTML = parseInt(statText[k]) - 10;
               } else {
                   number.innerHTML = statText[k];
               }
               newStat.appendChild(number);
           }

           stat.innerHTML = '';
           stat.appendChild(newStat);
       }
       function isNumeric(value) {
           return /^-?\d+$/.test(value);
       }
       let scaleValue = window.matchMedia('(max-width: 700px)').matches ? 1.2 : 1.9;
       for(let y = 0; y < stats.length; y++) {
           let endVal = 100;
           let animation = tlStatsRow
               .from(stats[y].querySelector('.title'), {opacity: 0, duration: .4, ease: 'power1.out', scale: scaleValue, y: -8}, "-=" + (y === 0 ? "0" : ".275"))
               .from(stats[y].querySelector('.stat'), {opacity: 0, onComplete: counter, duration: .4, ease: 'power1.out', opacity: 1, scale: .9, transformOrigin: 'center center'})                       
       }
       let count = 0;
       function counter() {
           let statChildren = stats[count].querySelectorAll('.stat .numberVal');
           for(let a = 0; a < statChildren.length; a++) {
               let endValue = statChildren[a].innerHTML.replace(/\D/g,'') || '101'; 
               var numAnim = new countUp.CountUp(statChildren[a], (parseInt(endValue) + 10), {
                   startVal: endValue, 
               })
               numAnim.start();    
           }
           count++;
       }
    }   
	*/
    // In Page Jump Nav and Mobile Acordion (Cards Icon Sections Block)
	
    (function() {
        if(document.querySelectorAll('.cards-icon-sections').length > 0) {
            let jumps = document.querySelectorAll('[data-jump]');
            for(let x = 0; x < jumps.length; x++) {
                jumps[x].addEventListener('click', function(event) {
                    let jump = document.querySelector('[data-jump-target="' + event.target.getAttribute("data-jump") + '"]');
                    window.scroll(0,findPos(document.querySelector('[data-jump-target="' + event.target.getAttribute("data-jump") + '"]'), 120));
                })
            }

            const mediaQueryList = window.matchMedia('(max-width: 800px)');
            let isOpenAccord = [];
            let accordTriggers = document.querySelectorAll('.accord-trigger');

            mediaQueryList.addEventListener('change', event => {
                for(let x = 0; x < isOpenAccord.length; x++) {
                    let item = document.querySelector('[data-jump-target="' + isOpenAccord[x] + '"]');
                    console.log(item.querySelector('.accord-trigger'));
                    closeAccord(item.querySelector('.accord-trigger'));
                }
                
            });

            for(let y = 0; y < accordTriggers.length; y++) {
                accordTriggers[y].addEventListener('click', function(event) {
					let elem = this.querySelector('.button');
					
                    if(event.target.closest('.accord-wrap').matches('.active-accord')) {
                        closeAccord(event.target);
						gsap.to(elem, {borderRadius: 0, padding: '10px 26px 10px 26px',  width:'auto', height:'auto', duration: 0.1});
						elem.innerHTML = '<span class="innerHTML">See Menu Items</span>';
						let elemInner = elem.querySelector('.innerHTML');
						gsap.from( elemInner, {opacity:0, duration: 0.25, delay:0.125});
                    } else {
                        openAccord(event.target); 
						gsap.to(elem, {borderRadius: 100, padding:15, width:38, height:38, duration: 0.21});
						elem.innerHTML = '<img class="closeAccord" alt="" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDMyMC4wMiAzMjAuMDIiPjxkZWZzPjxzdHlsZT4uZHtmaWxsOiNmZmY7fTwvc3R5bGU+PC9kZWZzPjxnIGlkPSJhIi8+PGcgaWQ9ImIiPjxnIGlkPSJjIj48cGF0aCBjbGFzcz0iZCIgZD0iTTMxMC42LDI2NS40MmMxMi41LDEyLjUsMTIuNSwzMi43NSwwLDQ1LjI1LTYuMiw2LjI1LTE0LjQsOS4zNS0yMi42LDkuMzVzLTE2LjM4LTMuMTItMjIuNjItOS4zOGwtMTA1LjM4LTEwNS4zMy0xMDUuMzcsMTA1LjNjLTYuMjUsNi4zLTE0LjQ0LDkuNC0yMi42Myw5LjRzLTE2LjM3LTMuMS0yMi42Mi05LjRjLTEyLjUtMTIuNS0xMi41LTMyLjc1LDAtNDUuMjVsMTA1LjQtMTA1LjRMOS4zOCw1NC42MkMtMy4xMiw0Mi4xMi0zLjEyLDIxLjg4LDkuMzgsOS4zOHMzMi43NS0xMi41LDQ1LjI1LDBsMTA1LjM4LDEwNS40NUwyNjUuNCw5LjQyYzEyLjUtMTIuNSwzMi43NS0xMi41LDQ1LjI1LDBzMTIuNSwzMi43NSwwLDQ1LjI1bC0xMDUuNCwxMDUuNCwxMDUuMzUsMTA1LjM1WiIvPjwvZz48L2c+PC9zdmc+" />';
                    }
                    
                })
            }
            function openAccord(item) {
                let section = item.closest('.accord-wrap').querySelector('.accord-section');
                let sectionHeight = section.getBoundingClientRect().height;
                section.style.maxHeight = 0 + "px";
                setTimeout(function() {
                    section.style.maxHeight = sectionHeight + "px";    
                }, 50);
                item.closest('.accord-wrap').classList.add('active-accord');
                isOpenAccord.push(section.closest('[data-jump-target]').getAttribute('data-jump-target'));
                // console.log(isOpenAccord);
            }
            function closeAccord(item) {
                item.closest('.accord-wrap').classList.remove('active-accord');
                let section = item.closest('.accord-wrap').querySelector('.accord-section');
                section.style.maxHeight = 0 + "px";
                setTimeout(function() {
                    section.removeAttribute('style');  
                }, 150);
                isOpenAccord = isOpenAccord.filter((item) => item !== section.closest('[data-jump-target]').getAttribute('data-jump-target'));
            }
        }
    })();
	
})();

// Menu
let mediaQueryList = window.matchMedia('(max-width: 1024px)');
(function() {
    let menuIsOpen = false;
    let burger = document.querySelector('.burger');
    let desktopHeader = document.querySelector('.desktop-header');
	let topNav = document.querySelector('#topNav');
    let headerNav = document.querySelector('.header__nav');
    let listItems = document.querySelectorAll('.header__nav li');
    let mobileSearch = document.querySelector('.mobile-search');

    document.querySelector('.burger').addEventListener('click', function() {
        if(menuIsOpen) {
            closeMenu();
        } else {
            openMenu();
        }
    });

    mediaQueryList.addEventListener('change', event => {
        console.log('pop');
        if(!mediaQueryList.matches) {
            closeMenu();
        }
    });

    

    function openMenu() {
        let tlOpen = gsap.timeline({paused: true})
        .set(desktopHeader, {display: 'block'})
        .set(listItems, {opacity: 0})
        .fromTo(headerNav, {height: 0}, {height: 'auto', duration: .5, ease:  Power2.easeOut})
        .fromTo(listItems, {x: -100, opacity: 0}, {x: 0, opacity: 1, stagger: .1}, "-=.2")
        .fromTo(mobileSearch, {x: -100, opacity: 0}, {x: 0, opacity: 1}, "-=.2")

        menuIsOpen = true;
        burger.classList.add('is-active');
		topNav.classList.add('is-active');
        tlOpen.play(0);
    }

    

    function closeMenu() {
        let tlClose = gsap.timeline({paused: true})
        .to(mobileSearch, {opacity: 0, duration: .15})
        .to(listItems, {opacity: 0, duration: .15}, "-=.15")
        .to(headerNav, {height: 0, duration: .25}, "-=.05")
        .set(desktopHeader, {display: 'none', onComplete: removeStyles})

        menuIsOpen = false;
        burger.classList.remove('is-active');
		topNav.classList.remove('is-active');
        tlClose.play(0);
    }

    function removeStyles() {
        desktopHeader.removeAttribute('style');
        headerNav.removeAttribute('style');
        for(let x = 0; x < listItems.length; x++) {
            listItems[x].removeAttribute('style');    
        }
        mobileSearch.removeAttribute('style');
    }
	//Desktop Menu Animations
	(function($) {
		let mediaQueryList = window.matchMedia('(max-width: 1024px)');
		
		function desktopDrawers(){
			if ($(window).width() > 1024) {
				$('.menu-item-has-children').addClass('desktopDrawer');
				gsap.set('.sub-menu', {height: 0});
				gsap.set('.sub-menu', {opacity: 0});
				gsap.set('.sub-menu li', {display: 'none'});
				gsap.set('.sub-menu li', {opacity: 0});
				
			}else{
				$('.menu-item-has-children').removeClass('desktopDrawer');
				$('.sub-menu').removeAttr('style');
				$('.sub-menu li').removeAttr('style');
			}
			
		}
		mediaQueryList.addEventListener('change', event => {
			desktopDrawers();
    	});
		desktopDrawers();
		
		$('.menu-item-has-children').hover(function() {
			if($(this).hasClass('desktopDrawer')){
				let drawer = $(this).children('.sub-menu');
				let drawerChild = $(drawer).children('li');
				let totalHeight = 0;
				$(drawer).children().each(function(){
					totalHeight = totalHeight + $(this).outerHeight(true);
				});
				$(this).addClass('activeDrawer');
				gsap.set(drawerChild, {display: 'list-item'});
				gsap.to(drawer, {opacity: 1, duration: 0.15});
				gsap.to(drawer, {height: totalHeight, duration: 0.5,ease: Power2.easeOut });
				gsap.to(drawerChild, {opacity: 1, delay: 0.15, stagger: {each: 0.15, from: 'start' }});	
			}
			
		}, function() {
			if($(this).hasClass('desktopDrawer')){
				let drawer = $(this).children('.sub-menu');
				let drawerChild = $(drawer).children('li');
				$(this).removeClass('activeDrawer')
				
				gsap.to(drawerChild, {opacity: 0,  stagger: {each: 0.05, from: 'end' }});
				gsap.to(drawer, {height: 0, delay: 0.3, duration: 0.25});
				gsap.to(drawer, {opacity: 0,delay: 0.45, duration: 0.15});
				gsap.to(drawerChild, {display: 'none',duration:0, delay:0.75});
			}
		});
	})(jQuery);

})();
//Button Animations
(function($) {
	$('.button').hover(function() {
			gsap.to(this, {scale: 1.075, boxShadow: '0 0 3px 0 rgba(0, 0, 0, .5)', ease: Power1.easeOut, duration: 0.25});
		}, function() {
			gsap.to(this, {scale: 1, boxShadow: '0 0 0 0 rgba(0, 0, 0, .0)', ease: Power1.easeOut, duration: 0.25});
		});
})(jQuery);
// Scroll To Point
// (function($) {
//     $("[href^='#']").click(function() {
//         var id = this.getAttribute('href');
//         $([document.documentElement, document.body]).animate({
//             scrollTop: $(id).offset().top - 60
//         }, 500);
//     });
// })(jQuery);

// Object-fit pollyfill
// must add data-object-fit="cover" || data-object-fit="contain" to html element
// ============================
if ('objectFit' in document.documentElement.style === false) {
    console.log('no object-fit');
    document.addEventListener('DOMContentLoaded', function () {
        Array.prototype.forEach.call(document.querySelectorAll('img[data-object-fit]'), function (image) {
            (image.runtimeStyle || image.style).background = 'url("' + image.src + '") no-repeat 50%/' + (image.currentStyle ? image.currentStyle['object-fit'] : image.getAttribute('data-object-fit'));
            image.src = 'data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'' + image.width + '\' height=\'' + image.height + '\'%3E%3C/svg%3E';
        });
    });
}

// Closest() Polyfill
if (!Element.prototype.matches) {
  Element.prototype.matches =
    Element.prototype.msMatchesSelector ||
    Element.prototype.webkitMatchesSelector;
}

if (!Element.prototype.closest) {
  Element.prototype.closest = function(s) {
    var el = this;

    do {
      if (Element.prototype.matches.call(el, s)) return el;
      el = el.parentElement || el.parentNode;
    } while (el !== null && el.nodeType === 1);
    return null;
  };
}

function debounce (fn, wait) {
    var timeout;
    return function() {
        var cntx = this;
        var args = arguments;
        clearTimeout(timeout);
        timeout = setTimeout(function() {
            timeout = null;
            fn.apply(cntx, args);
        }, wait);
    };
}

function isElementInViewport (el) {
    var rect = el.getBoundingClientRect();
    var cachedDocument = document.documentElement;
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || cachedDocument.clientHeight) &&
        rect.right <= (window.innerWidth || cachedDocument.clientWidth)
    );
}

function findPos(obj, offset) {
    var curtop = 0;
    if (obj.offsetParent) {
        do {
            curtop += obj.offsetTop;
        } while (obj = obj.offsetParent);
    return [curtop - offset];
    }
}






    




