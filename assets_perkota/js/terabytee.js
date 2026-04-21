// const vTour = document.querySelector('#virtual-tour');
// var elVtour = document.getElementById("virtual-tour");

// vTour.addEventListener('click', event => {
//     document.getElementById('contact').scrollIntoView({ behavior: 'smooth' });
//     elVtour.classList.add("active_tb");
// });

const introArrow = document.querySelector('#introarrow');
const Homepage = document.querySelector('#homepage');
const Introduction = document.querySelector('#introduction');
const Destination = document.querySelector('#destination');
const Events = document.querySelector('#events');
const Vtour = document.querySelector('#virtual-tour');
const Cus = document.querySelector('#contact-us');

Vtour.addEventListener('click', event => {
    // window.open('https://indonesiavirtualtour.com/storage/destination/taman-fatahillah/src/', '_blank');
    // window.open('https://perkota.gogrein.id/', '_blank');
    window.location.href = "virtual-tour";

    Vtour.classList.add("active_tb");

    Homepage.classList.remove("active_tb");
    Destination.classList.remove("active_tb");
    Events.classList.remove("active_tb");
    Cus.classList.remove("active_tb");
});

introArrow.addEventListener('click', event => {
    document.getElementById('intro').scrollIntoView({ behavior: 'smooth' });
    Introduction.classList.add("active_tb");

    Homepage.classList.remove("active_tb");
    Destination.classList.remove("active_tb");
    Events.classList.remove("active_tb");
    Vtour.classList.remove("active_tb");
    Cus.classList.remove("active_tb");
});

Homepage.addEventListener('click', event => {
    document.getElementById('hero').scrollIntoView({ behavior: 'smooth' });
    Homepage.classList.add("active_tb");

    Introduction.classList.remove("active_tb");
    Destination.classList.remove("active_tb");
    Events.classList.remove("active_tb");
    Vtour.classList.remove("active_tb");
    Cus.classList.remove("active_tb");
});

Introduction.addEventListener('click', event => {
    document.getElementById('intro').scrollIntoView({ behavior: 'smooth' });
    Introduction.classList.add("active_tb");

    Homepage.classList.remove("active_tb");
    Destination.classList.remove("active_tb");
    Events.classList.remove("active_tb");
    Vtour.classList.remove("active_tb");
    Cus.classList.remove("active_tb");
});

Destination.addEventListener('click', event => {
    document.getElementById('dest').scrollIntoView({ behavior: 'smooth' });
    Destination.classList.add("active_tb");

    Homepage.classList.remove("active_tb");
    Introduction.classList.remove("active_tb");
    Events.classList.remove("active_tb");
    Vtour.classList.remove("active_tb");
    Cus.classList.remove("active_tb");
});

Events.addEventListener('click', event => {
    document.getElementById('event').scrollIntoView({ behavior: 'smooth' });
    Events.classList.add("active_tb");

    Homepage.classList.remove("active_tb");
    Destination.classList.remove("active_tb");
    Introduction.classList.remove("active_tb");
    Vtour.classList.remove("active_tb");
    Cus.classList.remove("active_tb");
});

Cus.addEventListener('click', event => {
    document.getElementById('contact').scrollIntoView({ behavior: 'smooth' });
    Cus.classList.add("active_tb");

    Homepage.classList.remove("active_tb");
    Introduction.classList.remove("active_tb");
    Destination.classList.remove("active_tb");
    Events.classList.remove("active_tb");
    Vtour.classList.remove("active_tb");
});