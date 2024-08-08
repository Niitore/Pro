        /*declaration*/
document.addEventListener('DOMContentLoaded', () => {
    const adobobtn = document.getElementById('adobobtn');
    const bicolbtn = document.getElementById('bicolbtn');
    const biryanibtn = document.getElementById('biryanibtn');
    const carbonarabtn = document.getElementById('carbonarabtn');
    const samosabtn = document.getElementById('samosabtn');
    const macncheesebtn = document.getElementById('macncheesebtn');
    const calamaresbtn = document.getElementById('calamaresbtn');
    const albobtn = document.getElementById('albobtn');
    const palabokbtn = document.getElementById('palabokbtn');

    const popAdobo = document.getElementById('popAdobo');
    const popBicol = document.getElementById('popBicol');
    const popBiryani = document.getElementById('popBiryani');
    const popCarbonara = document.getElementById('popCarbonara');
    const popSamosa = document.getElementById('popSamosa');
    const popMacNCheese = document.getElementById('popMacNCheese');
    const popCalamares = document.getElementById('popCalamares');
    const popAlbondigas = document.getElementById('popAlbondigas');
    const popPancitPalabok = document.getElementById('popPancitPalabok');

    const closeFormBtn = document.getElementById('closeFormBtn');
    const closeBicolFormBtn = document.getElementById('closeBicolFormBtn');
    const closeBiryaniFormBtn = document.getElementById('closeBiryaniFormBtn');
    const closeCarbonaraFormBtn = document.getElementById('closeCarbonaraFormBtn');
    const closeSamosaFormBtn = document.getElementById('closeSamosaFormBtn');
    const closeMacNCheeseFormBtn = document.getElementById('closeMacNCheeseFormBtn');
    const closeCalamaresFormBtn = document.getElementById('closeCalamaresFormBtn');   
    const closeAlbondigasFormBtn = document.getElementById('closeAlbondigasFormBtn');
    const closePancitPalabokFormBtn = document.getElementById('closePancitPalabokFormBtn');

    /*open event*/ 
    adobobtn.addEventListener('click', () => {
      popAdobo.style.display = 'block';
    });
    bicolbtn.addEventListener('click', () => {
      popBicol.style.display = 'block';
    });
    biryanibtn.addEventListener('click', () => {
        popBiryani.style.display = 'block';
      });
    biryanibtn.addEventListener('click', () => {
        popBiryani.style.display = 'block';
    });
    carbonarabtn.addEventListener('click', () => {
        popCarbonara.style.display = 'block';
    });
    samosabtn.addEventListener('click', () => {
        popSamosa.style.display = 'block';
    });
    macncheesebtn.addEventListener('click', () => {
        popMacNCheese.style.display = 'block';
    });
    calamaresbtn.addEventListener('click', () => {
        popCalamares.style.display = 'block';
    });
    albobtn.addEventListener('click', () => {
        popAlbondigas.style.display = 'block';
    });
    palabokbtn.addEventListener('click', () => {
        popPancitPalabok.style.display = 'block';
    });

        /*close event*/ 
    closeFormBtn.addEventListener('click', () => {
      popAdobo.style.display = 'none';
    });
    closeBicolFormBtn.addEventListener('click', () => {
      popBicol.style.display = 'none';
    });
    closeBiryaniFormBtn.addEventListener('click', () => {
        popBiryani.style.display = 'none';
    });
    closeCarbonaraFormBtn.addEventListener('click', () => {
        popCarbonara.style.display = 'none';
    });
    closeSamosaFormBtn.addEventListener('click', () => {
        popSamosa.style.display = 'none';
    });
    closeMacNCheeseFormBtn.addEventListener('click', () => {
        popMacNCheese.style.display = 'none';
    });
    closeCalamaresFormBtn.addEventListener('click', () => {
        popCalamares.style.display = 'none';
    });
    closeAlbondigasFormBtn.addEventListener('click', () => {
        popAlbondigas.style.display = 'none';
    });
    closePancitPalabokFormBtn.addEventListener('click', () => {
        popPancitPalabok.style.display = 'none';
    });


    window.addEventListener('click', (event) => {
      if (event.target === popAdobo) {
        popAdobo.style.display = 'none';
      }
      if (event.target === popBicol) {
        popBicol.style.display = 'none';
      }
      if (event.target === popBiryani) {
        popBiryani.style.display = 'none';
      }
      if (event.target === popCarbonara) {
        popCarbonara.style.display = 'none';
      }
      if (event.target === popSamosa) {
        popSamosa.style.display = 'none';
      }
      if (event.target === popMacNCheese) {
        popMacNCheese.style.display = 'none';
      }
      if (event.target === popCalamares) {
        popCalamares.style.display = 'none';
      }
      if (event.target === popAlbondigas) {
        popAlbondigas.style.display = 'none';
      }
      if (event.target === popPancitPalabok) {
        popPancitPalabok.style.display = 'none';
      }
    });
  });

  function openPopup() {
    document.getElementById('popup').style.display = 'block';
    document.getElementById('overlay').style.display = 'block';
}

function closePopup() {
    document.getElementById('popup').style.display = 'none';
    document.getElementById('overlay').style.display = 'none';
}
