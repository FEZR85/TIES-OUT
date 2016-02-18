$j(function(){
    $j('.slider').click(function () { 
        $j('#nav').slideToggle(300);

        var img = $j(this).find('img');
        if ($j(img).attr('id') == 'imgMenu') {
            $j(img).attr('src', 'img/abajo.png');
            $j(img).attr('id', 'bot');
        } else {
            $j(img).attr('src', 'img/arriba.png');
            $j(img).attr('id', 'imgMenu');
        }
    });
});