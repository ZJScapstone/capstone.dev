'use strict';
var app = angular.module('petsApp', [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

app.controller('PetsController', ['$http', '$scope',  function($http, $scope){

    function createDropzone () {
        var myDropzone = new Dropzone("#image-upload", { 
            url: "/images/pet",
            sending: function(file, xhr, formData){
                xhr.setRequestHeader('csrftoken', $scope.csrfToken);
                formData.append('pet_id', $scope.newPet.id);
            },
            success: function(file, response){
                $scope.getPets();
            }
        });
    }

    function onPostSuccess (response) {
        if (response.data.success){
            $scope.newPet.id = response.data.pet.id;
            createDropzone();
            $('#image-upload-modal').openModal();
        } else {
            var errors = response.data.errors;
            for (var err in errors) {
                errors[err] = errors[err].pop();
            }
            $scope.errors = errors;
            $('#errors').openModal({
                complete: function(){
                    $('#pets-create-modal').openModal();
                }
            });
        }
        $scope.getPets();
    }

    $scope.getPets = function(){
        $http.get('/pets').then(function(response){
            $scope.user = response.data.user;
            $scope.pets = response.data.pets.map(function(pet){
            // if a pet doesn't have images, use a placeholder
                if (!pet.images.length) {
                    pet.images.push({
                        "img_path": "http://placehold.it/500"
                    });
                }
                return pet;
            });
            
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
        $http({
            method: 'POST',
            url: '/pets',
            data: pet,
            headers: {
                "csrftoken": $scope.csrfToken,
                "X-Requested-With": "XMLHttpRequest"
            }
        }).then(onPostSuccess, console.log);
    };

    $scope.finishNewPet = function(){
        $scope.newPet = {};
    };

    $scope.verifyUser = function(){
        if ( !$scope.user ) {
            $('#pets-create-modal').closeModal();
            $('#auth-modal').openModal();
        }
    };

    $scope.pets         = [];
    $scope.displayedPet = {};
    $scope.newPet       = {};
    $scope.errors       = {};
    $scope.user         = {};
    $scope.search       = '';

    $scope.csrfToken = $('#csrf-token input').val();

    $scope.getPets();
}]);