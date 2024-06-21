$(document).ready(function() {
    // Находим элементы DOM
    var openFormButton = $("#openFormButton");
    var overlay = $("#overlay");
    var closeButton = $("#overlay .close");

    // Функция для открытия модального окна
    function openModal() {
        overlay.css("display", "block");
    }

    // Функция для закрытия модального окна
    function closeModal() {
        overlay.css("display", "none");
    }

    // Обработчик события для кнопки открытия модального окна
    openFormButton.on("click", openModal);

    // Обработчик события для кнопки закрытия модального окна
    closeButton.on("click", closeModal);

    // Закрытие модального окна при клике вне его области
    $(document).on("click", function(event) {
        if ($(event.target).is(overlay)) {
            closeModal();
        }
    });
});

// Анимация кнопки
$(document).ready(function() {
    var openFormButton = $("#openFormButton");

    // Функция для изменения размера и цвета кнопки при наведении
    openFormButton.hover(function() {
        $(this).css({
            "width": "200px", // Изменяем ширину кнопки при наведении
            "height": "60px", // Изменяем высоту кнопки при наведении
            "background-color": "rgba(250, 10, 10, 1)" // Изменяем цвет кнопки при наведении
        });
    }, function() {
        $(this).css({
            "width": "120px", // Возвращаем исходную ширину кнопки
            "height": "40px", // Возвращаем исходную высоту кнопки
            "background-color": "rgba(250, 10, 10, 1)" // Возвращаем исходный цвет кнопки
        });
    });
});