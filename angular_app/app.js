(function() {
  var app = angular.module('listApp', []);

  app.controller('ListController', function(){
    this.products = items;
  });

  app.controller('ReviewController', function(){
    this.review = {};
    
    this.addReview = function(product){
      product.reviews.push (this.review);
      this.review = {};
    };
  });

  var items = [
    {
      name: 'Special List',
      reviews: []
    }
  ];
})();
