(function () {
    'use strict';

    const VALOR_PASE_DIA = 30;
    const VALOR_PASE_DOS_DIAS = 45;
    const VALOR_PASE_TODOS = 50;


    var wapperTallerTodos = document.querySelectorAll('.wrapper');
    var btnCalcular = document.getElementById('btnCalcular');
    var talleres = document.querySelector('.t-seleccionados');

    //input cards de precios
    var paseDia = document.getElementById('paseDia');
    var paseDosDias = document.getElementById('paseDosDias');
    var paseTodos = document.getElementById('paseTodos');

    //checkboxes
    const checkboxesViernes = document.querySelectorAll('.viernes .campo-taller input[type="checkbox"]');
    const checkboxesSabado = document.querySelectorAll('.sabado .campo-taller input[type="checkbox"]');
    const checkboxesDomingo = document.querySelectorAll('.domingo .campo-taller input[type="checkbox"]');
    //const viernes = document.getElementById('viernes');

    document.addEventListener("DOMContentLoaded", function () {

        //agregar evento click a todos los checkbox
        checkboxesViernes.forEach(item => item.addEventListener('click', updateInputs));
        checkboxesSabado.forEach(item => item.addEventListener('click', updateInputs));
        checkboxesDomingo.forEach(item => item.addEventListener('click', updateInputs));

        //boton general para calcular precio
        btnCalcular.addEventListener('click', validateInputChecked);

        //obtener valores de los inputs de las cards talleres
        handleInput(paseDia);
        handleInput(paseDosDias);
        handleInput(paseTodos);
    });

    function handleInput(element) {

        element.addEventListener('input', () => {
            //mostrar todos los talleres
            showTalleres(wapperTallerTodos)
            checkedInputs(element)
        });
    }

    function checkedInputs(element) {
        if (element.id === 'paseDia') {
            paseDosDias.setAttribute('disabled', 'true');
            paseTodos.setAttribute('disabled', 'true');
        }
    }

    function showTalleres(elements) {
        elements.forEach(item => {
            if (!item.classList.contains('show')) {
                item.classList.toggle('show');
            }
        });
    }

    function validateInputChecked() {

        checkboxesViernes.forEach(item => {

            if (item.checked) {
                const label = document.querySelector('label[for="' + item.id + '"]');
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

        total.innerText = "$" + totalPrice;
    }

    function updateInputs(e) {
        if (e.target.id <= 15) {
            disableCheckBox(checkboxesSabado);
            disableCheckBox(checkboxesDomingo);
        }

        if (e.target.id > 15 && e.target.id <= 30) {
            disableCheckBox(checkboxesViernes);
            disableCheckBox(checkboxesDomingo);
        }

        if (e.target.id > 30) {
            disableCheckBox(checkboxesViernes);
            disableCheckBox(checkboxesSabado);
        }
    }

    function disableCheckBox(element) {
        element.forEach(item => {
            item.setAttribute('disabled', 'true');
        });
    }
})();