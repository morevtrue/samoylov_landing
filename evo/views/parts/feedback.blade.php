<form class="needs-validation form-feedback" method="POST">
  <h4 class="title-section mb-5 text-center title-feedback">
    Оставить заявку <br>на участие в курсе:
  </h4>
  <input type="hidden" name="formid" value="basic">
  <div class="form-group mt-3 mb-3">
    <input type="text" class="form-control form-control-sm {{ $data['name.requiredClass'] ?? '' }} {{ $data['name.errorClass'] ?? '' }}" id="name" name="name" placeholder="Ваше имя">
    <div class="invalid-feedback">{!! $data['name.error'] ?? '' !!}</div>
  </div>
  <div class="form-group mt-3 mb-3">
    <input type="text" class="form-control form-control-sm {{ $data['telegram.requiredClass'] ?? '' }} {{ $data['telegram.errorClass'] ?? '' }}" id="telegram" name="telegram" placeholder="Ссылка на Ваш телеграм">
    <div class="invalid-feedback">{!! $data['telegram.error'] ?? '' !!}</div>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" value="" id="politics" name="politics" />
    <label class="form-check-label" for="politics">
        Я соглашаюсь с
        <a href="{{ $modx->getConfig('site_url') }}politika-obrabotki-personalnyh-dannyh" class="form-link" target="_blank">политикой обработки персональных данных</a>
    </label>
  </div>
  <div class="invalid-feedback">{!! $data['politics.error'] ?? '' !!}</div>
  <div class="form-group field">
    <input type="submit" class="btn btn-primary btn-submit" value="Отправить">
  </div>
    {!! $data['form.messages'] ?? '' !!}
</form>

<script>
    document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector(".form-feedback");
    const form_wrapper = document.querySelector(".form-wrapper");
    const form_image = form_wrapper.querySelector("img");
    const submitButton = form.querySelector('input[type="submit"]');
    const politics_checkbox = form.querySelector('[name="politics"]')

    politics_checkbox.addEventListener("click", (e) => {
        if (e.target.value === '') {
            e.target.value = '1';
            politics_checkbox.classList.remove("checkbox-is-invalid");
        } else e.target.value = '';
    });

    form.addEventListener("submit", async function (e) {
        e.preventDefault();

        submitButton.disabled = true;
        submitButton.classList.add('disabled');
        const originalText = submitButton.value;
        submitButton.value = "Отправка...";

        const nameInput = form.querySelector('[name="name"]');
        const telegramInput = form.querySelector('[name="telegram"]');
        let valid = true;

        if (!nameInput.value.trim()) {
            nameInput.classList.add("is-invalid");
            nameInput.nextElementSibling.innerHTML = "Введите имя";
            valid = false;
        }

        if (!telegramInput.value.trim()) {
            telegramInput.classList.add("is-invalid");
            telegramInput.nextElementSibling.innerHTML = "Введите ссылку на телеграм";
            valid = false;
        }

        if (!politics_checkbox.value.trim()) {
            politics_checkbox.classList.add("checkbox-is-invalid");
            valid = false;
        }

        if (!valid) {
            submitButton.disabled = false;
            submitButton.classList.remove('disabled');
            submitButton.value = originalText;
            return;
        }

        const data = new URLSearchParams();

        for (const input of form.querySelectorAll("input")) {
            if (input.name) {
                data.append(input.name, input.value);
            }
        }

        console.log(data)

        try {
            const response = await fetch(location.href, {
                method: "POST",
                headers: {
                "Content-Type": "application/x-www-form-urlencoded",
                "X-Requested-With": "XMLHttpRequest"
                },
                body: data
            });

            const html = await response.text();

            form.classList.add('d-none');

            form_image.src = 'template/img/success.svg';
            form_wrapper.insertAdjacentHTML('beforeend', '<p class="feedback-messages">Ваша заявка успешно отправлена!</p>');

        } catch (err) {
            alert("Ошибка отправки формы.");
            console.error(err);
        } finally {
            submitButton.disabled = false;
            submitButton.value = originalText;
            submitButton.classList.remove('disabled');
        }
    });
    });
</script>

