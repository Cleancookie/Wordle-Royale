require('./bootstrap');

import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/inertia-vue3";
import { InertiaProgress } from "@inertiajs/progress";
import { ZiggyVue } from "ziggy";

createInertiaApp({
    resolve: (name) => require(`./Pages/${name}`),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .mixin({ methods: { route } }) // Ziggy routes
            .use(ZiggyVue, Ziggy) // Ziggy is defined in app.blade.js @routes
            .use(plugin)
            .mount(el);
    },
});

InertiaProgress.init({
});
