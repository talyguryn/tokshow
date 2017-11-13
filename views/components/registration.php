<div id="registration" class="registration">

    <div class="registration__wrapper">

        <div class="registration__label">
            Регистрация
        </div>

        <div id="reg-form" class="registration__form">

            <input type="text" id="name" name="name" value="" placeholder="Ваше имя">
            <input type="text" id="phone" name="phone" value="" placeholder="+7 999 000 00 00">
            <input type="text" id="email" name="email" value="" placeholder="Адрес электронной почты">

            <button onclick="tokshow.sendForm.sendForm();">Зарегистрироваться</button>

        </div>

        <div id="reg-form-message" class="registration__form--success hide">
            Увидимся на мероприятии!
        </div>

    </div>

</div>
