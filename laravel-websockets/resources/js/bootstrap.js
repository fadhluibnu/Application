window._ = require("lodash");

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require("axios");

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

import Echo from "laravel-echo";

window.Pusher = require("pusher-js");

window.Echo = new Echo({
    broadcaster: "pusher",
    key: process.env.MIX_PUSHER_APP_KEY,
    cluster: process.env.MIX_PUSHER_APP_CLUSTER,
    forceTLS: true,
});

window.Echo.channel("message").listen("MessageCreated", (event) => {
    console.log("Berhasil");
    console.log(event);

    let status = document.getElementById("btn-status");
    let message = event.message;

    if (message == "fail") {
        status.innerHTML = "Gagal";
        status.classList.add("btn-danger");
        status.classList.remove("btn-light");
        status.classList.remove("btn-success");
    }
    if (message == "success") {
        status.innerHTML = "Berhasil";
        status.classList.add("btn-success");
        status.classList.remove("btn-danger");
        status.classList.remove("btn-light");
    }
});
