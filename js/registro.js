(function () {
    'use strict';

    const VALOR_PASE_DIA = 30;
    const VALOR_PASE_DOS_DIAS = 45;
    const VALOR_PASE_TODOS = 50;


    var wapperTallerTodos = document.querySelectorAll('.wrapper');
    var btnCalcular = document.getElementById('btnCalcular');
    var talleres = document.querySelector('.t-seleccionados');

    //cards de precios
    var paseDia = document.getElementById('paseDia');
    var paseDosDias = document.getElementById('paseDosDias');
    var paseTodos = document.getElementById('paseTodos');

    document.addEventListener("DOMContentLoaded", function () {

        btnCalcular.addEventListener('click', validateInputChecked);
        getValueInputs(paseDia);
        getValueInputs(paseDosDias);
        getValueInputs(paseTodos);
    });
    
    function getValueInputs(element) {

        element.addEventListener('input', () => {

            wapperTallerTodos.forEach(item => {
               if (!item.classList.contains('show')) {
                    item.classList.toggle('show');
                }
            });
        });
    }

    function validateInputChecked() {
        const checkboxesViernes = document.querySelectorAll('.viernes .campo-taller input[type="checkbox"]');
        //const checboxesSabado = document.querySelectorAll('.sabado .campo-taller input[type="checkbox"]');
        //const checboxesDomingo = document.querySelectorAll('.domingo .campo-taller input[type="checkbox"]');

        checkboxesViernes.forEach(item => {
            if (item.checked) {
                const label = document.querySelector('label[for="'+ item.id +'"]');
                const li = document.createElement('li');

                li.innerText = label.textContent;

                talleres.appendChild(li);
            }
        });

        calculatePrice();

    }

    function calculatePrice() {
        const total = document.getElementById('total');
        let totalPrice = 0;

        if (paseDia.value > 0) {
            totalPrice += paseDia.value * VALOR_PASE_DIA;
        }
        if (paseDosDias.value > 0) {
            totalPrice += paseDosDias.value * VALOR_PASE_DOS_DIAS;
        }

        if (paseTodos.value > 0) {
            totalPrice += paseTodos.value * VALOR_PASE_TODOS;
        }

        total.innerText = "$"+ totalPrice;

    }

    function update() {
        
    }

})();