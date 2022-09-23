$(document).ready(function () {
    //Указать TITLE
    let title = 'Invoice TestForm';
    htmlMessage(".title", title)

    //Название компании
    let company = 'Test.ua';
    htmlMessage(".company_name", company);

    //URL (название папки)
    var form_url = 'margo_form_client';


    let link, name,
        last_name,
        first_name,
        description,
        phone,
        email,
        order,
        ext2,
        ext3,
        ext4,
        ext5,
        ext6,
        ext7,
        ext8,
        ext9,
        ext10,
        amount,
        currency;

    //Функция для вывода текста
    function htmlMessage(id, text){
        $(id).html(text);
    }

    // получаем значение атрибута
    let lang = $('html').attr('lang');

    // //Страница успешной оплаты
    const success_page = {
        back_site: { //значение class
            ru: "Вернуться на сайт",
            ua: "Повернутися на сайт",
        },
        ok_page1: {
            ru: "Благодарим, Ваш заказ",
            ua: "Дякуємо, Ваше замовлення",
        },
        ok_page2: {
            ru: "успешно оплачен",
            ua: "успішно оплачене",
        },
        change: function (success_page) {
            htmlMessage(".back_site", this.back_site[success_page]);
            htmlMessage(".ok_page1", this.ok_page1[success_page]);
            htmlMessage(".ok_page2", this.ok_page2[success_page]);
        }
    };
    success_page.change(lang);

    //создаем обьект в который добавляем все поля на двух языках FORM
    const local = {
        btn_success: { //значение id в label
            ru: 'Создать ссылку',
            ua: 'Створити посилання',
        },
        first_name: {
            ru: 'Имя',
            ua: "Ім'я",
        },
        last_name: {
            ru: 'Фамилия',
            ua: 'Прізвище',
        },
        description: {
            ru: 'Описание',
            ua: 'Опис',
        },
        order: {
            ru: 'Номер заказа',
            ua: 'Номер замовлення',
        },
        email: {
            ru: 'Почта',
            ua: 'Пошта',
        },
        phone: {
            ru: 'Телефон',
            ua: 'Телефон',
        },
        btn_ext: {
            ru: 'Расширить дополнительные поля',
            ua: 'Розширити додаткові поля',
        },
        amount: {
            ru: 'Сумма',
            ua: 'Сума',
        },
        ext3: {
            ru: 'Дополнительное поле 1',
            ua: 'Додаткове поле 1',
        },
        ext4: {
            ru: 'Дополнительное поле 2',
            ua: 'Додаткове поле 2',
        },
        ext5: {
            ru: 'Дополнительное поле 3',
            ua: 'Додаткове поле 3',
        },
        // Добавляем перевод ошибок
        required: { //для обязательного поля
            ru: 'Поле не заполнено',
            ua: 'Поле не заповнено',
        },
        regSum: { //для поля суммы
            ru: 'Введите сумму верно',
            ua: 'Введіть суму вірно',
        },
        regPhone: { //для поля номера телефона
            ru: 'Введите корректный номер телефона',
            ua: 'Введіть коректний номер телефону',
        },
        regEmail: { //для почты
            ru: 'Введите корректную почту',
            ua: 'Введіть корректну пошту',
        },
        regNumber: { //поле только для чисел
            ru: 'Введите только цифры',
            ua: 'Введіть тільки цифри',
        },
        change: function (local) { //прописываем ID елемента, в котором нужно изменить название label на form.php
            htmlMessage("#first_name", this.first_name[local]);
            htmlMessage("#last_name", this.last_name[local]);
            htmlMessage("#description", this.description[local]);
            htmlMessage("#order", this.order[local]);
            htmlMessage("#email", this.email[local]);
            htmlMessage("#phone", this.phone[local]);
            htmlMessage("#amount", this.amount[local]);
            htmlMessage("#ext3", this.ext3[local]);
            htmlMessage("#ext4", this.ext4[local]);
            htmlMessage("#ext5", this.ext5[local]);
            htmlMessage(".btn-ext", this.btn_ext[local]);
            htmlMessage("#btn-success", this.btn_success[local]);
        }

    } // конец обьекта local

    local.change(lang);

    //метод для написания регулярных выражений в validationSubmit
    $.validator.addMethod('regexp', function (value, element, params) {
        let expression = new RegExp(params);
        return this.optional(element) || expression.test(value);
    });

    // reqNumber - поле только для цифр
    let regNumber = /^[0-9-]+$/;
    // reqEmail - поле только для почты
    let regEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/i;
    // reqSum - поле только для суммы
    let regSum = /^\d{1,5}(\.\d{2})?$/;
    // reqPhone - поле только для телефона
    let regPhone = /^(\+)?([- ()]?\d[- ()]?){10,12}(\s*)?$/;


    // Валидация полей для отправки формы
    const validationSubmit =

        $("#validate").validate({
            // Только проверять, а не отправлять форму
            // debug: true,
            // проверяем при отправке формы
            onsubmit: true,
            errorClass: "validation_error error", // Класс стилей по умолчанию для ошибок: error
            validClass: "success",
            onkeyup: true, //проверяет валидность сразу при вводе
            //Добавить Name если есть условие
            rules: {
                first_name: {
                    required: false,

                },
                last_name: {
                    required: false,
                },
                description: {
                    required: true,
                },
                email: {
                    required: false,
                    regexp: regEmail,
                },
                phone: {
                    required: false,
                    regexp: regPhone,
                },
                amount: {
                    required: true,
                    regexp: regSum,
                },
                order: {
                    required: false,
                    regexp: regNumber,
                },
            }, //конец rules

            //Вывод сообщения ошибки
            messages: {
                first_name: {
                    required: function () {
                        return local.required[lang];
                    }
                },
                last_name: {
                    required: function () {
                        return local.required[lang];
                    },
                },
                description: {
                    required: function () {
                        return local.required[lang];
                    },
                },
                email: {
                    required: function () {
                        return local.required[lang];
                    },
                    regexp: function () {
                        return local.regEmail[lang];
                    }
                },
                phone: {
                    required: function () {
                        return local.required[lang];
                    },
                    regexp: function () {
                        return local.regPhone[lang];
                    }
                },
                amount: {
                    required: function () {
                        return local.required[lang];
                    },
                    regexp: function () {
                        return local.regSum[lang];
                    }
                },
                order: {
                    required: function () {
                        return local.required[lang];
                    },
                    regexp: function () {
                        return local.regNumber[lang];
                    }
                },

            }, //конец messages

            //Функции
            highlight: function (element, errorClass, validClass) {
                $(element).parents("div.form-floating").addClass(errorClass).removeClass(validClass); //добавляем ошибки
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parents(".error").removeClass(errorClass).addClass(validClass); //убираем ошибки
            },
            onkeyup: function (element) {
                $(element).valid()
            }, //функция проверяет сразу валидность поля при вводе


            // добавляем обработчик submit'a
            submitHandler: function (form) {
                //Получаем все данные с формы
                var form = $('#validate').serializeArray();

                $.ajax({
                    url: 'buy.php',
                    type: 'POST',
                    //Передаем информацию в buy.php
                    data: {form: form , lang: lang, form_url: form_url},
                    success: function (data) {
                        jsonDecodeResult = JSON.parse(data);
                        link = jsonDecodeResult.link;
                        window.open(link);
                    } // success FORM
                }); // AJAX
            } // END submitHandler
        }); //validate


    // Меняем поля при переключении языка
    $('.btnLangChange').click(function () {
        $('.btnLangChange').each(function (i, item) {
            $(item).removeClass('active');
        })
        lang = $(this).attr('data-lang'); //берем значение из атрибута btn
        $(this).addClass('active'); //добавляем класс актив для lang
        $('form[name=myForm]').trigger('reset'); // очищаем поля при переключении языка
        local.change(lang); //менять язык поля при переключении
        success_page.change(lang);
        validationSubmit.resetForm(); //обновить
    })

    // Отобразить доп. поля
    $(".btn-ext").click(function () {
        if (!$(this).hasClass('active')) {
            $(this).addClass("active")
            $(".hidden-fields").removeClass("d-none")
        } else {
            $(this).removeClass("active")
            $(".hidden-fields").addClass("d-none")
        }
    })

})