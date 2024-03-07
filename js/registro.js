(function () {
    'use strict';

    const valorPaseDia = 35;
    const valorPaseDosDias = 45;
    const valorPaseTodosDias = 50;
    var wapperTallerTodos = document.querySelectorAll('.wrapper');
    var btnCalcular = document.getElementById('btnCalcular');
    const talleres = document.querySelector('.t-seleccionados');

    document.addEventListener("DOMContentLoaded", function () {

        var paseDia = document.getElementById('paseDia');
        var paseDosDias = document.getElementById('paseDosDias');
        var paseTodos = document.getElementById('paseTodos');

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

    }

    function calculatePrice() {
        
    }

})();