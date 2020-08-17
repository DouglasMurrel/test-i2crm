//насколько мне известно, если код, открывающий окно, вызван по нажатию кнопки, то он обязательно будет разрешен, хоть я дерись
//максимум, что я сумел придумать - это вот так
document.getElementById("popupButton").addEventListener("click", function () {
    return false;
    window.open("https://www.ya.ru/", "popup", "width=640,height=480");
});