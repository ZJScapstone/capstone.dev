'use strict';
var app = angular.module('petsApp', [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

app.controller('PetsController', ['$http', '$scope',  function($http, $scope){

    function createDropzone(){
        var myDropzone = new Dropzone("#image-upload", { 
            url: "/pets/image",
            sending: function(file, xhr, formData){
                formData.append('pet_id', $scope.newPet.id);
            },
            success: function(file, response){
                $scope.getPets();
            }
        });
    }

    $scope.getPets = function(){
        $http.get('/pets').then(function(response){
            $scope.pets = response.data.pets;
            $scope.user = response.data.user;
        },function(e){
            console.log(e);
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
        pet.user_id = $scope.user.id;
        $http.post('/pets', pet).then(function(response){
            if (response.data.success){
                alert('pet successfully posted!');
                $scope.newPet.id = response.data.pet.id;
                createDropzone();
                $('#image-upload-modal').openModal();
            } else {
                var errors = response.data.errors;
                for (var err in errors) {
                    errors[err] = errors[err].pop();
                }
                $scope.errors = errors;
                $('#errors').openModal();
            }
            $scope.getPets();
        }, function(e){
            console.log(e);
        });
    };

    $scope.pets = [];
    $scope.displayedPet = {};
    $scope.newPet = {};
    $scope.errors = {};

    $scope.getPets();
}]);