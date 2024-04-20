/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./Vistas/**/*.{php}",
        "./Vistas/css/tailwind/node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {
            spacing: {
                '40': '2.5rem',
            }
        },
    },
    plugins: [ 
        require('flowbite/plugin')
    ],
}


