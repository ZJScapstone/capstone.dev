'use strict';
var app = angular.module('petsApp', [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

app.controller('PetsController', ['$http', function($http){


    this.getPets = function(){
        var self = this;
        $http.get('/getpets').then(function(response){
            self.pets = response.data;
        },function(){
            console.log("error!");
        });
    }

    this.openPetModal = function(id){
        this.displayedPet = this.pets.filter(pet => pet.id == id).pop();
        $('#show-pet-modal').openModal();
        console.log(this.displayedPet.images);
    }

    this.pets = [];
    this.displayedPet = {};

    this.getPets();
}]);