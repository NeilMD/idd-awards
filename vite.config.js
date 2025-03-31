import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/award-categories.css",
                "resources/css/gd.css",
                "resources/css/gen.css",
                "resources/css/ignite.css",
                "resources/css/styles.css",
                "resources/css/time-capsule.css",
                "resources/css/wd.css",
                "resources/css/ux.css",
                "resources/js/scripts.js",
                "resources/js/time-capsule.js",
                "resources/js/award-categories.js",
                "resources/js/app.js",
                "resources/img/nav_logo.png",
                "resources/img/nav_logo-hover.png",
                "resources/img/card_ignite.webp",
                "resources/img/card_graphic.webp",
                "resources/img/card_ux.webp",
                "resources/img/card_web.webp",
                "resources/img/card_impact.webp",
                "resources/img/index_about.webp",
                "resources/img/arrow_up.svg",
                "resources/img/favicon.svg",
                "resources/video/index_hero.webm",
            ],
            refresh: true,
        }),
    ],
    build: {
        outDir: "public/build", // Where bundled assets will be stored
        manifest: true, // Enables manifest file for Laravel integration
        rollupOptions: {
            output: {
                assetFileNames: "assets/[name].[hash].[ext]", // Organize assets like fonts, images
            },
        },
    },
});
