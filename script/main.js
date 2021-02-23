AOS.init();
;(function($D){
    var $button1= $D.querySelector('.js-button1');
    var $button2= $D.querySelector('.js-button2');
    var $button3= $D.querySelector('.js-button3');
    $button1.addEventListener('click', function(e){
        var iframe1 =document.querySelector('.iframe1');
        iframe1.className="block_active iframe1";
        var iframe2 =document.querySelector('.iframe2');
        iframe2.className="block_inactive iframe2";
        var iframe3 =document.querySelector('.iframe3');
        iframe3.className="block_inactive iframe3";
    });
    $button2.addEventListener('click', function(e){
        iframe1 =document.querySelector('.iframe1');
        iframe1.className="block_inactive iframe1";
         iframe2 =document.querySelector('.iframe2');
        iframe2.className="block_active iframe2";
        iframe3 =document.querySelector('.iframe3');
        iframe3.className="block_inactive iframe3";
    });
    $button3.addEventListener('click', function(e){
        iframe1 =document.querySelector('.iframe1');
        iframe1.className="block_inactive iframe1";
        iframe2 =document.querySelector('.iframe2');
        iframe2.className="block_inactive iframe2";
        iframe3 =document.querySelector('.iframe3');
        iframe3.className="block_active iframe3";
    });
})(document);


