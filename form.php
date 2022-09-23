<div class="row justify-content-center mt-10">
    <div class="col-md-12">

        <!-- Имя -->
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="form-floating">
                    <input name="first_name" type="text" class="form-control input100" id="floatingfName"
                           placeholder=" ">
                    <span class="focus-input100"></span>
                    <label class="label-input100 " id="first_name" for="floatingfName"></label>
                </div>
            </div>
        </div>

        <!-- Фамилия -->
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="form-floating">
                    <input name="last_name" type="text" class="form-control input100" id="floatinglName"
                           placeholder=" ">
                    <span class="focus-input100"></span>
                    <label class="label-input100" for="floatinglName" id="last_name"></label>
                </div>
            </div>
        </div>

        <!-- Описание -->
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="form-floating">
                    <input name="description" type="text" class="form-control input100" id="floatingDescription"
                           placeholder=" ">
                    <span class="focus-input100"></span>
                    <label class="label-input100" for="floatingDescription" id="description"></label>
                </div>
            </div>
        </div>

        <!-- Номер заказа -->
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="form-floating">
                    <input name="order" type="text" class="form-control input100 " id="floatingOrder" placeholder=" ">
                    <span class="focus-input100"></span>
                    <label class="label-input100" for="floatingOrder" id="order"></label>
                </div>
            </div>
        </div>

        <!-- Почта -->
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="form-floating">
                    <input name="email" type="text" class="form-control input100" id="floatingEmail" placeholder=" ">
                    <span class="focus-input100"></span>
                    <label class="label-input100" for="floatingEmail" id="email"></label>
                </div>
            </div>
        </div>

        <!--  Телефон -->
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="form-floating">
                    <input name="phone" type="text" class="form-control input100" id="floatingPhone" placeholder=" ">
                    <span class="focus-input100"></span>
                    <label class="label-input100" for="floatingPhone" id="phone"></label>
                </div>
            </div>
        </div>

        <!-- Отображение курса валюты -->
        <div class="row justify-content-center curr mb-3">

            <div class="col col-md-4">
                <div class="row">
                    <label class="h6 font-weight-bold">USD</label>
                    <label><?= $usd ?></label></div>
            </div>
            <div class="col col-md-4">
                <div class="row">
                    <label class="h6 font-weight-bold">EUR</label>
                    <label><?= $eur ?></label></div>
            </div>
            <div class="col col-md-4">
                <div class="row">
                    <label class="h6 font-weight-bold">RUB</label>
                    <label><?= $rub ?></label></div>
            </div>
        </div>

        <!-- Сумма -->
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="form-floating">
                    <input name="amount" type="text" class="form-control input100" id="floatingAmount" placeholder=" ">
                    <span class="focus-input100"></span>
                    <label class="label-input100" for="floatingAmount" id="amount"></label>
                </div>
            </div>

            <!-- Валюта -->
            <div class="col-md-6">
                <div class="form-floating mb-3">
                    <select class="form-select input100" name="currency" id="floatingCurr" placeholder=" ">
                        <option value="UAH" id="case_uah" selected="selected">UAH</option>
                        <option value="USD" id="case_usd">USD</option>
                        <option value="EUR" id="case_eur">EUR</option>
                        <option value="RUB" id="case_rub">RUB</option>
                    </select>
                    <span class="focus-input100"></span>
                    <label class="label-input100" for="floatingCurr">Валюта</label>
                </div>
            </div>
        </div>

        <!-- Кнопка Создать ССЫЛКУ -->
        <div class="d-grid gap-2 col col-lg-8 mx-auto">
            <button id="btn-success" type="submit" class="btn btn-success btn-block btn-show-tab sub"></button>
        </div>


    </div>
</div>