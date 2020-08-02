
// var app = angular.module('desenvolvedores',[]);

(function () {
    var app = angular.module('desenvolvedores', []);
    app.controller('DesenvolvedorController', function () {
        this.desenvolvedor = desenvolvedor;
    });
    var desenvolvedor = { 'nome': 'Teste', 'hobby': 'correr'};
})();
