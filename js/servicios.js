$(document).ready(function(){

    $('.card1').on('click', function(){

        if(!$('#uno').hasClass('show')) {
            $('.verm1').html('Ver Menos. . .');
            $('.card1 .d-flex h2').css({'white-space':'pre-line'});    
        } else {
            $('.verm1').html('Ver Más. . .');
            $('.card1 .d-flex h2').css({'white-space':'nowrap'});    
        } 
        
            $('.card2  .d-flex h2').css({'white-space':'nowrap'});    
            $('.card3  .d-flex h2').css({'white-space':'nowrap'});    
            $('.card4  .d-flex h2').css({'white-space':'nowrap'});    
            $('.card5  .d-flex h2').css({'white-space':'nowrap'});    
            $('.card6  .d-flex h2').css({'white-space':'nowrap'});    

            $('.verm2').html('Ver Más. . .');
            $('.verm3').html('Ver Más. . .');
            $('.verm4').html('Ver Más. . .');
            $('.verm5').html('Ver Más. . .');
            $('.verm6').html('Ver Más. . .');
        
        

    });

    $('.card2').on('click', function(){

        if(!$('#dos').hasClass('show')) {
            $('.verm2').html('Ver Menos. . .');
        } else {
            $('.verm2').html('Ver Más. . .');
        } 

            $('.card1 .d-flex h2').css({'white-space':'nowrap'});    
            $('.card3 .d-flex h2').css({'white-space':'nowrap'});    
            $('.card4 .d-flex h2').css({'white-space':'nowrap'});    
            $('.card5 .d-flex h2').css({'white-space':'nowrap'});    
            $('.card6 .d-flex h2').css({'white-space':'nowrap'});    

            $('.verm1').html('Ver Más. . .');
            $('.verm3').html('Ver Más. . .');
            $('.verm4').html('Ver Más. . .');
            $('.verm5').html('Ver Más. . .');
            $('.verm6').html('Ver Más. . .');

    
        
       

    });

    $('.card3').on('click', function(){

        if(!$('#tres').hasClass('show')) {
            $('.verm3').html('Ver Menos. . .');   
            $('.card3 .d-flex h2').css({'white-space':'pre-line'});    
        } else {
            $('.card3 .d-flex h2').css({'white-space':'nowrap'});    
            $('.verm3').html('Ver Más. . .');
        } 

            $('.card1 .d-flex h2').css({'white-space':'nowrap'});    
            $('.card2 .d-flex h2').css({'white-space':'nowrap'});    
            $('.card4 .d-flex h2').css({'white-space':'nowrap'});    
            $('.card5 .d-flex h2').css({'white-space':'nowrap'});    
            $('.card6 .d-flex h2').css({'white-space':'nowrap'});    
            $('.verm1').html('Ver Más. . .');
            $('.verm2').html('Ver Más. . .');
            $('.verm4').html('Ver Más. . .');
            $('.verm5').html('Ver Más. . .');
            $('.verm6').html('Ver Más. . .');

    
        
       

    });

    $('.card4').on('click', function(){

        if(!$('#cuatro').hasClass('show')) {
            $('.verm4').html('Ver Menos. . .');
        } else {
            $('.verm4').html('Ver Más. . .');
        } 

            $('.card1 .d-flex h2').css({'white-space':'nowrap'});    
            $('.card2 .d-flex h2').css({'white-space':'nowrap'});    
            $('.card3 .d-flex h2').css({'white-space':'nowrap'});    
            $('.card5 .d-flex h2').css({'white-space':'nowrap'});    
            $('.card6 .d-flex h2').css({'white-space':'nowrap'}); 

            $('.verm1').html('Ver Más. . .');
            $('.verm2').html('Ver Más. . .');
            $('.verm3').html('Ver Más. . .');
            $('.verm5').html('Ver Más. . .');
            $('.verm6').html('Ver Más. . .');

    
        
       

    });

    $('.card5').on('click', function(){

        if(!$('#cinco').hasClass('show')) {
            $('.verm5').html('Ver Menos. . .');
            $('.card5 .d-flex h2').css({'white-space':'pre-line'});    
        } else {
            $('.card5 .d-flex h2').css({'white-space':'nowrap'});
            $('.verm5').html('Ver Más. . .');
        } 

            $('.card1 .d-flex h2').css({'white-space':'nowrap'});    
            $('.card2 .d-flex h2').css({'white-space':'nowrap'});    
            $('.card3 .d-flex h2').css({'white-space':'nowrap'});    
            $('.card4 .d-flex h2').css({'white-space':'nowrap'});    
            $('.card6 .d-flex h2').css({'white-space':'nowrap'});    
        
            $('.verm1').html('Ver Más. . .');
            $('.verm2').html('Ver Más. . .');
            $('.verm3').html('Ver Más. . .');
            $('.verm4').html('Ver Más. . .');
            $('.verm6').html('Ver Más. . .');

    
        
       

    });

    $('.card6').on('click', function(){

        if(!$('#seis').hasClass('show')) {
            $('.verm6').html('Ver Menos. . .');
        } else {
            $('.verm6').html('Ver Más. . .');
        } 

            $('.card1 .d-flex h2').css({'white-space':'nowrap'});    
            $('.card2 .d-flex h2').css({'white-space':'nowrap'});    
            $('.card3 .d-flex h2').css({'white-space':'nowrap'});    
            $('.card4 .d-flex h2').css({'white-space':'nowrap'});    
            $('.card5 .d-flex h2').css({'white-space':'nowrap'});    

            $('.verm1').html('Ver Más. . .');
            $('.verm2').html('Ver Más. . .');
            $('.verm3').html('Ver Más. . .');
            $('.verm4').html('Ver Más. . .');
            $('.verm5').html('Ver Más. . .');

    
        
       

    });

});
















