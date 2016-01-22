'use strict';
var app = angular.module('petsApp', [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

app.controller('PetsController', ['$http', '$scope',  function($http, $scope){

    $scope.getPets = function(){
        $http.get('/getpets').then(function(response){
            $scope.pets = response.data;
        },function(){
            console.log("error!");
        });
    }

    $scope.openPetModal = function(id){
        $scope.displayedPet = $scope.pets.filter(pet => pet.id == id).pop();
        $('#show-pet-modal').openModal();
    }

    $scope.pets = [];
    $scope.displayedPet = {};

    $scope.getPets();
}]);