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
        $('#pets-create-modal').closeModal();
        $http.post('/pets', pet).then(function(response){
            if (response.data.success){
                alert('pet successfully posted!');
            } else {
                var errors = response.data.errors;
                for (var err in errors) {
                    errors[err] = errors[err].pop();
                }
                $scope.errors = errors;
                $('#errors').openModal();
            }
            $scope.getPets();
        }, function(){
            console.log("error!");
        });
    };

    $scope.pets = [];
    $scope.displayedPet = {};
    $scope.newPet = {};
    $scope.errors = {};

    $scope.getPets();
}]);