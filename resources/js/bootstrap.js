// import 'bootstrap';
import * as bootstrap from 'bootstrap'
window.bootstrap = bootstrap

// Egy központi inicializáló függvény
function initBootstrapUI(root = document) {
    // TOOLTIP
    const tooltipTriggerList = Array.from(root.querySelectorAll('[data-bs-toggle="tooltip"]'))
    tooltipTriggerList.forEach(el => {
        // már létező instance törlése (ha újrarender miatt duplikálódna)
        const existing = bootstrap.Tooltip.getInstance(el)
        if (existing) existing.dispose()
        new bootstrap.Tooltip(el)
    })

    // TOAST
    const toastList = Array.from(root.querySelectorAll('.toast'))
    toastList.forEach(el => {
        // ne induljon el magától, csak ha kéred:
        const existing = bootstrap.Toast.getInstance(el)
        if (existing) existing.dispose()
        // autohide true/false a HTML data attribútumokkal is szabályozható
        new bootstrap.Toast(el)
    })
}

document.addEventListener('DOMContentLoaded', () => initBootstrapUI())
window.addEventListener('livewire:navigated', () => initBootstrapUI())
document.addEventListener('livewire:load', () => {
    if (window.Livewire) {
        window.Livewire.hook('message.processed', () => initBootstrapUI())
    }
})
document.addEventListener('turbo:load', () => initBootstrapUI())
window.__initBootstrapUI = initBootstrapUI




/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// import Pusher from 'pusher-js';
// window.Pusher = Pusher;

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: import.meta.env.VITE_PUSHER_APP_KEY,
//     cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER ?? 'mt1',
//     wsHost: import.meta.env.VITE_PUSHER_HOST ?? `ws-${import.meta.env.VITE_PUSHER_APP_CLUSTER}.pusher.com`,
//     wsPort: import.meta.env.VITE_PUSHER_PORT ?? 80,
//     wssPort: import.meta.env.VITE_PUSHER_PORT ?? 443,
//     forceTLS: (import.meta.env.VITE_PUSHER_SCHEME ?? 'https') === 'https',
//     enabledTransports: ['ws', 'wss'],
// });
