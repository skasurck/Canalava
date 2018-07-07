$(function (lanzadera) {
    var index = 0;    
    var index2 = 0;
    var index3 = 0;
    var index4 = 0;
    var index5 = 0;
    var index6 = 0;
    var imgs = ["img/1.png", "img/7.png"];
    var imgs2 = ["img/2.png", "img/8.png"];
    var imgs3 = ["img/3.png", "img/9.png"];
    var imgs4 = ["img/4.png", "img/10.png"];
    var imgs5 = ["img/5.png", "img/11.png"];
    var imgs6 = ["img/6.png", "img/13.png"];
    var url1 = ["http://concamin.mx/","http://www.inegi.org.mx"];
    var url2 = ["http://www.beta.inegi.org.mx/app/mapa/denue/","http://www.seduvi.df.gob.mx"];
    var url3 = ["https://www.gob.mx/impi/","http://www.canaintex.org.mx"];
    var url4 = ["http://www.inveadf.df.gob.mx","https://www.inadem.gob.mx"];
    var url5 = ["http://conocer.gob.mx","https://www.gob.mx/se/"];
    var url6 = ["http://www.sedeco.cdmx.gob.mx","https://www.gob.mx/profeco"];
    var time = 3500;
    
    $(function lanzadera() {
        $(function uno() {});
        $(function dos() {});
        $(function tres() {});
        $(function cuatro() {});
        $(function cinco() {});
        $(function seis() {});

    });

    $(function uno() {


        setInterval(function () {
            $("#img-1").attr("src", imgs[index]);
            $("#link1").attr("href", url1[index]);
            index++;
            if (index == 2) {
                index = 0;
            }
        }, time);
    });
    $(function dos() {
      setInterval(function () {
            $("#img-2").attr("src", imgs2[index2]);
            $("#link2").attr("href", url2[index2]);
            index2++;
            if (index2 == 2) {
                index2 = 0;
            }
        }, time);
    });
    $(function tres() {
        setInterval(function () {
            $("#img-3").attr("src", imgs3[index3]);
            $("#link3").attr("href", url3[index3]);
            index3++;
            if (index3 == 2) {
                index3 = 0;
            }
        }, time);
    });
    $(function cuatro() {
setInterval(function () {
            $("#img-4").attr("src", imgs4[index4]);
            $("#link4").attr("href", url4[index4]);
            index4++;
            if (index4 == 2) {
                index4 = 0;
            }
        }, time);
    });
    $(function cinco() {
        setInterval(function () {
            $("#img-5").attr("src", imgs5[index5]);
            $("#link5").attr("href", url5[index5]);
            index5++;
            if (index5 == 2) {
                index5 = 0;
            }
        }, time);
    });
    $(function seis() {
        setInterval(function () {
            $("#img-6").attr("src", imgs6[index6]);
            $("#link6").attr("href", url6[index6]);
            index6++;
            if (index6 == 2) {
                index6 = 0;
            }
        }, time);
    });


});
