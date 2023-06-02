/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ['./src/**/*.{astro,html,js,jsx,md,mdx,svelte,ts,tsx,vue}'],
	theme: {
		extend: {
			colors:{
				'dark':'#222222',
				'accent':'#94FFE5',
				'main':'#21AD86',
				'light':'#E9EFFF'
			},
			fontFamily:{
				'logo': ['Helvetica93-ExtendedBlack', 'sans-serif'],
				'regular': ['Raleway-Regular', 'sans-serif'],
				'medium': ['Raleway-Medium', 'sans-serif'],
				'bold': ['Raleway-Bold', 'sans-serif'],
				'extra-bold': ['Raleway-ExtraBold', 'sans-serif']
			}
		},
		container:{
			center: true,
			padding: {
        DEFAULT: '12px',
        sm: '16px',
        lg: '16px',
        xl: '16px',
        '2xl': '64px',
      },
		}
	},
	plugins: [],
}
