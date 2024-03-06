(function () {
    'use strict';

    const valorPaseDia = 35;
    const valorPaseDosDias = 45;
    const valorPaseTodosDias = 50;
    var total = document.getElementById('total');
    const wapperTallerTodos = document.querySelectorAll('.wrapper');

    document.addEventListener("DOMContentLoaded", function () {

        var paseDia = document.getElementById('paseDia');
        var paseDosDias = document.getElementById('paseDosDias');
        var paseTodos = document.getElementById('paseTodos');

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
            })
        })
    }

    function validateOptions() {
        
    }
})();