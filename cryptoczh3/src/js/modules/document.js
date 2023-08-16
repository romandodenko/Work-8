document.documentElement.classList.add("loaded");

// Открытие и закрытие бургера

const menu = document.querySelector(".header__menu");

document.addEventListener("click", function (e) {

  const elementInteractive = e.target;

  if (elementInteractive.closest(".burger")) { // Открытие и закрытие бургера
    menu.classList.add("menu-active")
    document.body.style.overflow = "hidden";
  }
  if (elementInteractive.closest(".header__exit-menu")) { // Открытие и закрытие бургера 
    menu.classList.remove("menu-active")
    document.body.style.overflow = "";
  }
  if (elementInteractive.closest(".nav__link")) { // Открытие и закрытие бургера
    menu.classList.remove("menu-active")
    document.body.style.overflow = "";
  }

  if (elementInteractive.closest(".faq__top")) { // Открытие и закрытие бургера

    const casinoItem = elementInteractive.closest(".faq__item");
  
    const casinoItemPays = casinoItem.querySelector(".faq__bottom");
  
    if (!casinoItem.classList.contains("active")) {
  
      document.querySelectorAll(".faq__item").forEach(function(e) {
        e.classList.remove("active");
        gsap.to(e.querySelector(".faq__bottom"), {
          height: 0,
        });
      })
  
      casinoItem.classList.add("active");
  
      gsap.to(casinoItemPays, { 
        height: 'auto',
      });
  
    } else if (casinoItem.classList.contains("active")) {
  
      casinoItem.classList.remove("active");
  
      gsap.to(casinoItemPays, {
        height: 0,
      });
    }
  
  }
})

// Скрипт для проверки , поддерживает ли браузер webp 

function testWebP(callback) {
  var webP = new Image();

  webP.onload = webP.onerror = function () {
    callback(webP.height == 2);
  };

  webP.src = "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA";
}

testWebP(function (support) {
  if (support == true) {
    document.querySelector('body').classList.add('webp');
  } else {
    document.querySelector('body').classList.add('no-webp');
  }
});
 
const heroFormInit = document.querySelector(".hero-form");

if(heroFormInit) {
  const validator = new JustValidate('.hero-form', {});

  validator
    .addField('#name', [{ // можно использовать классы вместо ид
        rule: 'required',
        errorMessage: 'Zadejte své jméno',
      }, 
    ])
    .addField('#last_name', [{ // можно использовать классы вместо ид
      rule: 'required',
      errorMessage: 'Zadejte své příjmení',
    }, 
  ])
    .addField('#email', [{ // можно использовать классы вместо ид
        rule: 'required',
        value: true,
        errorMessage: 'Vložte svůj e-mail',
      },
      {
        rule: 'email',
        errorMessage: 'Prosím zadejte platný email',
      },
    ]) 
    .onSuccess((event) => { // Если форма проходит валидацию то происходит код ниже
       alert("Odesláno!")
    })
} 