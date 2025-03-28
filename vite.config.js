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
                "resources/img/Asset 8.png",
                "resources/img/arrow_up.svg",
                "resources/img/GEN@3x.png",
                "resources/img/GRAPHIC@3x.png",
                "resources/img/IGNITE@3x.png",
                "resources/img/UX@3x.png",
                "resources/img/WEB@3x.png",
                "resources/img/logo-hover.png",
                "resources/video/Website Gradient.mp4",
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
