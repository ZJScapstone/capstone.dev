'use strict';
var app = angular.module('petsApp', [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

app.controller('PetsController', ['$http', '$scope',  function($http, $scope){

    $scope.getPets = function(){
        $http.get('/pets').then(function(response){
            $scope.pets = response.data.pets;
        },function(){
            console.log("error!");
        });
    };

    $scope.openPetModal = function(id){
        $scope.displayedPet = $scope.pets.filter(pet => pet.id == id).pop();
        $('#show-pet-modal').openModal();
        setTimeout( function(){
            $('#show-pet-modal').css({
                "transition": "all 0.3s",
                "top": "5%"
            });
        }, 400);
    };

    $scope.addPet = function(pet){
        $http.post('/pets', pet).then(function(response){
            var errors = response.data.errors;
            if (errors){
                for (var err in errors) {
                    alert(errors[err].pop())
                }
            }
        }, function(){
            console.log("error!");
        });
    }

    $scope.pets = [];
    $scope.displayedPet = {};
    $scope.newPet = {};

    $scope.getPets();
}]);