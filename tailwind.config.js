module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        container: {
            center: true,
            padding: {
                DEFAULT: "1rem",
                md: "1.5rem",
            },
        },
        extend: {
            colors: {
                primary: {
                    light: "#fbf5e0",
                    DEFAULT: "#f9be00",
                    dark: "#e3ad00",
                },
            },
        },
    },
    plugins: [],
};
