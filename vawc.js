function showForm(formId) {
    document.querySelectorAll(".form-box").forEach(form => form.classList.remove("active"));
    document.getElementById(formId).classList.add("active");

}

var openNotification = false;

            const notification = () => {
                let notification = document.querySelector("#notificationBar");
                if (openNotification) {
                    notification.classList.remove('open-notification');
                    openNotification = false;
                }else {
                    notification.classList.add('open-notification');
                    openNotification = true;
                }

            }
            let notificationBtn = document.querySelector("#notificationBtn");
            notificationBtn.addEventListener("click", notification);
        