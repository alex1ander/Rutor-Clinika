<?php
$contctForm = get_field('contact_form','options');
?>

<div class="contact__form">
    <div class="form-tabs">
        <button class="form-tab form-tab--active">Phone Call</button>
        <button class="form-tab">Email Message</button>
    </div>
    <div class="phone-form">
        <?= do_shortcode($contctForm['phone_form_shortcode']) ?>
    </div>
    <div class="email-form">
        <?= do_shortcode($contctForm['email_form_shortcode']) ?>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".contact__form").forEach(formBlock => {
        const tabs = formBlock.querySelectorAll(".form-tab");
        const phoneForm = formBlock.querySelector(".phone-form");
        const emailForm = formBlock.querySelector(".email-form");

        tabs.forEach(tab => {
            tab.addEventListener("click", () => {
                // Снимаем активный класс только внутри этой формы
                tabs.forEach(t => t.classList.remove("form-tab--active"));
                tab.classList.add("form-tab--active");

                // Переключаем формы
                if (tab.textContent.trim() === "Phone Call") {
                    phoneForm.style.display = "block";
                    emailForm.style.display = "none";
                } else {
                    phoneForm.style.display = "none";
                    emailForm.style.display = "block";
                }
            });
        });

        // Изначально показываем только телефонную форму
        phoneForm.style.display = "block";
        emailForm.style.display = "none";
    });
});
</script>

