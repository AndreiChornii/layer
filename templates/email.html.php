<h2>Залишити питання</h2>

<form id="set_download" name="set_form_download" action="" method="post" novalidate enctype="multipart/form-data">
    <label for="name_field" id="label_for_name_field">Ваше ім'я:</label>
    <input type="text"" id="name_field" name="name_field_set" required/>
    <label for="tel_field" id="label_for_tel_field">Телефон:</label>
    <input type="tel" id="tel_field" name="tel_field_set" placeholder="0501234567" pattern="[0-9]{10}" />
    <label for="email_field" id="label_for_email_field">Email:</label>
    <input type="email" id="email_field" name="email_field_set" />
    <label for="text_field_set" id="label_for_text_field">Коротко опишіть питання:</label>
    <textarea id="text" name="text_field_set" rows="10" cols="10">
    </textarea>
    <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
    <label for="userfile[]" id="label_for_userfile[]">Оберіть один або більше файлів (doc, xls, txt):</label>
    <input name="userfile[]" type="file" multiple="true">
    <input class="popup-link-download" id="sub" type="submit" name="submit" value="Надіслати">
</form>