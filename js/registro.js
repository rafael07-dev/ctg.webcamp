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

        //boton general para calcular precio
        btnCalcular.addEventListener('click', validateInputCheckedTotal);

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
            checkboxesViernes.forEach(item => item.addEventListener('click', updateInputs));
            checkboxesSabado.forEach(item => item.addEventListener('click', updateInputs));
            checkboxesDomingo.forEach(item => item.addEventListener('click', updateInputs));
        }

        if (element.id === 'paseDosDias') {
            paseDia.setAttribute('disabled', 'true');
            paseTodos.setAttribute('disabled', 'true');

            checkboxesViernes.forEach(item => item.addEventListener('click', updateInputsTowDays));
            checkboxesSabado.forEach(item => item.addEventListener('click', updateInputsTowDays));
            checkboxesDomingo.forEach(item => item.addEventListener('click', updateInputsTowDays));
        }

        if (element.id === 'paseTodos') {
            paseDosDias.setAttribute('disabled', 'true');
            paseDia.setAttribute('disabled', 'true');

            checkboxesViernes.forEach(item => item.addEventListener('click', updateInputsAllDays));
            checkboxesSabado.forEach(item => item.addEventListener('click', updateInputsAllDays));
            checkboxesDomingo.forEach(item => item.addEventListener('click', updateInputsAllDays));
        }
    }

    function showTalleres(elements) {
        elements.forEach(item => {
            if (!item.classList.contains('show')) {
                item.classList.toggle('show');
            }
        });
    }

    function validateInputCheckedTotal() {

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

    function validateInputChecked(element) {

        let isCHecked = false;

        element.forEach(item => {

            if (item.checked) {
                isCHecked = true;
                return isCHecked;
            }
        });

        return isCHecked;
    }

    function updateInputsTowDays() {

        let isTrue = 0;

        var check = {
            viernes: validateInputChecked(checkboxesViernes),
            sabado: validateInputChecked(checkboxesSabado),
            domingo: validateInputChecked(checkboxesDomingo)
        };
        var dayOfWeekend = {
            1: 'viernes',
            2: 'sabado',
            3: 'domingo'
        }

        const isChecked = Object.values(check);

        let dia = undefined;

        for (let index = 0; index < isChecked.length; index++) {
            if (isChecked[index] == true) {
                isTrue ++;
            }else{
                dia = index + 1;
            }

            if (isTrue == 2) {
                if (dayOfWeekend[dia] == 'viernes') {
                    disableCheckBox(checkboxesViernes)
                }
    
                if (dayOfWeekend[dia] == 'sabado') {
                    disableCheckBox(checkboxesSabado)
                }
    
                if (dayOfWeekend[dia] == 'domingo') {
                    disableCheckBox(checkboxesDomingo)
                }
            }
        }

    }

    function updateInputsAllDays() {
        
    }

    function disableCheckBox(element) {
        element.forEach(item => {
            item.setAttribute('disabled', 'true');
        });
    }
})();